<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use App\Http\Requests\RequestPembeli;
use Illuminate\Support\Str;

class ControllerPembeli extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pembeli::all();
        return view('pages.pembeli.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestPembeli $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->namaPembeli);
        Pembeli::create($data);
        return redirect()->route('pembeli.index');
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
        $items = Pembeli::findOrFail($id);
        return view('pages.pembeli.edit')->with([
            'items' => $items
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestPembeli $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->namaBarang);
        $item = Pembeli::findOrFail($id);
        $item->update($data);
        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pembeli::findOrFail($id);
        $item->delete();
        return redirect()->route('pembeli.index');
    }
}
