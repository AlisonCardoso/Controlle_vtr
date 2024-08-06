<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\RegionalCommand;
use App\Models\SubCommand;

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
        $this-> sub_command =  SubCommand::all();
        $this->company = Company::all();
        return view('company.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    { $title='Nova Sub Unidade';
        $commands =RegionalCommand::all();
        $sub_commands = SubCommand::all();
        return view('company.create', compact('title', 'commands','sub_commands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
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
