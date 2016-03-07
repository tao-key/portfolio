<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Panel_home;
use Session;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $panel_homes = DB::table('panel_home')->get();
      
      return view('home')->with('panel_homes', $panel_homes);
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
      $panels = Panel_home::find($id);
      return view('admin/panel/home/edit', compact('panels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = null)
    {
      $id = 1;

      $text = $request->all();
      $find = Panel_home::find($id);

      if($text['presentation'] != null) {

        $find->presentation = $text['presentation'];
        $find->save();
      }

      if($text['front_end'] != null) {

        $find->front_end = $text['front_end'];
        $find->save();
      }

      if($text['back_end'] != null) {

        $find->back_end = $text['back_end'];
        $find->save();
      }
      
      if($text['comp_front'] != null) {

        $find->comp_front = $text['comp_front'];
        $find->save();
      }
      
      if($text['comp_back'] != null) {

        $find->comp_back = $text['comp_back'];
        $find->save();
      }
      
      Session::flash('success', 'Informations modifié avec succès.');
      return redirect('/home');
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
