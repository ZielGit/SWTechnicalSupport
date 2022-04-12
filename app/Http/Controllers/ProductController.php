<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::get();
        return view('admin.product.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:80',
            'brands.*' => 'string',
            'brands' => 'required','array'
            // validación de llave foranea, cambiar por request.
            // 'name'          => [
            //      'string',
            //      'required',
            // ],
            // 'ingredients.*' => [
            //     'string',
            // ],
            // 'ingredients'   => [
            //     'required',
            //     'array',
            // ],
        ]);
        $product = Product::create($request->all());
        $product->brands()->sync($request->get('brands'));
        return redirect()->route('products.index')->with('success', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $brands = Brand::get();
        return view('admin.product.edit', compact('product', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:80',
            'brands.*' => 'integer',
            'brands' => 'required|array'
        ]);
        $product->update($request->all());
        $product->brands()->sync($request->brands);
        return redirect()->route('products.index')->with('update', 'ok');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('delete', 'ok');
    }
}
