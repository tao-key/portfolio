<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Mail;
use App\Http\Requests\ContactRequest;
use App\Panel_contact;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class ContactController extends Controller
{


  public function getForm()
  {
    return view('contact');
  }

  public function send(Request $request)
  {   

    $send = $request->all();

    $data = [
    'sujet'   => $send['sujet'],
    'name'    => $send['name'],
    'prenom'  => $send['prenom'],
    'email'   => $send['email'],
    'content' => $send['content']
    ];

    Mail::send('email.contact', $request->all(), function($message) 
    {
      $message->to('tao.keomony@gmail.com')->subject('Portfolio');
    });

    Session::flash('success', 'Votre message a été envoyé.');
    return redirect('/contact_me');
  }


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
