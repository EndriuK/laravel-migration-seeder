<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {

        $trains = Trains::where('departure_time', '>=', Carbon::today())->get();

        return view('welcome', compact('trains'));
    }
}
