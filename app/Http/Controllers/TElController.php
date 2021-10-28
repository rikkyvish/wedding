<?php

namespace App\Http\Controllers;

use App\Models\TEl;
use Illuminate\Http\Request;

class TElController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TEl::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|alpha',
                'phone' => 'required|unique:t_els,phone'
            ]
        );

        TEl::create($request->all());
        return response('', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TEl  $tEl
     * @return \Illuminate\Http\Response
     */
    public function show(TEl $tEl)
    {
        return $tEl;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TEl  $tEl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tEl)
    {
        $request->validate(
            [
                'name' => 'required',
                'phone' => 'required|unique:t_els,phone'
            ]
        );

        TEl::where('id', $tEl)
        ->update($request->all());
        // $tEl->update($request->all());
        return response('', 200);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TEl  $tEl
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $tel = TEl::find($id);
        $tel->delete();
        return response('success', 204);
        
    }   
}
