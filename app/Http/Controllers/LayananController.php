<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelatihan');
    }
    public function btcls()
    {
        return view('pelatihan.btcls');
    }
    public function bhd()
    {
        return view('pelatihan.bhd');
    }
    public function acls()
    {
        return view('pelatihan.acls');
    }
    public function ppi()
    {
        return view('pelatihan.ppi');
    }
    public function pkid()
    {
        return view('pelatihan.pkid');
    }
    public function perioperatif()
    {
        return view('pelatihan.perioperatif');
    }
    public function manajemen()
    {
        return view('pelatihan.manajemen');
    }
    public function workshop()
    {
        return view('pelatihan.workshop');
    }
    public function seminar()
    {
        return view('pelatihan.seminar');
    }
    public function aha()
    {
        return view('pelatihan.acls-aha');
    }
    public function komunikasi()
    {
        return view('pelatihan.ketk');
    }
    public function pals()
    {
        return view('pelatihan.pals');
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
