<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KasirController extends Controller
{
    //Dashboard Kasir
    public function DashKasir(){
        return view('Kasir.DashKasir');
    }
    public function historiTransaksi(){
        return view('Kasir.historiTransaksi');
    }
    public function dataProduk(){
        return view('Kasir.DataProduk',['produk'=>Produk::paginate(5)]);
    }
    public function editDataProduk(string $idproduk){
        return view('Kasir.EditDataProduk',['prod'=>Produk::find($idproduk)]);
    }
    //Dashboard Kasir
    //CRUD Kasir
    public function createProduk(Request $request){
        $p = new Produk();
        $p->create($request->all());
        return back();
    }
    public function recreateProduk(Request $request, string $idproduk){
        Produk::find($idproduk)->update($request->all());
        return redirect('DProduk');
    }
    public function deleteDataProduk($idproduk){
        Produk::find($idproduk)->delete();
        return back();
    }
    //CRUD Kasir
}
