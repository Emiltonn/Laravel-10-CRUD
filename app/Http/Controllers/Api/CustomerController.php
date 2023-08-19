<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreUpdateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Api\Address;
use App\Models\Api\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::all();

        return CustomerResource::collection($customers);
    }

    public function store(StoreUpdateCustomerRequest $request)
    {
        $data = $request->validated(); //pegar apenas campos validados

        $customer = Customer::create($data);

        return new CustomerResource($customer);
    }

    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);

        return new CustomerResource($customer);
    }

    public function update(StoreUpdateCustomerRequest $request, string $id)
    {
        $data = $request->validated(); //pegar apenas campos validados
        $customer = Customer::findOrFail($id);
        $customer->update($data);

        return new CustomerResource($customer);
    }

    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->address()->delete();
        $customer->delete();

        return response()->json([], 204);
    }
}
