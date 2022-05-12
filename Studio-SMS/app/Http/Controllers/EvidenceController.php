<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Using evidence and student models  
use App\Models\Evidence;
use App\Models\Student;

class EvidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all(['id','first_name','last_name']);
        $evidence = Evidence::all();
        return view('evidence.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all(['id','first_name','last_name']);
        return view('evidence.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'url'=>'required',
            'description'=>'required',
            'student_id'=>'required'
        ]);

        $evidence = new Evidence([
            'student_id'=> $request->get('student_id'),
            'url' => $request->get('url'),
            'description' => $request->get('description')
        ]);

        $evidence->save();
        return redirect('/evidence/create')->with('success', 'Evidence submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::find($id);
        return view('evidence.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evidence = Evidence::find($id);
        return view('evidence.edit', compact('evidence'));
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
        $request->validate([
            'url'=>'required',
            'description'=>'required'
        ]);

        $evidence = Evidence::find($id);
        $evidence->url = $request->get('url');
        $evidence->description = $request->get('description');
        $evidence->save();

        return redirect('/students')->with('success', 'Evidence updatedd!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evidence = Evidence::find($id);
        $evidence->delete();

        return redirect('/students')->with('success', 'Submission deleted!');
    }
}
