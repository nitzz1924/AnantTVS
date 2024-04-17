<?php
namespace App\Http\Controllers;

use App\Models\BuyVehicle;
use App\Models\Lead;
use App\Models\Master;
use App\Models\Vehicle;
use App\Models\Customer;
use App\Models\SliderImages;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class ViewController extends Controller
{
    public function dashboard()
    {
        $vehiclescount = Vehicle::count();
        $vehiclelist = Vehicle::get();
        $masterdata = Master::where('type', '=', 'Vehicle')->get();
        $arrnew = array();
        foreach ($masterdata as $master) {
            $vehicletypecount = Vehicle::where('type', '=', $master->value)->count();
            $arrnew[] = [
                'value' => $master->value,
                'count' => $vehicletypecount,
            ];
        }
        $vehilecounttotal = json_encode($arrnew);
        $arraytwo = array();
        foreach ($vehiclelist as $vehicles) {
            $vehicletypecount = BuyVehicle::where('vehicle_id', '=', $vehicles->id)->count();
            $arraytwo[] = [
                'value' => $vehicles->name,
                'count' => $vehicletypecount,
            ];
        }
        $vechiletypecount = json_encode($arraytwo);
        // dd($jsonData);

        $BuyVehiclescount = BuyVehicle::count();
        $Customerscount = Customer::count();
        $leadcount = Lead::count();
        $allleads = Lead::orderByDesc('created_at')->get();
        // dd($vehiclescount);
        return view('dashboard', compact('allleads', 'vehilecounttotal', 'vechiletypecount', 'vehiclescount', 'BuyVehiclescount', 'Customerscount', 'leadcount'));
    }
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
        $masterdatacolor = Master::where('type', '=', 'color')->get();
        return view('addvehicle', compact('masterdata', 'masterdatacolor'));
    }

    public function viewvehicles()
    {
        $allvehicles = Vehicle::paginate(10);
        $modelInstance = new User();
        $res = $modelInstance->checkID();
        $masterdata = Master::where('parent_id', '=', $res)->where('type', '=', 'Master')->get();
        return view('allvehicles', compact('allvehicles','masterdata'));
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
        $vehicleid = Vehicle::pluck('id');
        // dd($vehicleid);
        return view('buyvehicle', compact('masterdata', 'mastercolor', 'customerid', 'vehicleid'));
    }

    public function viewuservehicles($id)
    {
        $customerid = $id;
        $customer = Customer::where('id', $customerid)->get();
        // dd($customer);
        $buyvehiclesdata = BuyVehicle::join('vehicles', 'vehicles.id', '=', 'buy_vehicles.vehicle_id')
            ->select('buy_vehicles.*', 'vehicles.image as vehicleImage', 'vehicles.name as vehicleName', 'vehicles.discription as vehicleDis', 'vehicles.modelno as vehicleModel')
            ->where('buy_vehicles.customer_id', $id)
            ->get();
        // dd($buyvehiclesdata);
        if ($buyvehiclesdata->isEmpty()) {
            return back()->with('error', 'no records found..!!!!');
        } else {
            // Process the retrieved records
            return view('uservehicles', compact('buyvehiclesdata', 'customer'));
        }

    }

    public function viewvehicledetailpage($id)
    {
        $buyvehiclesdata = BuyVehicle::join('vehicles', 'buy_vehicles.vehicle_id', '=', 'vehicles.id')
            ->select('buy_vehicles.*', 'vehicles.*', 'buy_vehicles.id as buyvehicleid', )
            ->where('buy_vehicles.id', $id)
            ->get();
        return view('vehicledetailpage', compact('buyvehiclesdata'));
    }

    public function viewadminprofile()
    {
        $user = Auth::user();
        // dd($user);
        return view('adminprofile', compact('user'));
    }

    public function vieweditaddedvehicle()
    {
        return view('editaddedvehicle');
    }

    //WEBSITE VIEWS

    public function frontendhomepage()
    {
        $allvehicles = Vehicle::paginate(4);
        return view('home', compact('allvehicles'));
    }
    public function frontendaboutpage()
    {
        return view('about');
    }
    public function frontendcontactpage()
    {
        return view('contact');
    }
    public function frontendvehiclespage()
    {
        $allvehicles = Vehicle::paginate(4);
        return view('vehicles', compact('allvehicles'));
    }
    public function newcustomer()
    {
        $allvehicles = Vehicle::where('status', '=', '1')->get();
        $masterdata = Master::where('type', '=', 'Vehicle')->get();
        return view('newcustomer', compact('allvehicles','masterdata'));
    }

    public function viewleads()
    {
        $leaddata = Lead::orderByDesc('created_at')->get();
        return view('all_leads',compact('leaddata'));
    }

    //WEBSITE VIEWS ENDS


    //USER PANEL VIEWS
    public function viewuserpanelhome()
    {
        $user = Auth::guard('customer')->user();
        if (Auth::guard('customer')->check()) {
            $sliderimages = SliderImages::where('type', 'userhomeslider')->get();
            $vehiclesdata = Vehicle::get();
            //dd($sliderimages);
            return view('userpanelviews.home', compact('sliderimages', 'vehiclesdata', 'user'));
        } else {
            return view('auth.userauth.login');
        }
    }
    // public function viewuserprofilenavigation()
    // {
    //     $user = Auth::guard('customer')->user();
    //     if (Auth::guard('customer')->check()) {
    //         return view('layouts.userpanel.user-panel-navigation', compact('user'));
    //     } else {
    //         return view('auth.userauth.login');
    //     }
    // }

    public function viewloginpage()
    {
        return view('auth.userauth.login');
    }
}
