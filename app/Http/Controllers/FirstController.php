<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 28.02.2019
 * Time: 9:52
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FirstController extends Controller
{

    public function show($id){
        //echo __METHOD__;
        echo $id;
    }
}