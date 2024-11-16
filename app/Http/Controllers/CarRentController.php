<?php

namespace App\Http\Controllers;

use App\Models\CarRent;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CarRentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car_rent=carrent::paginate(10);
        return view('car_rent.index',['car_rents'=>$car_rent]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car_rent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car_rent=new carrent();
        $car_rent->license_plate = $request->license_plate;
        $car_rent->brand = $request->brand;
        $car_rent->model = $request->model;
        $car_rent->color = $request->color;
        $car_rent->status = $request->status;
        $car_rent->price = $request->price;
        $car_rent->save();
        Alert::success('Rental car saved!','Car for rent has been created successfully!')->flash();
        return redirect('/car_rent');
    }

    /**
     * Display the specified resource.
     */
    public function show($car_rent)
    {
        $car_rent=carrent::find($car_rent);
        return view('car_rent.show',compact('car_rent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($car_rent)
    {
        $car_rent=carrent::find($car_rent);
        return view('/car_rent/edit',compact('car_rent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $car_rent)
    {
        $car_rent=carrent::find($car_rent);
        $car_rent->license_plate = $request->license_plate;
        $car_rent->brand = $request->brand;
        $car_rent->model = $request->model;
        $car_rent->color = $request->color;
        $car_rent->status = $request->status;
        $car_rent->price = $request->price;

        $car_rent->save();
        Alert::success('Rental car edited!','The information of the rental car has been modified.')->flash();
        return redirect("/car_rent/{$car_rent->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($car_rent)
    {
        $car_rent=carrent::find($car_rent);
        $car_rent->delete();
        Alert::success('Rental car deleted!','Rental car has been deleted successfully')->flash();
        return redirect("/car_rent");
    }
}
