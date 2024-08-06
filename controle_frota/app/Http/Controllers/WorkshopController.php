<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use App\Http\Requests\StoreWorkshopRequest;

use App\Models\User;
use Exception;
use App\Models\Address;
use App\Models\State;
use App\Models\City;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use PhpOffice\PhpWord\PhpWord;

class WorkshopController extends Controller
{
    private  $workshop;
        private  $address;

    public function __construct()
    {
        $this->address = new Address();
        $this->workshop = new  Workshop();
    }
    public function index()
    {
        $title = "Lista de Oficinas";
        $states = State::orderBy('name', 'ASC')->get();
        $cities = City::all();
        $workshops = $this->workshop->all();
        return view('workshop.index', compact('workshops', 'title','states','cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Nova Oficina";

         $states = State::orderBy('name', 'ASC')->get();
         $address = Address::all();


        $cities = City::all();
        // $cities = City::where('state_id', $request->state_id)->orderBy('name')->get();
        // $cities = City::with('state')->get();


         $workshops = $this->workshop->all();
          return view('workshop.create',compact('workshops',  'title','address','states','cities'));
         //return view('workshop.criar_editar',compact('workshops', 'title'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkshopRequest $request)

    {
        $request->validated();


        DB::beginTransaction();

        $workshop = Workshop::create($request->all());
        $workshop->address()->create($request->all());


        DB::Commit();

        Session::flash('success', 'Usuario registrado com successo');
        return redirect()->route('workshops.index');

    }

    public function show(Workshop $workshop)
    {
        return view('workshop.show',compact('workshop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workshop $workshop)
    {


        $title = "Nova Oficina";
     // Recuperar do banco de dados as situações
        $states = State::orderBy('name', 'ASC')->get();
       // $cities = City::where('state_id', $request->state_id)->orderBy('name')->get();
        $cities = City::orderBy('name', 'ASC')->get();
        $workshops = $this->workshop->all();


        // Carregar a VIEW
         return view('workshop.edit',compact('workshops',  'title','states','cities'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreWorkshopRequest $request, Workshop $workshop)
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
