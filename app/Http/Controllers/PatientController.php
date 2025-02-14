<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::all();
        return view('patients.index', ['patients' => $patients]);
    }
    public function create(){
        return view('patients.create');
    }
    public function store(Request $request){
       $data = $request->validate([
        'lname' => 'required',
        'fname' => 'required',
        'mname' => 'required',
        'bdate' => 'required',
        'age' => 'required|numeric',
        'contact' => 'required',
        'complaint' => 'required'
       ]);
       $newPatient = Patient::create($data);

       return redirect(route('patients.index'));
    }
    public function edit(Patient $patient){
        return view('patients.edit',['patient'=> $patient]);
    }
    public function update(Patient $patient, Request $request){
        $data = $request->validate([
            'lname' => 'required',
            'fname' => 'required',
            'mname' => 'required',
            'bdate' => 'required',
            'age' => 'required|numeric',
            'contact' => 'required',
            'complaint' => 'required'
           ]);
           $patient->update($data);
           
           return redirect(route('patients.index'))->with('success', 'Patient Updated Successfully');
    }
    public function delete(Patient $patient){
        $patient->delete();
        return redirect(route('patients.index'))->with('success', 'Patient Record Deleted Successfully');
    }
    public function search(Request $request)
    {
        $query = $request->input('search');
        $patients = Patient::where('lname', 'LIKE', "%{$query}%")
                     ->orWhere('fname', 'LIKE', "%{$query}%")
                     ->get();
        return view('patients.index', compact('patients'));
    }

    public function view(Patient $patient){
        return view('patients.view',['patient'=> $patient]);
    }
    
}
