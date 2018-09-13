<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 17:46
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $data = new User();
        $data->username = $request->input('username');
        $data->password = md5($request->input('password'));
        $data->email = $request->input('email');

        $data->save();

        $output = [
            'status' => true
        ];

        return response()->json($output);
    }

    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();

        if(md5($request->input('password')) == $user->password) {
            $apikey = str_random(40);
            User::where('email', $request->input('email'))->update(['api_key' => $apikey]);
            $output = [
                'status' => true,
                'api_key' => $apikey
            ];
            return response()->json($output);
        }else{
            return response()->json(['status' => 'fail'],401);
        }
    }

}