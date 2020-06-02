<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MBrandPortfolio;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth']);
    }
    
    public function index(Request $request) {
        $portfolio = MBrandPortfolio::where('status', '1')->orderBy('order', 'ASC')->paginate(6);
        
        if ($request->ajax()) {
            $view = view('home.loadmore', compact('portfolio'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('home.index', compact('portfolio'))->with('i', ($request->input('page', 1) - 1) * 5);;
    }

    public function getDownloadResume() {
        $file= public_path(). "/download/oda_aditiya_nicola_resume.pdf";

        $headers = array(
                'Content-Type: application/pdf',
                );

        return Response::download($file, 'oda_aditiya_nicola_resume.pdf', $headers);
    }
}
