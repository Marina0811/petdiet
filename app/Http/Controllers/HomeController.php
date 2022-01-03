<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

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
        // if (!session()->has('targetDay'))
        // {
        //     session()->put('targetDay', Carbon::now());
            
        // }
        session()->put('targetDay', Carbon::tomorrow());
        return view('home');
    }
}
