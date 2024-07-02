<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use App\Models\User;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    private $user;
    private  $workshop;
    public function __construct()
    {
        $this->user = new User();
        $this->workshop = new  Workshop();
    }

    public function index()
    {
        $workshops = $this->workshop->all();
        return view('workshop.index',compact('workshops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $workshops = $this->workshop->all();
        return view('workshop.create',compact('workshops'));
    }

    /**
     * salvando os dados no banco de dados.
     */
    public function store(Request $request)
    {
        $workshop = new Workshop();
        $workshop->user_id  = $request->user_id;
        $workshop->name     = $request->name;
        $workshop->email    = $request->email;
        $workshop->cnpj    = $request->cnpj;
        $workshop->responsavel   = $request->responsavel;



        $workshop->save();

        return redirect()->route('workshops.create')
        ->with('msg', 'Oficina cadastrada com sucesso');
    }


    /**
     * Display the specified resource.
     */
    public function show(Workshop $workshop)
    {
        $workshop = $this->workshop->find($workshop);
        return view('workshop.show', compact('workshops'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workshop $workshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workshop $workshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workshop $workshop)
    {
        //
    }
}
