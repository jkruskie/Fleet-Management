<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VehicleImage;

class Vehicle extends Model
{
    use HasFactory;

    public function isActive() {
        if ($this->status == 1) {
            return true;
        }
        return false;
    }

    public function vehicleType() {
        return $this->belongsTo(VehicleType::class, 'vehicle_type', 'id');
    }

    public function images() {
        return $this->hasMany(VehicleImage::class);
    }

    public function defaultImage() {
        $image = $this->hasOne(VehicleImage::class)->where('is_default', 1)->first();
        if($image) {
            // Vehicle has its own images
            return $image->url;
        }
        // Vehicle doesn't have its own images, return vehicletype default
        $image = $this->vehicleType;
        return $image->image;
    }

    public function getVinAttribute($value) {
        return strToUpper($value);
    }

    public function getTitleAttribute() {
        return "{$this->year} {$this->manufacturer} {$this->model}";
    }

    public function getTitleDetailAttribute() {
        return "{$this->vehicleType->name} - {$this->year} 
        {$this->manufacturer} {$this->model} {$this->vin }";
    }
}
