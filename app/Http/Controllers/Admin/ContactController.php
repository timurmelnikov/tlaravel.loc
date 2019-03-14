<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
//    protected $request;
//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }

    public function show(Request $request, $id=false)
    {
        print_r($request->all());

        //echo '<h1 style="margin-top: 100px">'.$request->input('name', 'Ivan').'</h1>';

        if($request->has('name')){
            echo '<h1 style="margin-top: 100px">'.$request->input('name', 'Ivan').'</h1>';
        }

        return view('default.contact', ['title' => 'Contacts']);
    }
    //
}
