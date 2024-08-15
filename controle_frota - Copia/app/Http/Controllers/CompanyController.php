<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\RegionalCommand;
use App\Models\SubCommand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use PhpOffice\PhpWord\PhpWord;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $sub_command;
    private $company;
    public function __construct()
    {
        $this-> sub_command = new SubCommand();
        $this->company = new  Company();
    }

    public function index()
    {




            $title = "Lista de companhias";
            $command =  RegionalCommand::orderBy('name', 'ASC')->get();
            $sub_command =  SubCommand::orderBy('name', 'ASC')->get();
            $companies =  Company::orderBy('name', 'ASC')->get();


            return view('company.index', compact('title', 'command','sub_command','companies'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {


         $title='Nova Sub Unidade';
        $commands =RegionalCommand::all();
       $sub_commands= SubCommand::all();




        return view('company.create', compact('title', 'commands','sub_commands'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


            DB::beginTransaction();
            $company  =Company::create($request->all());




            DB::commit();
            Session::flash('success', 'companhia registrada com successo');
            return redirect()->route('companies.index');

    }
    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCompanyRequest  $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
