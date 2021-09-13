<?php

namespace App\Http\Controllers;

use App\Models\RegisterCar;
use Illuminate\Http\Request;
use App\Models\ActivationCode;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterCarRequest;

class RegistrationCodeController extends Controller
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
    public function store(RegisterCarRequest $request)
    {
        $store_to_DB_RegisterCar = new RegisterCar;
        $store_to_DB_ActivationCode = new ActivationCode;
        if ($request->has('code')) {
            //$code = $request->input('code');
            if($store_to_DB_ActivationCode->where('code',$request->input('code'))->exists()){
                $store_to_DB_RegisterCar->assigned_activation_code = $store_to_DB_ActivationCode->where('code',$request->input('code'))
                                                                                                ->value('id_activation_code');
            }else{
                //Write code if doesnt exist            
             }
        }
        $store_to_DB_RegisterCar->assigned_to_user = Auth::id();
        $store_to_DB_RegisterCar->vn = $request->input('vn');
        $store_to_DB_RegisterCar->car_brand = $request->input('car-brand');
        $store_to_DB_RegisterCar->car_model = $request->input('car-model');
        $store_to_DB_RegisterCar->date_assigned = date('Y-m-d');
        $store_to_DB_RegisterCar->save();
        
        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
