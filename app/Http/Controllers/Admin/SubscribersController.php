<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Subscriber;
use Auth;
use Illuminate\Support\Facades\Session;
use DB;

class SubscribersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $subscribers = Subscriber::all();
        return view('admin.subscribers.index', ['title' => 'Subscribers List', 'subscribers' => $subscribers]);
    }
     public function destroy($id)
    {
        $subscriber = Subscriber::findOrFail($id);
         Session::flash('flash_message', 'Subscriber successfully deleted!');
        $subscriber->delete();
        return redirect()->back();
    }
    public function DeleteAll(){
        DB::table('subscribers')->truncate();
        Session::flash('flash_message', 'Subscribers successfully deleted!');
        return redirect()->back();
    }
}
