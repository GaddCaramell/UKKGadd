@extends('SidebarKasir')
@section('SidebarCashier')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Home</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
          
            {{-- Data Transaksi --}}

            <div class="container">
                <div class="card-body shadow-lg my-3">
                    <form action="{{url('simpanTransaksi')}}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="totalBarang" class="form-label">ID Pelanggan</label>
                            <select class="form-select" name="pelangganID">
                                @foreach($pelanggan as $p)
                                <option value="{{$p->pelangganID}}">{{$p->nama_pelanggan}}</option>
                                @endforeach
                            </select>
                          </div>
                        <div class="col-md-6">
                            <label for="totalBarang" class="form-label">Tanggal Transaksi</label>
                            <input type="date" class="form-control" id="tanggalTransaksi" name="tanggalTransaksi">
                          </div>
                        <div class="col-md-6">
                            <label for="">Nama Produk</label>
                            <select class="form-select" name="produkID">
                                @foreach($produk as $pro)
                                <option value="{{$pro->produkID}}">{{$pro->namaProduk}} | Rp.{{$pro->hargaProduk}}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="col-md-2">
                          <label for="jumlahBarang" class="form-label">Jumlah Beli</label>
                          <input type="number" class="form-control" id="jumlahBarang" name="jumlahBarang">
                        </div>
                        <div class="col-md-2">
                            <label for="totalHarga" class="form-label">Total Harga</label>
                            <input type="text" class="form-control" id="" name="totalHarga">
                          </div>
                          <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Penjualan ID</th>
                                    <th>Pelanggan ID</th>
                                    <th>Tanggal Penjualan</th>
                                    <th>Produk ID</th>
                                    <th>Jumlah Pembelian</th>
                                    <th>Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksi as $t)
                                    <tr>
                                        <td>{{$t->transaksiID}}</td>
                                        <td>{{$t->pelangganID}}</td>
                                        <td>{{$t->tanggalTransaksi}}</td>
                                        <td>{{$t->produkID}}</td>
                                        <td>{{$t->jumlahBarang}}</td>
                                        <td>{{$t->totalHarga}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                        <div class="text-end"">
                           <button class="btn btn-success" type="submit" style="width:20%">Bayar</button>
                          </div>
                      </form>
                </div>
            </div>
           

            {{-- Data Transaksi --}}
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> Application Pro by Admin </a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/js/sidebarmenu.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="/assets/plugins/d3/d3.min.js"></script>
    <script src="/assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/js/pages/dashboards/dashboard1.js"></script>
    <script src="/js/custom.js"></script>
    @endsection()
</body>

</html>