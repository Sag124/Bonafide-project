<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Register;
use PDF;
use Illuminate\Http\Request;
use Session;

class bonafidecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=['Sagar'];
        $pdf = PDF::loadView('user.index', $data);
        return $pdf->download('invoice.pdf');
        // return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, array(
            'name' => 'required',
            'email' => 'required',
            'rollno' => 'required',
            'cursem' => 'required',
            'hostel' => 'required',
            'roomno' => 'required',
            'reason' => 'required',            
            ));

         $register = new Register;
         $register->name = $request->name;
         $register->email = $request->email;
         $register->rollno = $request->rollno;
         $register->cursem = $request->cursem;
         $register->hostel = $request->hostel;
         $register->roomno = $request->roomno;
         $register->reason = $request->reason;

         $register->save();
        Session::flash('success', 'Your application is forwarded to DR!');
        return redirect()->route('bonafide.index');


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
