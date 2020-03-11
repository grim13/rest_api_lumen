<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function index($id,$a,$b) {
        $c = $a+$b;
        return 'get user dengan id '.$id.' hasil tambah '.$c;
    }

    public function test($nim, $name = 'saya') {
        return 'nim : '.$nim.' name: '.$name;
    }
}
