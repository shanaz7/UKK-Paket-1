<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;

class ClassController extends Controller
{
    public function index(){
        $class = Classes::all();
        return view('class.index',['class' => $class]);
    }

    public function create(){
        return view('class.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'class_name' => 'required',
            'expertise_competence' => 'required'
        ]);

        Classes::create([
            'class_name' => $request->class_name,
            'expertise_competence' => $request->expertise_competence
        ]);

        return redirect('/class');
    }

    public function edit($id){
        $class = Classes::find($id);
        return view('class.edit',['class' => $class]);
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'class_name' => 'required',
            'expertise_competence' => 'required' 
        ]);

        $class = Classes::find($id);
        $class->class_name = $request->class_name;
        $class->expertise_competence = $request->expertise_competence;
        $class->save();

        return redirect('/class');
    }

    public function destroy($id){
        $class = Classes::find($id);
        $class->delete();
        return redirect('/class');
    }
}
