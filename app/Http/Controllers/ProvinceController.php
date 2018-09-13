<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 18:52
 */

namespace App\Http\Controllers;


use App\Provinsi;
use GuzzleHttp\Client;

class ProvinceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $value = env('APP_URL_PROVINSI');
        if(!empty($value)) {
            $client = new Client(['headers'=>['key'=>env('app_key_rajaongkir')]]);

            $data = $client->request('GET',$value,['verify'=>false])->getBody();

            echo $data;
        }else{
            $data = Provinsi::all();

            $output = [
                'status' => true,
                'data' => $data
            ];

            return response()->json($output);
        }
    }

}