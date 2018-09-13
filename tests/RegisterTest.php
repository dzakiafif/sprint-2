<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 19:20
 */

class RegisterTest extends TestCase
{
    public function testShouldCreateRegister()
    {
        $this->json('POST','/register',[
            'username'=>'ditolaksono',
            'email'=> 'killcoder212@gmail.com',
            'password' => 'menara34'
        ])->seeJson([
            'status' => true
        ]);
    }
}