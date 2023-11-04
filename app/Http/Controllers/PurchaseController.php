<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Purchase;
use App\Models\suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $search =request()->query('search');
         if($search){
             $purchases = Purchase::where('pch_id', 'LIKE', "%{$search}%")
             ->orWhere('emp_name', 'LIKE', "%{$search}%" )->simplePaginate(3    );
         } else {
             $purchases = Purchase::paginate(10);
         }
 
        return view('purchase.index', compact('purchases'))
         ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $data = DB::table('tbl_suppliers')
        // ->join('tblemployees', 'tbl_suppliers.sup_id', '=', 'tblemployees.emp_id')
        // ->select('tbl_suppliers.sup_id', 'tbl_suppliers.sup_name', 'tblemployees.emp_id', 'tblemployees.emp_name')
        // ->get();
        $generatedId = IdGenerator::generate([
            'table' => 'tblpurchase',
            'field' => 'pch_id',
            'length' => 10,
            'prefix' => 'PCH'
        ]);

        $data = DB::table('tbl_suppliers')->select('sup_id', 'sup_name')->get();
        $employe = DB::table('tblemployees')->select('emp_id', 'emp_name')->get();
    return view('purchase.create', compact('data','employe','generatedId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Purchase $purchase)
    {
        //
        $request->validate([
            
            'pch_id' => 'required',
            'pch_date' => 'required',
            'emp_id' => 'required',
            'sup_id' => 'required',
            'grand_total'  => 'required',
        ]);
        $input = $request->all();
        // $purchase->pch_id = IdGenerator::generate(['table' => 'tblpurchase', 'field' => 'pch_id', 'length' => 10, 'prefix' => 'PCH']);
        $purchase->pch_id = $request->pch_id;
        $purchase->pch_date = $request->pch_date;
        $purchase->emp_id = $request->emp_id;
        $purchase->sup_id = $request->sup_id;
        $purchase->grand_total = $request->grand_total;

        $purchase->save();

        return redirect()->route('product.index', compact('purchase'))
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
