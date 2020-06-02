<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MBrandPortfolio;

class PortfolioController extends Controller
{
    public function detail(Request $request, $id)
    {
        $portfolio = MBrandPortFolio::with('gallery')->where('id', $id)->first();
        // dd($portfolio);
        return view('portfolio.detail', compact('portfolio'));
    }
}
