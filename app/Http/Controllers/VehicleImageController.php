<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleImage;

class VehicleImageController extends Controller
{
    public function showSingle($id) {

        $image = VehicleImage::getSingleImage($id);
        if($image) {
            $storagePath = storage_path('app/images/vehicles/' . $image->url);
            return response()->file($storagePath);
        }
        abort(403, 'Unauthorized action.');

    }    

    public function showAll($id) {
        return 13;
    }    
}
