<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Subscriber;
use App\Code;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Response;
use Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.pages.index', ['title' => 'Landing-Voucher-MS']);
    }

//Send Email Verification
/*
    public function SendEmail(Request $request)
    {

        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email|max:500|unique:subscribers',
        ]);
        $email = $input['email'];
        $actCode = md5(sha1(encrypt(rand())));
        $url = url('/email-verification?act-code=' . $actCode . '&email=' . $email);
        $input['act_code'] = $actCode;
        $data = array(
            'email' => $email,
            'url' => $url,
            'username' => "User",
        );

        Mail::send('home.email.notification', $data, function ($message) use ($data) {
            $message->to($data['email'], $data['username'])->subject('DownStreams | Verify your email');
        });
        Subscriber::create($input);
        return view('home.pages.thankyou', ['title' => 'Thank You', 'email' => $email]);
    }
*/
 public function SendEmail(Request $request)
    {

        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email|max:500|unique:subscribers',
        ]);
        $email = $input['email'];
        $actCode = md5(sha1(encrypt(rand())));
        $input['act_code'] = $actCode;
        $code = DB::table('codes')->first();
        if(empty($code)){
            die("Sorry Compaign is over now....");
        }
        $data = array(
            'email' => $email,
            'code' => $code->value,
            'username' => "User",
        );
        Mail::send('home.email.code', $data, function ($message) use ($data) {
            $message->to($data['email'], $data['username'])->subject('DownStreams | Your Code is here');
        });
        $input['vcode'] = $code->value;
        $input['status'] = 1;
        $input['act_code'] = 0;
        Subscriber::create($input);
        $code = Code::findOrFail($code->id);
        $code->delete();
        return view('home.pages.confirmed', ['title' => 'Success', 'email' => $email]);
    }

//Verify Email
    public function EmailVerification()
    {
        if (isset($_GET['email']) && isset($_GET['act-code'])) {
            $reg = "/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/";
            
            $email = $_GET['email'];
            $actCode = $_GET['act-code'];
            $results = DB::table('subscribers')->where('email', $email)->where('act_code', $actCode)->first();

            if (empty($results)) {
                dd("Invalid Email or Activation code in your request");
            } else {
                $code = DB::table('codes')->first();
                if(empty($code)){
                    die("Sorry Compaign is over now....");
                }
                $data = array(
                    'email' => $results->email,
                    'code' => $code->value,
                    'username' => "User",
                );
                Mail::send('home.email.code', $data, function ($message) use ($data) {
                    $message->to($data['email'], $data['username'])->subject('DownStreams | Your Code is here');
                });
                //update Subscriber with unique code and email status
                $input['vcode'] = $code->value;
                $input['status'] = 1;
                $input['act_code'] = 0;
                $subscriber = Subscriber::findOrFail($results->id);
                $subscriber->fill($input)->save();
                //Delete code from codes table
                $code = Code::findOrFail($code->id);
                $code->delete();
                return view('home.pages.confirmed', ['title' => 'Success', 'email' => $results->email]);

            }


        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
