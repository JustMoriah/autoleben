<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=user::paginate(10);
        return view('user.index',['users'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=new user();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->birthdate = $request->birthdate;
        $user->telephone = $request->telephone;
        $user->license_number = $request->license_number;
        $user->save();
        Alert::success('User saved!','User has been created successfully!');
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show($user)
    {
        $user=user::find($user);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user)
    {
        $user=user::find($user);
        return view('/user/edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user)
    {
        $user=user::find($user);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->birthdate = $request->birthdate;
        $user->telephone = $request->telephone;
        $user->license_number = $request->license_number;

        $user->save();
        Alert::success('User edited!','The information of the user has been modified.');
        return redirect("/user/{$user->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user)
    {
        $user=user::find($user);
        $user->delete();
        Alert::success('User deleted!','User has been deleted successfully');
        return redirect("/user");
    }
}
