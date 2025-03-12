<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationModel extends Model
{
    use HasFactory;

    protected $table = 'reservations';  
    protected $fillable = ['customer_id', 'car_id', 'service_id']; 

    // Define relationships
    public function customer()
    {
        return $this->belongsTo(CustomerModel::class, 'customer_id');
    }

    public function car()
    {
        return $this->belongsTo(CarsModel::class, 'car_id');
    }

    public function service()
    {
        return $this->belongsTo(ServiceModel::class, 'service_id');
    }
}
