<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index($room)
    {
        $room = 102;
        return '部屋番号は'. $room. 'です';
    }
}