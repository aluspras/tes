<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galeriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function acls()
    {
        return view('galeri.galeri-acls');
    }
    public function aha()
    {
        return view('galeri.galeri-aha');
    }
    public function bhd ()
    {
        return view('galeri.galeri-bhd');
    }
    public function btcls()
    {
        return view('galeri.galeri-btcls');
    }
    public function ketk()
    {
        return view('galeri.galeri-ketk');
    }
    public function manajemen()
    {
        return view('galeri.galeri-manajemen');
    }
    public function pals()
    {
        return view('galeri.galeri-pals');
    }
    public function perioperatif()
    {
        return view('galeri.galeri-perioperatif');
    }
    public function pkid ()
    {
        return view('galeri.galeri-pkid');
    }
    public function ppi ()
    {
        return view('galeri.galeri-ppi');
    }
    public function seminar()
    {
        return view('galeri.galeri-seminar');
    }
    public function laktasi()
    {
        return view('galeri.galeri-laktasi');
    }
    public function workshop()
    {
        return view('galeri.galeri-workshop');
    }
    public function workshop2()
    {
        return view('galeri.galeri-workshop2');
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
