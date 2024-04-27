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
                        <h3 class="page-title mb-0 p-0">Kasir</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Kasir</li>
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
                    <form action="{{url('simpanKasir')}}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                          <label for="namaProduk" class="form-label"><i class="bi bi-person"></i>Nama Kasir</label>
                          <input type="text" class="form-control" name="nama_kasir">
                        </div>
                        <div class="col-12">
                          <label for="hargaProduk" class="form-label"><i class="bi bi-person-vcard-fill"></i> Username</label>
                          <input type="text" class="form-control" name="username">
                        </div>
                        <div class="col-12">
                          <label for="stok" class="form-label"><i class="bi bi-lock"></i> Password</label>
                          <input type="text" class="form-control" name="password">
                        </div>
                        <div class="col-12">
                          <label for="stok" class="form-label"><i class="bi bi-phone"></i>No HP</label>
                          <input type="text" class="form-control" name="telepon">
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
                                <th>Kasir ID</th>
                                <th>Nama Kasir</th>
                                <th>Username Kasir</th>
                                <th>Password</th>
                                <th>No Hp</th>
                                <th>#</th>
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
                                    <td>
                                        <a href="{{url('EKasir/'.$k->kasirID)}}"><button class="btn btn-warning"><i class="bi bi-pencil" style="color: white"></i></button></a>
                                        <a href="{{url('deleteKasir/'.$k->kasirID)}}"><button class="btn btn-danger"><i class="bi bi-trash" style="color: white"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      
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