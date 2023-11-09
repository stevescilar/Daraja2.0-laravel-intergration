<?php

namespace App\Http\Controllers\payments\mpesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MpesaController extends Controller
{
    public function getAccessToken(){

        // $consumerKey = '2VUZDRVDW9cDLGLkemJV3IA6ryckmXGa';
        // $consumerSecret = 'typ5PQrlg5qRAUub';

        $url = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
        curl_setopt($url, CURLOPT_HTTPHEADER,[
            'Authorization: Basic ' . base64_encode('2VUZDRVDW9cDLGLkemJV3IA6ryckmXGa:typ5PQrlg5qRAUub')
        ]);

        curl_setopt($url, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($url);
        // $url = env('MPESA_ENV') == 0 ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials': 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials' ;

        // $curl = curl_init($url);
        // curl_setopt_array(
        //     $curl,
        //     array(
        //         CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf8'],
        //         CURLOPT_RETURNTRANSFER => true,
        //         CURLOPT_HEADER => false,
        //         CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET ')

        //     )
        // );
        // $response = curl_exec($curl);
        // curl_close($curl);

        return $response;

        //worked with gazzle
        // $consumerKey = '2VUZDRVDW9cDLGLkemJV3IA6ryckmXGa';
        // $consumerSecret = 'typ5PQrlg5qRAUub';
        // $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        // $response = Http::withBasicAuth($consumerKey,$consumerSecret)->get($url);
        // return $response['access_token'];
    }

    //initiate stk push
    // public function initiateStkPush() {
    //     $accessToken = $this->getAccessToken();
    //     $url='';
    //     $passKey='';
    //     $businessShortCode='';
    // }

    // public function stkCallback(){

    // }
}
