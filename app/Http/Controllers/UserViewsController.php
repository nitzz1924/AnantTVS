<?php

namespace App\Http\Controllers;
use App\Models\BuyVehicle;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Master;
use App\Models\Customer;
use App\Models\SliderImages;
use Auth;
class UserViewsController extends Controller
{
    public function alluservehiclesview()
    {
        $user = Auth::guard('customer')->user();
        $buyvehiclesdata = BuyVehicle::join('vehicle_stocks', 'vehicle_stocks.frameno', '=', 'buy_vehicles.chassisnumber')
            ->select('buy_vehicles.*', 'vehicle_stocks.vehiclecategory','vehicle_stocks.series','vehicle_stocks.vehiclemodal','vehicle_stocks.color','vehicle_stocks.frameno','vehicle_stocks.engineno',)
            ->where('buy_vehicles.customer_id',  $user->id)
            ->get();
        // dd($buyvehiclesdata);
        if ($buyvehiclesdata->isEmpty()) {
           return view('userpanelviews.userallvehicles', compact('buyvehiclesdata'));
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
        $user = Auth::guard('customer')->user();
        $allvehicles = Vehicle::where('status', '=', '1')->paginate(20);
        return view('userpanelviews.userallvehiclespage', compact('allvehicles','user'));
    }

    public function viewuserprofile()
    {
        $user = Auth::guard('customer')->user();
        $allcustomers = Customer::where('id','=', $user->id)->get();
        return view('userpanelviews.userprofile', compact('allcustomers'));
    }

    public function paymentpage()
    {
        $sliderimages = SliderImages::where('type', 'userhomeslider')->get();
        $masterdata = Master::where('type', '=', 'Payment Button')->get();
        return view('userpanelviews.paymentpage', compact('sliderimages','masterdata'));
    }
}
