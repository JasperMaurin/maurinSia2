<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CarsModel;
use App\Models\CustomerModel; 
use App\Models\ReservationModel;

class TransactionController extends Controller
{
    public function getCustomers()
    {
        try {
            $customers = DB::select("SELECT * FROM customers");

            return response()->json([
                'success' => true,
                'data' => $customers
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    // Level 3 Challenging
    public function getCars()
    {
        try {
            $cars = CarsModel::with('customer')->get();
    
            return response()->json([
                'success' => true,
                'data' => $cars
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
// Level 4 Difficult
public function getReservation()
{
    try {
        $reservations = ReservationModel::with([
            'customer' => function ($q) {
                $q->select('*');
            }
        ])->with([
            'car' => function ($q) {
                $q->select('*');
            }
        ])->with([
            'service' => function ($q) {
                $q->select('*');
            }
        ])->get();

        return response()
            ->json(
                [
                    'success' => true,
                    'data'    => $reservations
                ], 
                200
            );
    } catch (\Exception $e) {
        return response()
            ->json(
                [
                    'success' => false,
                    'message' => 'Something went wrong!',
                    'error'   => $e->getMessage()
                ], 
                500
            );
    }
}

    

public function getService(){
    try{
        $service = DB::select("SELECT * FROM service");

        return response()->json(['success' => true, 'data' => $service], 200);
    }catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong!',
            'error' => $e->getMessage()
        ], 500);
}
}

}
