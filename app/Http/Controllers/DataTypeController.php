<?php

namespace App\Http\Controllers;

use App\Models\DataType;
use Illuminate\Http\Request;

class DataTypeController extends Controller
{

    protected $model;

    public function __construct(DataType $dataType)
    {
        $this->model = $dataType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return  view('Datatype.index');
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




        $query= $this->model->create([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'education'=>implode(",",$request->input('education',[]))

//            'votes'=>$request->input('confirmed',[]),
//            'confirmed'=>$request->votes



        ]);

        if ($query)
        {
            return redirect()->route('datatype.index');
        }else
        {
            return redirect()->route('datatype.create');

        }
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

