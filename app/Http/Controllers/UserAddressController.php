<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_address=useraddress::paginate(10);
        return view('user_address.index',['user_addresss'=>$user_address]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_address.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_address=new useraddress();
        $user_address->country = $request->country;
        $user_address->state = $request->state;
        $user_address->city = $request->city;
        $user_address->street = $request->street;
        $user_address->int_num = $request->int_num;
        $user_address->ext_num = $request->ext_num;
        $user_address->zip_code = $request->zip_code;
        $user_address->id_user_1 = $request->id_user_1;
        $user_address->save();
        Alert::success('Address saved!','Address has been created successfully!');
        return redirect('/user_address');
    }

    /**
     * Display the specified resource.
     */
    public function show($user_address)
    {
        $user_address=useraddress::find($user_address);
        return view('user_address.show',compact('user_address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user_address)
    {
        $user_address=useraddress::find($user_address);
        return view('/user_address/edit',compact('user_address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user_address)
    {
        $user_address=useraddress::find($user_address);
        $user_address->country = $request->country;
        $user_address->state = $request->state;
        $user_address->city = $request->city;
        $user_address->street = $request->street;
        $user_address->int_num = $request->int_num;
        $user_address->ext_num = $request->ext_num;
        $user_address->zip_code = $request->zip_code;
        $user_address->id_user_1 = $request->id_user_1;

        $user_address->save();
        Alert::success('Address edited!','The information of the address has been modified.');
        return redirect("/user_address/{$user_address->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user_address)
    {
        $user_address=useraddress::find($user_address);
        $user_address->delete();
        Alert::success('User deleted!','User has been deleted successfully');
        return redirect("/user_address");
    }
}
