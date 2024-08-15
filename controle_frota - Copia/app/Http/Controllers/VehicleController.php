<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\SubCommand;
use App\Models\Vehicle;
use App\Models\Vehicle_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use PhpOffice\PhpWord\PhpWord;
use Exception;

class VehicleController extends Controller
{
    private $user;
    private  $vehicle;
    public function __construct()
    {
       //$this->middleware('auth');
        $this->vehicle = new Vehicle();


    }

    public function index()
    {
        $title = "Nova veículo";
        $vehicles = $this->vehicle->all();
        $vehicle_type = Vehicle_type::all();
        $vehicle = Vehicle::all();
        $companies = Company::all();
        $sub_command = SubCommand::all();
        return view('vehicle.index', compact('companies','vehicle','vehicle_type', 'title'));
  }
    public function create()
    {
       $title = "Nova veículo";
       $vehicle_type = Vehicle_type::all();
       $companies = Company::all();
       $sub_command = SubCommand::all();
       return view('vehicle.create', compact('vehicle_type','companies','sub_command','title'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         try {
        DB::beginTransaction();
        $vehicle= Vehicle::create($request->all());
        
        $vehicle->save();
        DB::Commit();

        Session::flash('success', 'Veiculo cadastrada com successo');
        return redirect()->route('vehicles.index');
            }
             catch (Exception $e) {

        // Salvar log
        Log::warning('Conta não editada', ['error' => $e->getMessage()]);

        // Redirecionar o usuário, enviar a mensagem de erro
        return back()->withInput()->with('error', 'Veiculo não cadastrado!');
    }
    }

/*

    public function store(Request $request)
    {
        $vehicle =  new Vehicle();
        /*$request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'plate' => 'required|string|max:255|unique:vehicles',
            'prefix' => 'required|string|max:8|unique:vehicles',
            'year' => 'required|digits:4|integer|min:1900|max:' . (date('Y')),
            'characterized' => 'required',
            'active' => 'required|in:active,inactive',
            'user_id' => 'required',
            'price' => 'required|numeric|min:0',
            'type' => 'required|in:car,truck,motorcycle',
        ]);*//*

        $vehicle->user_id  = $request->user_id;
        $vehicle->brand  = $request->brand;
        $vehicle->model  = $request->model;
        $vehicle->plate = $request->plate;
        $vehicle->prefix = $request->prefix;
        $vehicle->year = $request->year;
        $vehicle->characterized = $request->characterized;
        $vehicle->active = $request->active;
        $vehicle->price = $request->price;
        $vehicle->type = $request->type;



        $vehicle->save() ;

    //Auth::user()-> Vehicle::create($request->all());

        return redirect()->route('vehicles.index')->with('successo', 'Veículo cadastrado com sucesso!!.');
    }*/

    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.show', compact('vehicle'));



    }

    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'plate' => 'required|string|max:255|unique:vehicles,plate,' . $id,
            'prefix' => 'required|string|max:8|unique:vehicles,prefix,' . $id,
            'year' => 'required|digits:4|integer|min:1900|max:' . (date('Y')),
            'characterized' => 'required|boolean',
            'active' => 'required|boolean',
            'price' => 'required|numeric|min:0',
            'type' => 'required|in:car,truck,motorcycle',



        ]);

        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->all());

        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully.');
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
    }
}
