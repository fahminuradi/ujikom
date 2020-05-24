<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spp;
use App\Student;
use App\Payment;
use App\Grade;
use App\User;

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
        $student = new Student();
        $spp = new Spp();
        $grade  = new Grade();
        $payment = new Payment();
        $user = new User();
        return view('home', compact('student','spp','grade','payment','user'))->with('i');
    }
}
