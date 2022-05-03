<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $data = [
            [
                'id' => 0,
                'text' => 'my first tweet'
            ],
            [
                'id' => 1,
                'text' => 'my second tweet'
            ],
        ];

        return response()->json($data);
    }

}
