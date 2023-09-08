<?php

namespace App\Http\Controllers;

use App\Models\suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         //
         $search =request()->query('search');
         if($search){
             $supplier = Suppliers::where('id', 'LIKE', "%{$search}%")
             ->orWhere('sub_name', 'LIKE', "%{$search}%" )->simplePaginate(3);
         } else {
             $supplier = Suppliers::paginate(5);
         }
 
        return view('suppliers.index')
         ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, suppliers $supplier)
    {
        //
        $request->validate([
            // 'id'=> 'required',
            'sup_name' => 'required',
            'sup_detail' => 'required',
            'sup_contact' => 'required'
        ]);
        $input = $request->all();
        $supplier->sup_id = IdGenerator::generate(['table' => 'tbl_suppliers', 'field' => 'sup_id', 'length' => 5, 'prefix' => 'S']);
        $supplier->sup_name = $request->sup_name;
        $supplier->sup_detail = $request->sup_detail;
        $supplier->sup_contact = $request->sup_contact;

        $supplier->save();

        return redirect()->route('suppliers.index')
                        ->with('success','Supplier created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(suppliers $suppliers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, suppliers $suppliers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(suppliers $suppliers)
    {
        //
    }
}
