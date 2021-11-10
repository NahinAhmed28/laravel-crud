<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\DataType;
use Illuminate\Http\Request;

class DataTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataType::all();
        return view ('Datatype.index')->with('datas', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    return view('Datatype.create');
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        DataType::create($input);
        return redirect('datatype.index')->with('flash_message', 'datatype Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataType  $dataType
     * @return \Illuminate\Http\Response
     */
    public function show(DataType $dataType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataType  $dataType
     * @return \Illuminate\Http\Response
     */
    public function edit(DataType $dataType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataType  $dataType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataType $dataType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataType  $dataType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataType $dataType)
    {
        //
    }
}
