<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = Equipment::get();
        return view('admin.equipment.index', compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::get();
        return view('admin.equipment.create', compact('brands'));
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
            'name' => 'required|max:80'
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
        $equipment = Equipment::create($request->all());
        $equipment->brands()->sync($request->get('brands'));
        return redirect()->route('equipments.index')->with('success', 'ok');
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
    public function edit(Equipment $equipment)
    {
        $brands = Brand::get();
        return view('admin.equipment.edit', compact('equipment', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        $request->validate([
            'name' => 'required|max:80'
        ]);
        $equipment->update($request->all());
        $equipment->brands()->sync($request->brands);
        return redirect()->route('equipments.index')->with('update', 'ok');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return back()->with('delete', 'ok');
    }
}
