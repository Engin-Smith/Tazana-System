<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $search =request()->query('search');
         if($search){
             $pricing = Pricing::where('pd_id', 'LIKE', "%{$search}%")
             ->orWhere('prd_date', 'LIKE', "%{$search}%" )->simplePaginate(3    );
         } else {
             $pricing = Pricing::paginate(10);
         }
 
         $data = DB::table('tblproducts')->select( 'pd_name', 'pd_id')->get();
        return view('pricing.index', compact('pricing', 'data'))
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
    public function store(Request $request, Pricing $pricing)
    {
        //
        $request->validate([
            'prd_date' => 'required',
            'pd_id' => 'required',
            'b_price' => 'required',
            's_price' => 'required',
        ]);
        $input = $request->all();
        $pricing->prd_date = $request->prd_date;
        $pricing->pd_id = $request->pd_id;
        $pricing->b_price = $request->b_price;
        $pricing->s_price = $request->s_price;

        $pricing->save();

        return redirect()->route('pricing.index')
                        ->with('success','Pricing Detail created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pricing $pricing)
    {
        //
        $data = DB::table('tblproducts')->select( 'pd_name', 'pd_id')->get();
        return view('pricing.edit', compact( 'pricing','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pricing $pricing)
    {
        //
        $input = $request->all();

        $pricing->update($input);

        return redirect()->route('pricing.index')
                        ->with('success','Pricing Detail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pricing $pricing)
    {
        //
        $pricing->delete();
            return redirect()->route('pricing.index')
            ->with('success','pricing Delete successfully.');
    }
}
