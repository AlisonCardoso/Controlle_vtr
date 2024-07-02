<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    private $user;
    private $customer;
    public function __construct()
    {
        $this->user = new User();
        $this->customer = new Customer();
    }
    public function index()
    {
        $customers = $this->customer->all();
        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = $this->customer->all();
        $users = $this->user->all();
        return view('customer.create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->user_id  = $request->user_id;
        $customer->name     = $request->name;
        $customer->email    = $request->email;

        $customer->save();

        return redirect()->route('customers.create')
        ->with('msg', 'Cliente cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer, )
    {
        $customers = $this->customer->find($customer);
        return view('customer.show', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
