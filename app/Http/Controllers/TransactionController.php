<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function getCars(){
        try{
            $cars = DB::select("SELECT * FROM cars");

            return response()->json(['success' => true, 'data' => $cars], 200);
        }catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
    }
}
}
