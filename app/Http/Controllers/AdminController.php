<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function home(){
    	return view('home.home');
    }

    public function artikel(){
    	return view('artikel.artikel');
    }

    public function login(){
    	return view('login.login');
    }

    public function user(){
    	return view('user.index');
    }

    public function kategori(){
        return view('kategori.kategori');
    }
    public function insertartikel(){
        return view ('artikel.insertartikel');
    }
    public function insertkategori(){
        return view ('kategori.insertkategori');
    }
}
