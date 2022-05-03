<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;

class FriendController extends Controller
{
    public function getFriend() {
        return response()->json(Friend::all(), 200);
    }
}
