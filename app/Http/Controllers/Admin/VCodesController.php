<?php

namespace App\Http\Controllers\Admin;

use App\Code;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class VCodesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $codes = Code::all();
        return view('admin.v-codes.index', ['title' => 'Codes List', 'codes' => $codes]);
    }

    public function create()
    {
        return view('admin.v-codes.import', ['title' => 'import code']);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'code_file' => 'required',
        ]);

        $file = $request->file('code_file');
        $path = Input::file('code_file')->getRealPath();
        if ($request->hasFile('code_file')) {
            if ($request->file('code_file')->isValid()) {
                $destinationPath = "uploads/";
                $extension = $file->getClientOriginalExtension('code_file');
                $fileName = $file->getClientOriginalName('code_file'); // renameing image
                $request->file('code_file')->move($destinationPath, $fileName);
                $readFile = $destinationPath . $fileName;

                try {

                    Excel::load($readFile, function ($reader) {
                        $count = 0;
                        foreach ($reader->toArray() as $row) {
                                $input['value'] = $row['unique_code'];
                                Code::create($input);

                            $count++;
                        }
                    });

                    Session::flash('flash_message', 'File uploaded successfully.');
                    return redirect()->back();
                } catch (Exception $e) {
                    Session::flash('error_msg', $e->getMessage());
                    return redirect()->back();
                }

            }
        }

    }
    public function destroy($id)
    {
        $code = Code::findOrFail($id);
        $code->delete();
        Session::flash('flash_message', 'Code successfully deleted!');
        return redirect()->back();
    }
    public function DeleteAll(){
        DB::table('codes')->truncate();
        Session::flash('flash_message', 'Codes successfully deleted!');
        return redirect()->back();
    }
}
