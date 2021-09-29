<?php
namespace App\controllers;

use phpParser\node\Expr\funcCall;

class SelamatDatang extends basecontroller {

    public function hal_awal(){
        return 'hello saya belajar C14';
    }
    public function beranda_login(){
        return view('halaman/login');
    }
    public function daftar_member(){
        return view('halaman/daftar_member');
    }
}