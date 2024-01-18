<?php

namespace App\Http\Controllers;
use App\Models\BuyVehicle;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Auth;
class UserViewsController extends Controller
{
    public function alluservehiclesview()
    {
        $user = Auth::guard('customer')->user();
        $buyvehiclesdata = BuyVehicle::join('vehicles', 'vehicles.id', '=', 'buy_vehicles.vehicle_id')
            ->select('buy_vehicles.*', 'vehicles.image as vehicleImage', 'vehicles.name as vehicleName', 'vehicles.discription as vehicleDis', 'vehicles.modelno as vehicleModel')
            ->where('buy_vehicles.customer_id',  $user->id)
            ->get();

        if ($buyvehiclesdata->isEmpty()) {
            return back()->with('error', 'no records found..!!!!');
        } else {
            return view('userpanelviews.userallvehicles', compact('buyvehiclesdata'));
        }


    }

    public function uservehicledetailview($id)
    {
        $buyvehiclesdata = BuyVehicle::join('vehicles','buy_vehicles.vehicle_id', '=', 'vehicles.id')
            ->select('buy_vehicles.*', 'vehicles.*')
            ->where('buy_vehicles.id', $id)
            ->get();
        return view('userpanelviews.uservehicledetail', compact('buyvehiclesdata'));
    }

    public function allvehicleslist()
    {
        $allvehicles = Vehicle::paginate(10);
        return view('userpanelviews.userallvehiclespage', compact('allvehicles'));
    }
}
