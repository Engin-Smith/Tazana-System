<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $search =request()->query('search');
         if($search){
             $customers = Customer::where('cust_id', 'LIKE', "%{$search}%")
             ->orWhere('cust_name', 'LIKE', "%{$search}%" )->simplePaginate(3    );
         } else {
             $customers = Customer::paginate(10);
         }
 
        return view('customer.index', compact('customers'))
         ->with('i', (request()->input('page', 1) - 1) * 5);
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
    public function store(Request $request, Customer $customer)
    {
        //
        $request->validate([
            // 'emp_id' => 'required',
            'cust_name' => 'required',
            'cust_address' => 'required',
            'cust_phone' => 'required',
        ]);
        $input = $request->all();
        $customer->cust_id = IdGenerator::generate(['table' => 'tblcustomers', 'field' => 'cust_id', 'length' => 10, 'prefix' => 'CUST']);
        $customer->cust_name = $request->cust_name;
        $customer->cust_address = $request->cust_address;
        $customer->cust_phone = $request->cust_phone;

        $customer->save();

        return redirect()->route('customer.index')
                        ->with('success','Customer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $input = $request->all();

        $customer->update($input);

        return redirect()->route('customer.index')
                        ->with('success','Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
        $customer->delete();
            return redirect()->route('customer.index')
            ->with('success','Customer Delete successfully.');
    }
}
