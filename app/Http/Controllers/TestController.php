<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    // {
    //     $data = [
    //         'index' => 6
    //     ];
    //     return view('test',$data);
    // }
    {
        $data = ['cat', 'dog', 'pig'];
        return view('test', compact('data'));
    }
}
