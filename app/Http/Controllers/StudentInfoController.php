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
        // $studentinfo = new studentinfo();

        // $studentinfo->idNo = "C18-0362";
        // $studentinfo->firstName = "Corbain Clyde";
        // $studentinfo->middleName = "Rin";
        // $studentinfo->lastName = "More";
        // $studentinfo->suffix = "";
        // $studentinfo->course = "BSIT";
        // $studentinfo->year = 3;
        // $studentinfo->birthDate = "2000-03-03";
        // $studentinfo->gender = "Male";

        // $studentinfo->save();

        // echo "Student information successfully Added!";

        //delete record
        //find() -- useing the field name 'id' (default)
        //where() -- using another field name

        // $studentinfo = studentinfo::where('sno', 3);
        // $studentinfo->delete();
        // echo "Student info deleted.";

        // $studentinfo = studentinfo::where('sno', 1)
        // ->update(['firstname' => 'Corbain']);
        // echo "student info has been edited.";

        //Retrieve Record
        $studentinfo = studentinfo::all();
        return $studentinfo;

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
