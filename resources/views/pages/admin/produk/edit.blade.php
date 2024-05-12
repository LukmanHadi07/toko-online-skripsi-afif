@include('components.layouts.admin_components.header_admin')
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-3">NihaGrapicha<sup></sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Fitur
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-store"></i>
                    <span>Produk</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Management Produk</h6>
                        <a class="collapse-item" href="{{ route('produk.index') }}">Katalog Produk</a>
                        <a class="collapse-item" href="{{ route('produk.create') }}">Add Produk</a>
                    </div>
                </div>
            </li>

             <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-receipt"></i>
                    <span>Category</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Management Category</h6>
                        <a class="collapse-item" href="{{ route('category.index') }}">Katalog Category</a>
                        <a class="collapse-item" href="{{ route('category.create') }}">Add Category</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        

                    

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <img class="img-profile rounded-circle"
                            src="{{ asset( Auth::user()->gambarProfile ) }}">
                        </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('profile.index')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                
                                    <a class="dropdown-item" href="{{route('profile.edit')}}">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                 <!-- Begin Page Content -->
                 <div class="container-fluid">
                    <!--content --> 
                      <!-- Page Heading -->
                      <h1 class="h3 mb-2 text-gray-800">Produk</h1>
                      <!-- DataTales Example -->
                      <div class="container d-flex justify-content-center align-items-center"  >
                      <div class="card w-100">
                          <div class="card-header">
                            Update Data Produk
                          </div>
                          <div class="card-body">
                              <form method="post" action="{{ route('produk.update', $produk->id) }}"  enctype="multipart/form-data"> 
                                  @csrf
                                  @method('PUT')
                                  <div class="mb-8">
                                      <label for="nama" class="form-label">Nama</label>
                                      <input type="text" class="form-control" id="nama_produk" aria-describedby="nama" name="nama"   value="{{ $produk->nama }}" required>
                                      <small class="text-danger d-none" id="name-warning">Please fill in the name.</small>
                                  </div>
                                  <br>
                                  <div class="form-group">
                                    <label for="deskripsi">Deskirpsi Produk:</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3"  placeholder="Deskripsi Produk" required>{{ $produk->deskripsi }}</textarea>
                                </div>
    
                                <div class="mb-8">
                                    <label for="harga" class="form-label">Harga Produk</label>
                                    <input type="text" class="form-control" id="harga" aria-describedby="harga" name="harga"   value="{{ $produk->harga }}" required>
                                    <small class="text-danger d-none" id="name-warning">Please fill in the name.</small>
                                </div>
                                <br>
                                <div class="mb-8">
                                    <label for="stok" class="form-label">Stok Produk</label>
                                    <input type="text" class="form-control" id="stok" aria-describedby="stok" name="stok"  value="{{ $produk->stok }}" required>
                                    <small class="text-danger d-none" id="name-warning">Please fill in the name.</small>
                                </div>
                                <br>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    
                                    <img src="{{ asset($produk->gambarUrlProduk) }}" alt="Current Image" class="img-thumbnail" width="300" height="200">
                            
                                    <div class="form-group">
                                        <br>
                                        <strong>Gambar Produk:</strong>
                                         <input type="file" name="gambarUrlProduk" class="form-control" placeholder="Gambar Produk">
                                        @error('gambarUrlProduk')
                                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Category Produk:</label>
                                    <select name="category_id" id="category_id" class="form-control" >
                                        @foreach($category as $categories)
                                            <option value="{{ $categories->id }}">{{ $categories->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                               <br>
                                  <hr>
                                  <button type="submit" class="btn btn-primary">Update Produk</button>
                              </form>
                          </div>
                        </div>
                      </div>
  
                      @if (session('success'))
          <div class="alert alert-success mt-4" role="alert">
              <h4 class="alert-heading">Well done!</h4>
              <p>{{ session('success') }} Data category berhasil ditambahkan.</p>
          </div>
          @endif

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

           <!-- Footer -->
           <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; By Afif Dev 2024</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    @include('components.layouts.admin_components.footer_admin')