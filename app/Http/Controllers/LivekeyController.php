<?php

namespace App\Http\Controllers;

use App\Models\Livekey;
use Illuminate\Http\Request;

class LivekeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livekey  $livekey
     * @return \Illuminate\Http\Response
     */
    public function show(Livekey $livekey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livekey  $livekey
     * @return \Illuminate\Http\Response
     */
    public function edit(Livekey $livekey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livekey  $livekey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $livekey)
    {
        
        $request->validate(
            [
                'livekey' => 'required'
                
            ]
        );

        $livekey = Livekey::where("id", $livekey)
                ->update( 
                       array( 
                             "livekey" => $request->input('livekey')
                             )
                       );

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livekey  $livekey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livekey $livekey)
    {
        //
    }
}
