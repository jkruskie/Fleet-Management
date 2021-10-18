<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleImage extends Model
{
    use HasFactory;

    public static function getSingleImage($id) {
        return VehicleImage::whereVehicleId($id)->whereTeamId(\Auth::user()->current_team_id)->first();
    }
}
