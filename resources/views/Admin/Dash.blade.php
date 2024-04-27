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
           {{-- Data Produk --}}
           <div class="container">
               <div class="card-body shadow my-3">
                        <h4><i class="bi bi-boxes"></i> Data Produk</h4>
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>ID Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $p)
                                    <tr>
                                        <td>{{$p->produkID}}</td>
                                        <td>{{$p->namaProduk}}</td>
                                        <td>{{$p->hargaProduk}}</td>
                                        <td>{{$p->stok}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- Data Produk --}}
                {{-- Data Kasir --}}
           <div class="container">
            <div class="card-body shadow my-3">
                     <h4><i class="bi bi-people-fill"></i> Data Kasir</h4>
                     <table class="table table-responsive">
                         <thead>
                             <tr>
                                 <th>ID Kasir</th>
                                 <th>Nama</th>
                                 <th>Username</th>
                                 <th>Password</th>
                                 <th>Telepon</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($kasir as $k)
                                 <tr>
                                     <td>{{$k->kasirID}}</td>
                                     <td>{{$k->nama_kasir}}</td>
                                     <td>{{$k->username}}</td>
                                     <td>{{$k->password}}</td>
                                     <td>{{$k->telepon}}</td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
             {{-- Data Kasir --}}

                
            
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