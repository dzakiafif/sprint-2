<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 18:00
 */

namespace App\Http\Controllers;


use App\City;
use App\Provinsi;
use GuzzleHttp\Client;

class DummyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $value = env('APP_URL_CITY');

        $client = new Client(['headers'=>['key'=>env('APP_KEY_RAJAONGKIR')]]);

        $data = json_decode($client->request('GET',$value,['verify'=>false])->getBody());

        foreach ($data->rajaongkir->results as $item) {
            $newData = new City();
            $newData->id = $item->city_id;
            $newData->provinsi_id = $item->province_id;
            $newData->provinsi = $item->province;
            $newData->type = $item->type;
            $newData->city_name = $item->city_name;
            $newData->postal_code = $item->postal_code;

            $newData->save();
        }

        echo 'ok';

    }

    public function province()
    {
        $value = env('app_url_provinsi');

        $client = new Client(['headers'=>['key'=>env('app_key_rajaongkir')]]);

        $data = json_decode($client->request('GET',$value,['verify'=>false])->getBody());

        foreach ($data->rajaongkir->results as $item) {
            $newData = new Provinsi();
            $newData->id = $item->province_id;
            $newData->nama = $item->province;

            $newData->save();
        }

        echo 'ok';
    }

}