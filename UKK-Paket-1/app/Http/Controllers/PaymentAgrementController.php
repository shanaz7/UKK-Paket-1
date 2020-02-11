<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment_Agrement;

class PaymentAgrementController extends Controller
{
    public function index(){
        $payment_agrement = Payment_Agrement::all();
        return view('payment_agrement.index',['payment_agrement' => $payment_agrement]);
    }

    public function create(){
        return view('payment_agrement.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'year' => 'required',
            'nominal' => 'required'
        ]);

        Payment_Agrement::create([
            'year' => $request->year,
            'nominal' => $request->nominal
        ]);

        return redirect('/payment-agrement');
    }

    public function edit($id){
        $payment_agrement = Payment_Agrement::find($id);
        return view('payment_agrement.edit',['payment_agrement' => $payment_agrement]);
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'year' => 'required',
            'nominal' => 'required'
        ]);

        $payment_agrement = Payment_Agrement::find($id);
        $payment_agrement->year = $request->year;
        $payment_agrement->nominal = $request->nominal;
        $payment_agrement->save();

        return redirect('/payment-agrement');
    }

    public function destroy($id){
        $payment_agrement = Payment_Agrement::find($id);
        $payment_agrement->delete();
        return redirect('/payment-agrement');
    }
}
