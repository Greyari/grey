<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembeli;

class PembeliController extends Controller
{
    public function index(){
        return Pembeli::all();
    }
    public function create_pembeli(request $request){
        $pembeli = new Pembeli;
        $pembeli->nama = $request ->nama;
        $pembeli->email = $request->email;
        $pembeli->password = $request->password;
        $pembeli->save();

        return "Data berhasil ditambahkan";
    }

    public function update_pembeli(request $request, $id){
        $nama = $request->nama;
        $alamat = $request->alamat;

        $pembeli = Pembeli::find($id);
        $pembeli->nama = $request ->nama;
        $pembeli->email = $request->email;
        $pembeli->password = $request->password;
        $pembeli->save();

        return "Data berhasil di update";
    }

}
