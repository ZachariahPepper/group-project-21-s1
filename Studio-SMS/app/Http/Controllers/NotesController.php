<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;
use App\Models\Student;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all(['id', 'first_name', 'last_name']);
        $notes = Notes::all();
        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all(['id','first_name','last_name']);
        return view('notes.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->validate([
        //  'documentation'=>'required'
        //]);
        $notes = new Notes([
            'student_id'=> $request->get('student_id'),
            'documentation'=> $request->get('documentation')
        ]);
        $notes->save();
        return redirect('/notes/create')->with('success', 'Note saved!');
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
        return view('notes.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notes = Notes::find($id);
        return view('notes.edit', compact('notes')); 
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'documentation'=>'required'
        // ]);

        $notes = Notes::find($id);
        $notes->student_id = $request->get('student_id');
        $notes->documentation =  $request->get('documentation');
        $notes->save();

        return redirect('/students')->with('success', 'Note updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notes = Notes::find($id);
        $notes->where('id', $id)->delete();
        return redirect('/students')->with('success', 'Note deleted!');
    }
}
