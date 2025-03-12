<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;

    protected $table = 'customers'; 
    protected $primaryKey = 'id'; 
    public $timestamps = true;

    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'address',
        'contact_number',
        'email',
        'password'
    ];

    // Relationships
    public function cars()
    {
        return $this->hasMany(CarsModel::class, 'customer_id');
    }

}
