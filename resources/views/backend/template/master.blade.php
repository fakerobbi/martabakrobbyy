<!DOCTYPE html>
<html lang="en">

@include('backend.partials.head')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Martabak Robby</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{url ('/admin')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <!-- Heading -->
        <div class="sidebar-heading ml-3" style="color: aliceblue">
            Admin
        </div>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#menu" data-parent="#exampleAccordion">
            <i class="fas fa-utensils"></i>
            <span class="nav-link-text">Menu</span>
          </a>
          <ul class="sidenav-second-level collapse" id="menu">
            <li>
            <a href="{{ route('admin.menu.create') }}">Masukan Menu Baru</a>
            </li>
            <li>
              <a href="{{ route('admin.menu.index') }}">Lihat Menu</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cabang">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#cabang" data-parent="#exampleAccordion">
            <i class="fas fa-map-marker-alt"></i>
            <span class="nav-link-text">Daftar Cabang</span>
          </a>
          <ul class="sidenav-second-level collapse" id="cabang">
            <li>
            <a href="{{ route('admin.cabang.create') }}">Masukan Cabang Baru</a>
            </li>
            <li>
              <a href="{{ route('admin.cabang.index') }}">Lihat Cabang</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Gallery">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#gallery" data-parent="#exampleAccordion">
            <i class="fas fa-image"></i>
            <span class="nav-link-text">Gallery</span>
          </a>
          <ul class="sidenav-second-level collapse" id="gallery">
            <li>
              <a href="{{ route('admin.gallery.create') }}">Masukan Gambar Baru</a>
            </li>
            <li>
              <a href="{{ route('admin.gallery.index') }}"> Lihat Gallery</a>
            </li>
          </ul>
        </li>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pesan">
      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#pesan" data-parent="#exampleAccordion">
        <i class="far fa-envelope"></i>
        <span class="nav-link-text">Pesan</span>
      </a>
      <ul class="sidenav-second-level collapse" id="pesan">
        <li>
          <a href="{{ route('admin.message.index') }}">Lihat Pesan</a>
        </li>
      </ul>
    </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-envelope"></i>
            <span class="d-lg-none">Pesan
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Pesan Baru:</h6>
            @foreach ($messages as $items)
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>{{ $items->user_name }}</strong>
              <span class="small float-right text-muted">{{ $items->message }}</span>
              <div class="dropdown-message small">
                <span>{{ $items->created_at }}</span>

              </div>
            </a>
            @endforeach
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="{{route('admin.message.index')}}">View all messages</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  @yield('content')

     <!-- /.content-wrapper-->
     <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © Your Website 2020</small>
          </div>
        </div>
      </footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Core plugin JavaScript-->
      <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
      <!-- Page level plugin JavaScript-->
      <script src="{{asset('backend/vendor/chart.js/Chart.min.js')}}"></script>
      <script src="{{asset('backend/vendor/datatables/jquery.dataTables.js')}}"></script>
      <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{asset('backend/js/sb-admin.min.js')}}"></script>
      <!-- Custom scripts for this page-->
      <script src="{{asset('backend/js/sb-admin-datatables.min.js')}}"></script>
      <script src="{{asset('backend/js/sb-admin-charts.min.js')}}"></script>
      <script type="text/javascript">
        $(function() {
            $('.btn-danger').click(function() {
                id = $(this).attr('data-id');
                $('#input-id').val(id);
                
                // alert( $('#input-id').val() )
            });
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/12cea8388b.js" crossorigin="anonymous"></script>
    </div>
    @include('sweet::alert')
  </body>
  
  </html>
  

