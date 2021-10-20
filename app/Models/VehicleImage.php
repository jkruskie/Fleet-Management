<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleImage extends Model
{
    use HasFactory;


    public function Vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    public static function getImage($id, $uuid) {
        return VehicleImage::whereVehicleId($id)->whereUrl($uuid)->whereTeamId(\Auth::user()->current_team_id)->first();
    }

}
