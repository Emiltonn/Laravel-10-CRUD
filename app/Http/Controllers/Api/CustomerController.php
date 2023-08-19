<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreUpdateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Api\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();

        return CustomerResource::collection($customers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCustomerRequest $request)
    {
        $data = $request->validated(); //pegar apenas campos validados

        $customer = Customer::create($data);

        return new CustomerResource($customer);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);

        return new CustomerResource($customer);
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
    public function update(StoreUpdateCustomerRequest $request, string $id)
    {
        $data = $request->all();
        $customer = Customer::findOrFail($id);
        $customer->update($data);

        return new CustomerResource($customer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
