<?php

namespace App\Http\Controllers;

use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('eeeee');
        $stores = Stores::all()->toArray(); 
        return view('stores.index', compact('stores'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stores = new Stores(
            [
                'name' => $request->get('name'),
                'address' => $request->get('address'),
                'tel' => $request->get('tel'),
                'tax_identification_number' => $request->get('tax_identification_number'),
                'commercial_registration_number' => $request->get('commercial_registration_number'),
            ]
        );
        $stores->save();
        $stores = Stores::all()->toArray(); 
        return view('stores.index', compact('stores'));
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
    public function edit($id)
    {
        // dd($id);
        $stores = Stores::find($id);
        // $stores = Stores::all()->toArray(); 
        return view('stores.edit', compact('stores', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $stores = Stores::find($id);
        $stores->name = $request->get('name');
        $stores->address = $request->get('address');
        $stores->tel = $request->get('tel');
        $stores->tax_identification_number = $request->get('tax_identification_number');
        $stores->commercial_registration_number = $request->get('commercial_registration_number');
        $stores->save();
        $stores = Stores::all()->toArray(); 
        return view('stores.index',compact('stores','id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stores = Stores::find($id); 
        $stores->delete();
        $stores = Stores::all(); 
        return view('stores.index',compact('stores'))->with('success', 'ลบข้อมูลเรียบร้อย');
    }
}
