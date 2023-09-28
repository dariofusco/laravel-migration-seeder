<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use DateTime;

class TrainController extends Controller
{
    public function index() {
        $dati = Train::where('data', date('Y-m-d'))->get();
        return view('home', ['trains' => $dati]);
    }
}
