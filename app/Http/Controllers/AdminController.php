<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    //Login
    
    public function Login(){
        return view('LoginLayout.Login');
    }

    //Login


    //Dashboard Admin
    public function DashAdmin(){
        return view('Admin.Dash',['produk'=>Produk::paginate(5),'kasir'=>Kasir::paginate(3)]);
    }
    //Dashboard Admin

    //Tambah Produk
    public function tambahProduk(){
        return view('Admin.tambahProduk',['produk'=>Produk::paginate(5)]);
    }
    public function editProduk(string $idp){
        return view('Admin.editProduk',['produk'=>Produk::find($idp)]);
    }

    public function simpanProduk(Request $request){
        $produk = new Produk();
        $produk->create($request->all());
        return back();
    }
    public function updateProduk(Request $request, string $idp){
        Produk::find($idp)->update($request->all());
        return redirect('TProduk');
    }

    public function deleteProduk(string $idp){
        Produk::find($idp)->delete();
        return back();
    }
    //Tambah Produk
    //Tambah Kasir
    public function tambahKasir(){
        return view('Admin.tambahKasir',['kasir'=>Kasir::paginate(5)]);
    }
    public function editKasir(string $idk){
        return view('Admin.editKasir',['kasir'=>Kasir::find($idk)]);
    }

    public function simpanKasir(Request $request){
        Kasir::create($request->all());
        return back();
    }
    public function updateKasir(Request $request, string $idk){
        Kasir::find($idk)->update($request->all());
        return redirect('TKasir');
    }
    public function deleteKasir($idk){
        Kasir::find($idk)->delete();
        return back();
    }
    //Tambah Kasir
}
