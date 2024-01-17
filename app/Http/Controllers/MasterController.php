<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\User;




use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function createmaster(Request $req)
    {
        try {
            $req->validate([
                'label' => 'required',
                'value' => 'required',
            ]);
            // dd($req->all());
            $modelInstance = new User();
            $res = $modelInstance->checkID();    // using method of another model
            $master = new Master;
            $master->label = $req->label;
            $master->value = $req->value;
            $master->type = 'Master';
            $master->status = 'A';
            $master->parent_id = $res;
            $master->save();
            return redirect()->route('viewmaster')->with('success', "Master Inserted Successfully..!!!!");
        } catch (\Exception $m) {
            return redirect()->route('viewmaster')->with("error", " Master Not Inserted..Try Again");
        }
    }

    public function deletemaster($id, $type)
    {
        $records = Master::find($id);
        if ($type == 'masterpage') {
            $records->delete();
            return redirect()->route('viewmaster')->with('success', "Deleted Successfully..!!!!");
        } else if ($type == "subcatpage") {
            $records->delete();
            return redirect()->route('viewsubmaster')->with('success', "Deleted");
        } else
            return back()->with('failure', "not Deleted");
    }

    public function getmastercatajax($selectedCat)
    {
        $modelInstance = new User();
        $res = $modelInstance->checkID();
        $data = Master::where('parent_id', '=', $res)->where('type', '=', $selectedCat)->get();
        return response()->json($data);

    }

    public function createsubmaster(Request $req)
    {
        //dd($req->all());
        try {
            $req->validate([
                'type' => 'required',
                'label' => 'required',
                'value' => 'required',
            ]);
            $modelInstance = new User();
            $res = $modelInstance->checkID();
            $master = new Master;
            $master->label = $req->label;
            $master->value = $req->value;
            $master->type = $req->type;
            $master->parent_id = $res;
            $master->save();
            return back()->with('success', 'Sub-Master Inserted Successfully..!!!!');
        } catch (\Exception $sm) {
            return redirect()->route('viewsubmaster')->with('failure', 'Sub-Master Not Inserted Try Again...');
        }
    }
}
