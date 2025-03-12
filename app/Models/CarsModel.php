<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsModel extends Model
{
    use HasFactory;

    protected $table = 'cars'; 
    protected $primaryKey = 'cars_id'; 
    public $timestamps = true;

    protected $fillable = [
        'car_unit',
        'car_brand',
        'car_model',
        'car_color',
        'car_platenumber',
        'customer_id'
    ];

    // Relationships
    public function customer()
    {
        return $this->belongsTo(CustomerModel::class, 'customer_id');
    }


    
}
