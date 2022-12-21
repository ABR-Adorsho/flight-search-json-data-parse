<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $flightDataInfos = json_decode(file_get_contents(storage_path() . "/LHR_CDG_ADT1_TYPE_1.json"), true);

        echo "<pre>";
        print_r($flightDataInfos);
    }
}
