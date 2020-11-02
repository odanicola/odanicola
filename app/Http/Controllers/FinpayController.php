<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\FinpayTrx;

class FinpayController extends Controller
{
    public function callback(Request $request)
    {
        $data = $request->all();
        $model = FinpayTrx::create($data);
        echo json_encode($data);
        die();
    }

    public function authentication(Request $request)
    {
        $data = $request->all();
        $pass = "ZORA2016";
        $signature = self::createSignature($data,$pass);
        $data['mer_signature'] = $signature['result'];
        $url = "https://sandbox.finpay.co.id/servicescode/api/pageFinpay.php";
        $response = Http::post($url, $data);
        $result['result'] = $response->json();
        $result['signature'] = $signature['result'];
        echo json_encode($result);
        die();
    }

    private function createSignature($data,$pass){
        $sign_component = self::mer_signature($data,$sortir='Y').$pass;
        $sign_result = strtoupper(hash('sha256',$sign_component));
        $sign_response['component'] = $sign_component;
        $sign_response['result'] = $sign_result;
        return($sign_response);
    }
    
    private function mer_signature($dataArray,$sortir=''){
        unset($dataArray['mer_signature']);
        $result = array_filter($dataArray);
        if($sortir=='Y'){
            ksort ($result);
        }
        $output = "";
        foreach($result as $key=>$val){
            if(!empty($val)){
                if(is_array($val)){
                    $output .= json_encode($val).'%';
                }else{
                    $output .= $val.'%';
                }
            }
        }
        return strtoupper($output);
    }

    public function success()
    {
        echo 'success';
        die();
    }

    public function failed()
    {
        echo 'failed';
        die();
    }
}
