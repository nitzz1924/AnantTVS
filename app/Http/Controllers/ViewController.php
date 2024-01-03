<?php
namespace App\Http\Controllers;

use App\Models\BuyVehicle;
use App\Models\Master;
use App\Models\Vehicle;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewmaster()
    {
        $modelInstance = new User();
        $res = $modelInstance->checkID();
        $masterdata = Master::where('parent_id', '=', $res)->where('type', '=', 'Master')->get();
        return view('addmaster', compact('masterdata'));
    }

    public function viewsubmaster()
    {
        $modelInstance = new User();
        $res = $modelInstance->checkID();
        $masterdata = Master::where('parent_id', '=', $res)->where('type', '=', 'Master')->get();
        return view('submaster', compact('masterdata'));
    }

    public function viewaddvehicle()
    {
        $masterdata = Master::where('type', '=', 'Vehicle')->get();
        return view('addvehicle', compact('masterdata'));
    }

    public function viewvehicles()
    {
        $allvehicles = Vehicle::paginate(10);
        return view('allvehicles', compact('allvehicles'));
    }

    public function viewaddcustomer()
    {
        return view('addcustomer');
    }

    public function viewallcustomers()
    {
        $allcustomers = Customer::paginate(10);
        return view('allcustomers', compact('allcustomers'));
    }

    public function viewbuyvehicles(Request $request, $id)
    {
        $customerid = $id;
        $masterdata = Master::where('type', '=', 'vehicle')->get();
        $mastercolor = Master::where('type', '=', 'color')->get();
        return view('buyvehicle', compact('masterdata', 'mastercolor', 'customerid'));
    }

    public function viewuservehicles($id)
    {
        $buyvehiclesdata = BuyVehicle::where('customer_id', '=', $id)->get();
        $vehicleimage = Vehicle::get();
        // dd($buyvehiclesdata);
        if ($buyvehiclesdata->isEmpty()) {
            // Handle the case where no records are found
            return back()->with('error', 'no records found..!!!!');
        } else {
            // Process the retrieved records
            return view('uservehicles', compact('buyvehiclesdata','vehicleimage'));
        }

    }
}
