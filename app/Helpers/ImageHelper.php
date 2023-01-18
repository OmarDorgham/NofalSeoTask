<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageHelper
{

    public static function uploadImage(Request $request)
    {
        $path = storage_path('app/public/uploads/' . Carbon::now()->format('Y'));
        $imageName = Str::random(40) . "." . $request->image->getClientOriginalExtension();
        $request->image->move($path, $imageName);
        return $imageName;
    }
}
