<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\EnrolledSubjects;


class EnrolledSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $EnrolledSubjects = new EnrolledSubjects();
        // $EnrolledSubjects->subjectCode = "IT ELECT 1";
        // $EnrolledSubjects->description = "Mobile Application Development";
        // $EnrolledSubjects->units = 3;
        // $EnrolledSubjects->schedule = "TF 4:00PM - 6:30PM";
        // $EnrolledSubjects->save();
        // echo "added";

        $enrolledsubjects = EnrolledSubjects:: all();
        return view('enrolledsubjects/index' , compact('enrolledsubjects'));

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
        $validateData =$request->validate([
            'xsubjectCode' => ['required', 'max:12'],
            'xdescription' =>['required', 'max:100'],
            'xunits'=>['required'],
            'xschedule' =>['required', 'max:30'],
        ]);

        $enrolledsubjects = new EnrolledSubjects();
        $enrolledsubjects->subjectCode=$request->xsubjectCode;
        $enrolledsubjects->description=$request->xdescription;
        $enrolledsubjects->units=$request->xunits;
        $enrolledsubjects->schedule=$request->xschedule;
        $enrolledsubjects ->save();
        return redirect()->route('enrolledsubjects');
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
        $enrolledsubjects = EnrolledSubjects::where('esNo', $id)->get();
        return view('enrolledsubjects.show', compact('enrolledsubjects'));
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
        $enrolledsubjects = EnrolledSubjects::where('esNo', $id)->get();
        return view('enrolledsubjects.edit', compact('enrolledsubjects'));
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
        $validateData =$request->validate([
            'xsubjectCode' => ['required', 'max:12'],
            'xdescription' =>['required', 'max:100'],
            'xunits'=>['required'],
            'xschedule' =>['required', 'max:30'],

        ]);


        $enrolledsubjects = EnrolledSubjects::where('esNo', $id)
        ->update(
             ['subjectCode' => $request->xsubjectCode,
             'description'=> $request->xdescription,
             'units'=> $request->xunits,
             'schedule'=> $request->xschedule,
             ]);
          return redirect()->route('enrolledsubjects');


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
        $enrolledsubjects = EnrolledSubjects::where('esNo', $id);
        $enrolledsubjects->delete();
        return redirect()->route('enrolledsubjects');
    }
}
