<?php

namespace App\Http\Controllers;

use App\Models\CarSell;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CarSellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car_sell=carsell::paginate(10);
        return view('car_sell.index',['car_sells'=>$car_sell]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car_sell.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car_sell=new carsell();
        $car_sell->brand = $request->brand;
        $car_sell->model = $request->model;
        $car_sell->color = $request->color;
        $car_sell->stock = $request->stock;
        $car_sell->price = $request->price;
        $car_sell->id_user_1 = $request->id_user_1;
        $car_sell->save();
        Alert::success('Car saved!','Car for sell has been created successfully!');
        return redirect('/car_sell');
    }

    /**
     * Display the specified resource.
     */
    public function show($car_sell)
    {
        $car_sell=carsell::find($car_sell);
        return view('car_sell.show',compact('car_sell'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($car_sell)
    {
        $car_sell=carsell::find($car_sell);
        return view('/car_sell/edit',compact('car_sell'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $car_sell)
    {
        $car_sell=carsell::find($car_sell);
        $car_sell->brand = $request->brand;
        $car_sell->model = $request->model;
        $car_sell->color = $request->color;
        $car_sell->stock = $request->stock;
        $car_sell->price = $request->price;

        $car_sell->save();
        Alert::success('Car edited!','The information of the car has been modified.');
        return redirect("/car_sell/{$car_sell->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($car_sell)
    {
        $car_sell=carsell::find($car_sell);
        $car_sell->delete();
        Alert::success('Car deleted!','Car has been deleted successfully');
        return redirect("/car_sell");
    }
}
