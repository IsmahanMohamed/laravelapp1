<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;

class FriendController extends Controller
{
   // public function getFriend() {
    //    return response()->json(Friend::all(), 200);
   // }

    public function friends()
    {
        $data = [
            [
                'id' => 0,
                'text' => 'my first friend'
            ],
            [
                'id' => 1,
                'text' => 'my second friend'
            ],
        ];

        //return response()->json($data);

        return response()->json([
            'name' => 'Izzy',
        ]);
    }
}
