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
        $studentinfo = StudentInfo::all();
        return view ('students.index', compact('studentinfo'));


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
        $validatedData = $request->validate([
            'xidNo' => ['required', 'max:8'],
             'xfirstName' => ['required', 'max:20'],
             'xmiddleName' => ['max:15'],
             'xlastName' => ['required', 'max:15'],
            'xsuffix' => ['nullable','max:15'],
             'xcourse' => ['required', 'max:15'],
             'xyear' => ['required'],
             'xbirthDate' => ['required', 'date'],
             'xgender' => ['required']
        ]);
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
        $studentinfo = StudentInfo::where('sno', $id)->get();

        return view('students.show', compact('studentinfo'));
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

        $studentinfo = StudentInfo::where('sno', $id)->get();
        return view('students.edit', compact('studentinfo'));

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

        $studentinfo = StudentInfo::where('sno', $id)
        ->update(
             ['idNo' => $request->xidNo,
             'firstName'=> $request->xfirstName,
             'middleName'=> $request->xmiddleName,
             'lastName'=> $request->xlastName,
             'suffix'=> $request->xsuffix,
             'course'=> $request->xcourse,
             'year'=>$request->xyear,
             'birthDate'=> $request->xbirthDate,
             'gender'=> $request->xgender,
             ]);
        return redirect()->route('students');

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

        $studentinfo = StudentInfo::where('sno', $id);
        $studentinfo->delete();
        return redirect()->route('students');
    }
}
