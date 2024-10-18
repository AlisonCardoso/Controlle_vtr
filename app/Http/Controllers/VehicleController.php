<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Company;
use App\Models\SubCommand;
use App\Models\SituationVehicle;
use App\Models\TypeVehicle;
use App\Models\RegionalCommand;

use Illuminate\Http\Request;

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
        $title = "Listas de Veículos";
       
        $vehicle_type = TypeVehicle::all();
        $situation_vehicle = SituationVehicle::all();
        
        $vehicles = Vehicle::all();
        $companies = Company::all();
        $sub_command = SubCommand::all();
        return view('vehicle.index', compact('companies','vehicles','vehicle_type', 'title','situation_vehicle'));
  }
    public function create()
    {

        $title = "Novo veículo";
        $vehicle_type = TypeVehicle::all();
        $situation_vehicle = SituationVehicle::all();
        $sub_command = SubCommand::all();
        return view('vehicle.form', compact('vehicle_type','sub_command','title','situation_vehicle'));
 
   
        //return view('vehicle.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'sub_command_id' => 'required|exists:sub_commands,id',
                'type_vehicle_id' => 'required|exists:type_vehicles,id',
                'brand' => 'required|string|max:255',
                'model' => 'required|string|max:255',
                'prefix' => 'required|string|unique:vehicles|max:255',
                'plate' => 'required|string|unique:vehicles|max:255',
                'year' => 'required|integer|min:1900|max:' . date('Y'),
                'price' => 'required|numeric',
                'active' => 'boolean',
            ]);
    
            Vehicle::create($request->all());
    
            return redirect()->route('vehicles.index')->with('success', 'Veículo cadastrado com sucesso!');
        }
    
        
    }
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.form', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'sub_command_id' => 'required|exists:sub_commands,id',
            'type_vehicle_id' => 'required|exists:type_vehicles,id',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'prefix' => 'required|string|max:255|unique:vehicles,prefix,' . $vehicle->id,
            'plate' => 'required|string|max:255|unique:vehicles,plate,' . $vehicle->id,
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'price' => 'required|numeric',
            'active' => 'boolean',
        ]);

        $vehicle->update($request->all());

        return redirect()->route('vehicles.index')->with('success', 'Veículo atualizado com sucesso!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with('success', 'Veículo deletado com sucesso!');
    
    }
}
