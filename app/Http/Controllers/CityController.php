<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 19:04
 */

namespace App\Http\Controllers;


use App\City;
use GuzzleHttp\Client;

class CityController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $value = env('APP_URL_CITY');

        if(!empty($value)) {
            $client = new Client(['headers'=>['key'=>env('app_key_rajaongkir')]]);

            $data = $client->request('GET',$value,['verify'=>false])->getBody();

            echo $data;
        }else{
            $data = City::all();

            $output = [
                'status' => true,
                'data' => $data
            ];

            return response()->json($output);
        }
    }

}