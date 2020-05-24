<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Payment;
use Session;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getLogin()
    {
        return view ('login_siswa');
    }

    public function postLogin(Request $request)
    {
         $exists = Student::where('nis', $request->nis)->exists();
         
         if($exists) :
               $student = Student::where('nis', $request->nis)->get();
               
               foreach($student as $val) :
                   Session::put('id', $val->id);
                   $nama = $val->nama;
               endforeach;
               
               if(strtolower($nama) == strtolower($request->nama)) :
                  
                     Session::put('nama', $nama);
                     Session::put('nis', $request->nis);
                     
                     return redirect('/halaman_siswa');
               else :
                    return back();
                     
               endif;
               
            else :
               return back();
            endif;
    }
    public function index(){
      
      if(session('nama') == null) :  
         return redirect('login_siswa');
     endif;
       
      $data = [
          'payment' => Payment::where('id_student', Session::get('id'))->paginate(3)
      ];
       
      return view('index', $data)->with('i');
    }

}
