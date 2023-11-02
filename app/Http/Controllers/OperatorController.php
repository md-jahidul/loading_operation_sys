<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\LoadingOperations;
use App\Models\OperationMaster;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OperatorController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        if (!empty($request->vehicle_number)) {
            $data['products'] = LoadingOperations::where('vehicle_number', $request->vehicle_number)->get();
            $data['drivers'] = OperationMaster::all();
        }
        return view('operator.index', compact('data'));
    }

    public function assignDriver(Request $request)
    {
        $product = LoadingOperations::find($request['SegmentId']);
        if (isset($product) && isset($request['SegmentId'])) {
            $data = [
                "entry_time" => Carbon::now(),
                "assign_driver" => $request['DriverId']
            ];
            $product->update($data);
            return "Success";
        }
    }

    public function getOperatorViewRoute($id)
    {
        $data = LoadingOperations::where('assign_driver', $id)
            ->where('status_type', "!=", 4)
            ->with(['masterDelivery' => function($q){
                $q->select('delivery_code', 'delivery_name');
            }])
            ->get();
        return view('operator.operator-view-route', compact('data', 'id'));
    }

    public function operatorChangeStatus(Request $request, $id)
    {
        $product = LoadingOperations::find($request->loadingData);
        if ($product) {
            $product->update(['status_type' => 4]);
        }
        return redirect(url("operator-view-route/$id"))->with('success', 'Status change successfully!!');
    }
}
