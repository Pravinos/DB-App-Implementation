<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $greeks = CustomFunctions::getGreekOver18(2022);
        // return view('main', ['app_users' => $greeks]);
    }
}
