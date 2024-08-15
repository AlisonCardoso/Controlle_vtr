<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use PhpOffice\PhpWord\PhpWord;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        $title='Nova Sub Unidade';
        $states =State::all();
        $cities = City::all();




        return view('city.index', compact('title', 'states', 'cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::orderBy('name', 'ASC')->get();
        $cities = City::all();
        return view('city.create',compact('cities', 'states'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {



        DB::beginTransaction();

        $cities = City::create($request->all());


       DB::Commit();

        Session::flash('success', 'Oficina registrada com successo');
        return redirect()->route('cities.index');
            }
             catch (Exception $e) {

        // Salvar log
        Log::warning('Conta não editada', ['error' => $e->getMessage()]);

        // Redirecionar o usuário, enviar a mensagem de erro
        return back()->withInput()->with('error', 'Conta não editada!');
    }

    }

    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
    }
}
