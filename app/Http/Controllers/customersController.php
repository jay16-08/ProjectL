<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class customersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = DB::table('customers')->get();
        return view('customers',['customers'=>$customers]);   
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
        $customers_id = $request->input('customers_id');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $address = $request->input('address');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone_number = $request->input('phone_number');
        

        $data = array('customers_id'=>$customers_id,'first_name'=>$first_name,'last_name'=>$last_name,'address'=>$address,'email'=>$email,'password'=>$password,'phone_number'=>$phone_number);

        DB::table('customers')->insert($data);
        return redirect('customers')->with('success', 'Data is successfully Insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('customers')->select('customers_id','first_name','last_name','address','email','password','phone_number')->where('customers_id',$id)->get();
        return view('customer_view',['data'=>$data]);
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
        $data = DB::table('customers')->where('customers_id',$id)->delete();
      
        return redirect('customers')->with('success', 'Data is successfully deleted');
    }
}
