<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show()
    {
        $data = ['title' => 'Hello !!!'];
        //$view =  view('default.template');
        //$view->with(['title'=> 'rrrrrrr']);
        //$view->with(['title1'=> 'wwwwww']);
        //return $view;

        if (view()->exists('default.template')) {

            //view()->name('default.template', 'myview');
            //return view()->of('myview')->withTitle('Hello!!!');

            $view = view('default.template', ['title' => 'Hello !!!'])->render();

            echo view('default.template', ['title' => 'Hello !!!'])->getPath();
            //echo $view;
            return;
            //$path = config('view.paths');
            //return view()->file($path[0].'/default/template.php')->withTitle('Hello!!!');
            //return view('default.template')->withTitle('Hello!!!');
        }
        abort(404);


    }
}
