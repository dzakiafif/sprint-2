<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 13/09/2018
 * Time: 14:36
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{

    protected $table = 'provinsi';

    protected $fillable = ['nama'];

}