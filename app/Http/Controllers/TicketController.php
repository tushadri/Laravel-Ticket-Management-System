<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = Ticket::latest()->paginate(4);
        return view("index",['ticket'=>$ticket]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {   
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $ticket =new Ticket;
        $ticket->summary = $req->summary;
        $ticket->description = $req->descrb;
        $ticket->status =$req->status;
        $ticket->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('update',['ticket'=>$ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function delete(Ticket $ticket)
    {
        return view('delete',['ticket'=>$ticket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Ticket $ticket)
    {

        $req->validate([
            "summary"=>"required",
            "descrb" =>"required"
        ]);
        $ticket->summary =$req->summary;
        $ticket->description =$req->descrb;
        $ticket->status =$req->status;
        $ticket->save();
        return redirect('/home')->withSuccess('Ticket has been updatd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
       $ticket->delete();
       return redirect('/home')->withSuccess('Ticket has been deleted');
    }
}
