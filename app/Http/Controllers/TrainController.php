<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains; // Assicurati che sia Train, non Trains
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        // Recupera i treni in partenza dalla data odierna
        $trains = Trains::where('departure_time', '>=', Carbon::today())->get();

        return view('welcome', compact('trains'));
    }
}
