<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Student;
use App\Spp;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $payments = Payment::latest()->paginate(5);
        return view('payment.index', compact('payments'))
        ->with('i', (request()->input('page', 1)-1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payment = new Payment();
        $students = Student::all();
        $spps = Spp::all();
        return view('payment.create', compact('payment','students','spps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Payment::create([
            'id_student' => $request->id_student,
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'jumlah' => $request->jumlah,
            'id_spp' => $request->id_spp
        ]);
        return redirect('/payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payment = Payment::find($id);
        return view('payment.show', compact('payment'));
    }

    public function employe()
    {
        $payments = Payment::latest()->paginate(5);
        return view('payment.employe', compact('payments'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }
    public function cetak()
    {
        $student = Student::all();
        $spp = Spp::all();
        $payment = Payment::all();
        return view('payment.print', compact('student','spp','payment'))->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
