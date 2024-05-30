<?php
namespace App\Http\Controllers;

use App\Models\BuyVehicle;
use App\Models\Lead;
use App\Models\MakeRequest;
use App\Models\Master;
use App\Models\TestRide;
use App\Models\Vehicle;
use App\Models\Customer;
use App\Models\SliderImages;
use App\Models\User;
use App\Models\VehicleStock;
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
        $instock = VehicleStock::where('status', '=', 0)->count();
        $outofstock = VehicleStock::where('status', '=', 1)->count();
        $allleads = Lead::orderByDesc('created_at')->get();
        // dd($vehiclescount);
        return view('dashboard', compact('allleads', 'vehilecounttotal', 'vechiletypecount', 'vehiclescount', 'BuyVehiclescount', 'Customerscount', 'leadcount', 'instock', 'outofstock'));
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
        $allvehicles = Vehicle::orderBy('created_at','desc')->get();
        $modelInstance = new User();
        $res = $modelInstance->checkID();
        $masterdata = Master::where('parent_id', '=', $res)->where('type', '=', 'Master')->get();
        return view('allvehicles', compact('allvehicles', 'masterdata'));
    }

    public function viewaddcustomer()
    {
        return view('addcustomer');
    }

    public function viewallcustomers()
    {
        $allcustomers = Customer::orderBy('created_at','desc')->paginate(10);
        return view('allcustomers', compact('allcustomers'));
    }

    public function viewbuyvehicles(Request $request, $id)
    {
        $customerid = $id;
        $masterdata = Master::where('type', '=', 'vehicle')->get();
        $mastercolor = Master::where('type', '=', 'color')->get();
        $vehicleid = Vehicle::pluck('id');
        $exceldata = VehicleStock::get();
        // dd($vehicleid);
        return view('buyvehicle', compact('masterdata', 'mastercolor', 'customerid', 'vehicleid', 'exceldata'));
    }

    public function viewuservehicles($id)
    {
        $customerid = $id;
        $buyvehiclesdata = BuyVehicle::join('vehicle_stocks', 'vehicle_stocks.frameno', '=', 'buy_vehicles.chassisnumber')
            ->select('buy_vehicles.*', 'vehicle_stocks.vehiclecategory','vehicle_stocks.series','vehicle_stocks.vehiclemodal','vehicle_stocks.color','vehicle_stocks.frameno','vehicle_stocks.engineno',)
            ->where('buy_vehicles.customer_id',  $customerid)
            ->distinct()
            ->get();
        //dd($buyvehiclesdata);
        if ($buyvehiclesdata->isEmpty()) {
            return back()->with('error', 'no records found..!!!!');
        } else {
            // Process the retrieved records
            return view('uservehicles', compact('buyvehiclesdata'));
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
        return view('newcustomer', compact('allvehicles', 'masterdata'));
    }

    public function viewleads()
    {
        $leaddata = Lead::orderByDesc('created_at')->get();
        $leadscount = Lead::count();
        $bookedleads = Lead::where('leadstatus', '=', 'Booked')->get()->count();
        $purchasedleads = Lead::where('leadstatus', '=', 'Purchased')->get()->count();
        $closedleads = Lead::where('leadstatus', '=', 'Closed')->get()->count();
        $testrideleads = TestRide::orderByDesc('created_at')->get();
        $makerequestleads = MakeRequest::orderByDesc('created_at')->get();
        return view('all_leads', compact('leaddata', 'leadscount', 'bookedleads', 'purchasedleads', 'closedleads','testrideleads','makerequestleads'));
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

    public function vehiclestock($status)
    {
        $exceldata = VehicleStock::where('status',$status)->orderBy('created_at','desc')->get();
        return view('vehiclestock', compact('exceldata'));
    }


    public function showstockdetails($selectedValue)
    {
        $stockdata = VehicleStock::where('frameno', $selectedValue)->where('status', '=', 0)->get();
        // dd($stockdata);
        if ($stockdata->isEmpty()) {
            return response()->json(['error' => 'No stock data found'], 404);
        }
        return response()->json($stockdata[0]);
    }

    public function allbuyedvehicles()
    {
        $allbuyeddata = BuyVehicle::join('customers','buy_vehicles.customer_id','customers.id')
        ->select('buy_vehicles.*','customers.customername','customers.customerphoneno')->orderBy('created_at','desc')
        ->get();
        // dd($allbuyeddata);
        return view('allbuyedvehicles',compact('allbuyeddata'));
    }

    public function returnvehicle($id)
    {
        $data = BuyVehicle::find($id);
        $vehicledata = VehicleStock::where('frameno', $data->chassisnumber)->first();
        if($vehicledata) {
            $returnvehicle = new VehicleStock();
            $returnvehicle->vehiclecategory = $data->vehicletype;
            $returnvehicle->vehiclemodal = $data->vehicle_id;
            $returnvehicle->color = $data->color;
            $returnvehicle->series = $vehicledata->series;
            $returnvehicle->frameno = $data->chassisnumber;
            $returnvehicle->engineno = $vehicledata->engineno;
            $returnvehicle->status = 2;
            $returnvehicle->save();
            $data->delete();

            return back()->with('success', 'Vehicle returned successfully.');
        } else {
            return back()->with('error', 'Associated vehicle data not found.');
        }
    }

}
