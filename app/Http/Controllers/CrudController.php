<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrudModel;
class CrudController extends Controller
{

    public function index(Request $request)
    {
        $crud = CrudModel::all();
        return view('index')->with(['cruds' => $crud]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = CrudModel::create($request->all());
        return response()->json($create);
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
        $update = CrudModel::find($id)->update($request->all());
        return response()->json($update);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CrudModel::find($id)->delete();
        return response()->json(['done']);
    }
}
