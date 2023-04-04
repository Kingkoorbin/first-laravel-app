<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balances;
use App\Models\studentinfo;

class BalancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $Balances = new Balances();
        // $Balances->sNo = 1;
        // $Balances->amountDue = 2432.23;
        // $Balances->totalBalance = 9000.00;
        // $Balances->notes = "KUMBAYA";
        // $Balances->save();
        // echo "added!";

        $balances = Balances:: join('studentinfo', 'stubalance.sno', '=', 'studentinfo.sno')->get();
        return view('balances.index', compact('balances'));
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

        // $validateData = $request->validate([
        //     'xamountDue' => ['required', 'precision: 8, scale: 2'],
        //     'xtotalBalance' => ['required', 'precision: 8, scale: 2'],
        //     'xnotes' => ['required'],
        // ]);
        $balances = new Balances();
        $balances->sno = $request->xsno;
        $balances->amountDue = $request->xamountDue;
        $balances->totalBalance = $request->xtotalBalance;
        $balances->notes = $request->xnotes;
        $balances->save();
        return redirect()->route('balances');

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
        $balances = Balances::where('bNo', $id)->get();
        return view('balances.show', compact('balances'));

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
        $balances = Balances::where('bNo', $id)->get();
        return view('balances.edit', compact('balances'));
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



        $balances = Balances::where('bNo', $id)
        ->update(
             ['sno' => $request->xsno,
             'amountDue'=> $request->xamountDue,
             'totalAmount'=> $request->xtotalAmount,
             'notes'=> $request->xnotes,
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
        $balances = Balances::where('bNo', $id);
        $balances->delete();
        return redirect()->route('balances');
    }

    public function getStudentInfo(){
        $studentinfo = studentinfo::all();
        return view('balances.add', compact('studentinfo'));
    }
}
