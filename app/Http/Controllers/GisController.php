<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GisController extends Controller
{
    public function getDummyData()
    {
        // This is where you would retrieve real data from your database or other sources
        $dummyData = [
            ['lat' => 37.7749, 'lng' => -122.4194, 'name' => 'San Francisco'],
            ['lat' => 34.0522, 'lng' => -118.2437, 'name' => 'Los Angeles'],
            // Add more dummy data as needed
        ];

        return response()->json($dummyData);
    }
}
