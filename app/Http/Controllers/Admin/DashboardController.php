<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

       
    }

    public function index()
    {

            return view('admin.dashboard.index', ['title' => 'DownStreams Admin']);

    }
}
