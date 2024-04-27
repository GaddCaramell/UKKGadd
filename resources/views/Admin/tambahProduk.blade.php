@extends('Sidebar')
@section('Sidebarr')
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
                        <h3 class="page-title mb-0 p-0">Produk</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
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
           
                
            <div class="container">
                <div class="card-body">
                    <form action="{{url('simpanProduk')}}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                          <label for="namaProduk" class="form-label">Nama Produk</label>
                          <input type="text" class="form-control" name="namaProduk">
                        </div>
                        <div class="col-12">
                          <label for="hargaProduk" class="form-label">Harga</label>
                          <input type="text" class="form-control" name="hargaProduk">
                        </div>
                        <div class="col-12">
                          <label for="stok" class="form-label">Stok Barang</label>
                          <input type="text" class="form-control" name="stok">
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-in-down"></i> Tambah Produk</button>
                        </div>
                      </form>
                      {{-- Table --}}
                      <div class="card-body shadow" style="margin-top: 2%">   
                      <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Produk ID</th>
                                <th>Nama Produk</th>
                                <th>Harga Produk</th>
                                <th>Stok Tersedia</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $prod)
                                <tr>
                                    <td>{{$prod->produkID}}</td>
                                    <td>{{$prod->namaProduk}}</td>
                                    <td>{{$prod->hargaProduk}}</td>
                                    <td>{{$prod->stok}}</td>
                                    <td>
                                        <a href="{{url('EProduk/'.$prod->produkID)}}"><button class="btn btn-warning"><i class="bi bi-pencil" style="color: white"></i></button></a>
                                        <a href="{{url('deleteProduk/'.$prod->produkID)}}"><button class="btn btn-danger"><i class="bi bi-trash" style="color: white"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{$produk->links()}}
                    </div>
                    {{-- Table --}}
                </div>
            </div>
                
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 Material Pro Admin by</a>
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