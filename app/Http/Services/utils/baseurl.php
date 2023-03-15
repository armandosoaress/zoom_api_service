<?php
namespace App\Http\Services\utils;

use App\Http\Controllers\Controller;

/**
 * Summary of MainController
 */
class baseurl extends Controller
{
    public function baseurl()
    {
        $baseendpoint = 'https://api.zoom.us/v2/users/me/';
        return response()->json([
            'baseendpoint' => $baseendpoint
        ]);
    }
}
