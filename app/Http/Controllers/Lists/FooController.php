<?php

namespace App\Http\Controllers\Lists;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooController extends Controller
{
    // index
    public function index( $name = 'hoge' )
    {
        return view( 'foo',['name' => $name] );
    }
    

}
