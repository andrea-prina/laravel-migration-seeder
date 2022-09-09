<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        $todayTrains = Train::where('departure_date','2022-09-09')->get();
        return view('index', compact('todayTrains'));
    }
}
