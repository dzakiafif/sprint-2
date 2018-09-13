<?php

/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 19:39
 */
class LoginTest extends TestCase
{

    public function testShouldLogin()
    {
        $this->json('POST','/login',[
            'email'=>'dzakiafif12@gmail.com',
            'password'=>'menara34'])
            ->seeJson(['status'=>true]);
    }

}