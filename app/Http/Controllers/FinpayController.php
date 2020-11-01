<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MBrandPortfolio;

class FinpayController extends Controller
{
    public function callback(Request $request)
    {
        $data = $request->all();
        echo json_encode($data);
        die();
    }
}
