<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        $todayTrains = Train::all();
        return view('index', compact('todayTrains'));
    }
}
