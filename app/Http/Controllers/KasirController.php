<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KasirController extends Controller
{
    //Dashboard Kasir
    public function DashKasir(){
        return view('Kasir.DashKasir',['pelanggan'=>Pelanggan::all(),'produk'=>Produk::all(),'penjualan'=>Penjualan::all(),'transaksi'=>Transaksi::all()]);
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
    public function dataPelanggan(){
        return view('Kasir.DataPelanggan',['pelanggan'=>Pelanggan::paginate(5)]);
    }
    public function editDataPelanggan(string $idpelanggan){
        return view('Kasir.EditDataPelanggan',['pelanggan'=>Pelanggan::find($idpelanggan)]);
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

    //CRUD Pelanggan
    public function simpanPelanggan(Request $request){
        $pel = new Pelanggan();
        $pel->create($request->all());
        return back();
    }
    public function updatePelanggan(Request $request, string $idpelanggan){
        Pelanggan::find($idpelanggan)->update($request->all());
        return redirect('DPelanggan');
    }
    public function deletePelanggan($idpelanggan){
        Pelanggan::find($idpelanggan)->delete();
        return back();
    }

    //CRUD Pelanggan

    //Simpan Transaksi

    public function simpanTransaksi(Request $request){
        Transaksi::create($request->all());
        return back();
    }

    public function penguranganStok($idproduk){
        Produk::decreament('stok');
        return back();
    }
    //Simpan Transaksi
}
