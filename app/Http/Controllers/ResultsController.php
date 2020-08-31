<?php

namespace App\Http\Controllers;

use App\Imports\PlayerImport;
use App\Imports\SeasonImport;
use App\Season;
use DB;
use Maatwebsite\Excel\Facades\Excel;

class ResultsController extends Controller
{
    public function index()
    {
        Excel::import(new PlayerImport, storage_path('results.csv'));
        Excel::import(new SeasonImport, storage_path('results.csv'));
        $seasons = Season::orderBy('points', 'desc')->get();
        $position = 0;
        return view('welcome', compact('seasons', 'position'));
    }
}
