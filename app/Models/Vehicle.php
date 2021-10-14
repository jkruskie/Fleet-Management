<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function vehicleType() {
        return $this->belongsTo(VehicleType::class, 'vehicle_type', 'id');
    }

    public function getImageAttribute($value) {
        // Return default picture is none if given
        // TODO : Separate pictures based on vehicle type
        if(is_null($value)) {
            $value = 'https://saints-auto.com/wp-content/uploads/2017/06/car-placeholder-2-700.jpg';
        }
        return $value;
    }

    public function getVinAttribute() {
        return "{$this->vin}";
    }

    public function getTitleAttribute() {
        return "{$this->year} {$this->manufacturer} {$this->model}";
    }

    public function getTitleDetailAttribute() {
        return "{$this->vehicleType->name} - {$this->year} 
        {$this->manufacturer} {$this->model} {$this->vin }";
    }
}
