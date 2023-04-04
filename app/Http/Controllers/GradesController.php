<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grades;
use App\Models\EnrolledSubjects;
use App\Models\studentinfo;
class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grades = Grades::join('studentinfo', 'stugrades.sno', '=', 'studentinfo.sno')->get();
        return view('grades.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $grades = new Grades();
        $grades->esNo = $request->xesNo;
        $grades->sno = $request->xsno;
        $grades->prelim = $request->xprelim;
        $grades->midterm = $request->xmidterm;
        $grades->finals = $request->xfinals;
        $grades->remarks = $request->xremarks;
        $grades->save();
        return redirect()->route('grades');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $grades = Grades::where('gNo', $id)->get();
        return view('grades.show', compact('grades'));
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
        $grades = Grades::where('gNo', $id)->get();
        return view('grades.edit', compact('grades'));
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

        $grades = Grades::where('gNo', $id)
        ->update(
             ['esNo' => $request->xesNo,
             'sno'=> $request->xsno,
             'prelim'=> $request->xprelim,
             'midterm'=> $request->xmidterm,
             'finals' => $request->xfinals,
             'remarks' => $request->xremarks,
             ]);
          return redirect()->route('grades');


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

        $grades = Grades::where('gNo', $id);
        $grades->delete();
        return redirect()->route('grades');

    }

    public function getSubjectInfo(){
        $enrolledsubjects = EnrolledSubjects::all();
        $studentinfo = studentinfo::all();
        return view('grades.add', compact('enrolledsubjects', 'studentinfo'));
    }
}
