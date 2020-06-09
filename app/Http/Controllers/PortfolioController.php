<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MBrandPortfolio;

class PortfolioController extends Controller
{
    public function detail(Request $request, $id)
    {
        $portfolio = MBrandPortFolio::with('gallery')->where('id', $id)->first();
        
        return view('portfolio.detail', compact('portfolio'));
    }


    /**
     * Admin Controllers
     */

    public function adminList(Request $request)
    {
        $data = array();
        $data['title'] = "Portfolio";
        $portfolio = MBrandPortfolio::where('status', '1')->orderBy('order', 'ASC')->paginate(5);
        
        return view('admin.portfolio.index', compact('data','portfolio'));
    }

    public function adminEdit(Request $request, $id)
    {
        $data = array();
        $data['title'] = "Portfolio";
        $portfolio = MBrandPortfolio::where('id', $id)->first();

        if (empty($portfolio)) {
            return redirect('admin/portfolio');
        }
        
        $data['title'] .= " / " . $portfolio->title;
        return view('admin.portfolio.edit', compact('data'));
    }
}
