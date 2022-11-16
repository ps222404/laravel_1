<?php

namespace App\Http\Controllers;

use App\Models\Deed;
use Illuminate\Http\Request;


class hadithcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index",  ['deeds' => Deed::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Narrator' => 'required|max:191',
            'Hadith' => 'required|max:500',
        ]);

        Deed::create($request->except('_token'));
        return view("/index" ,  ['deeds' => Deed::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("hadith", ['deeds' => Deed::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("edit", ['deeds' => Deed::find($id)]);
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
        $request->validate([
            'Narrator' => 'required|max:191',
            'Hadith' => 'required|max:500',
        ]);

        Deed::find($id)->update($request->except(['id', '_token']));
        return view("/index" ,  ['deeds' => Deed::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Deed::find($id)->delete();
        return view("/index" ,  ['deeds' => Deed::all()]);
    }
}
