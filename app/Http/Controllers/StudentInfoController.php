<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentinfo;

class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


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
        $studentinfo = new StudentInfo();

        $studentinfo->idNo = $request->xidNo;
        $studentinfo->firstName = $request->xfirstName;
        $studentinfo->middleName = $request->xmiddleName;
        $studentinfo->lastName = $request->xlastName;
        $studentinfo->suffix = $request->xsuffix;
        $studentinfo->course = $request->xcourse;
        $studentinfo->year = $request->xyear;
        $studentinfo->birthDate = $request->xbirthDate;
        $studentinfo->gender = $request->xgender;

        $studentinfo->save();
        return redirect()->route('students');

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
