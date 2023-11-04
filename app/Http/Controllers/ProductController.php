<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $search =request()->query('search');
         if($search){
             $products = Product::where('pd_id', 'LIKE', "%{$search}%")
             ->orWhere('pd_name', 'LIKE', "%{$search}%" )->simplePaginate(3    );
         } else {
             $products = Product::paginate(10);
         }
 
        return view('product.index', compact('products'))
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
    public function store(Request $request, Product $product)
    {
        //
        $request->validate([
            // 'pd_id' => 'required',
            'pd_name' => 'required',
            'qty' => 'required',
        ]);
        $input = $request->all();
        $product->pd_id = IdGenerator::generate(['table' => 'tblproducts', 'field' => 'pd_id', 'length' => 10, 'prefix' => 'P']);
        $product->pd_name = $request->qty;
        $product->qty = $request->qty;

        $product->save();

        return redirect()->route('product.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('product.edit', compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $input = $request->all();

        $product->update($input);

        return redirect()->route('product.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
            return redirect()->route('product.index')
            ->with('success','Product Delete successfully.');
    }
}
