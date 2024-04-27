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
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="">Nama Produk</label>
                            <select class="form-select" name="namaProduk">
                                <option value=""></option>
                              </select>
                        </div>
                        <div class="col-md-6">
                          <label for="totalBarang" class="form-label">Tanggal Penjualan</label>
                          <input type="date" class="form-control" id="tanggalPenjualan" name="tanggalPenjualan">
                        </div>
                        <div class="col-md-2">
                          <label for="totalBarang" class="form-label">Harga satuan</label>
                          <input type="text" class="form-control" id="hargaSatuan" name="hargaSatuan" readonly>
                        </div>
                        <div class="col-md-2">
                          <label for="inputAddress" class="form-label">Jumlah Barang</label>
                          <input type="text" class="form-control" id="jumlahBarang">
                        </div>
                        <div class="col-md-2">
                          <label for="totalHarga" class="form-label">Subtotal</label>
                          <input type="text" class="form-control" id="" name="subtotal"  readonly>
                        </div>
                        <div class="col-md-2">
                          <label for="totalHarga" class="form-label">Total Harga</label>
                          <input type="text" class="form-control" id="" name="totalHarga"  readonly>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Harga Satuan</th>
                                    <th>Jumlah Barang</th>
                                </tr>
                            </thead>
                        </table>
                        
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