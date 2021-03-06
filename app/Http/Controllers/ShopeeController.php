<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use GuzzleHttp\Client;
use Storage;

class ShopeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('shopees.index');
    }

    public function uploadExcel()
    {
        return view('shopees.uploadExcel');
    }

    public function downloadFileExample() { 
        $url = storage_path('app/public/File_Example.xlsx');
        return response()->download($url);
    }
}
