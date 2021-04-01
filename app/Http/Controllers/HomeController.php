<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title="Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'1905021017',
            'nama'=>'I GEDE LANANG ARYA PUTRA',
            'alamat'=>'Negare,Gang Mawar,Jalan asoka no 3',
            'nohp'=>'085965536879',
            'email'=>'Lanang.Putra@undiksha.ac.id'
        );
        return view('admin.beranda', compact('title','data'));
    }
    public function dashboard(){
        $title="Data Dashboard";

        return view('admin.dashboard', compact('title'));
    }
}