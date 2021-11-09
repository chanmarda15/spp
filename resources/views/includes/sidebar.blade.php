<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ url('admin')}}">SPP</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ url('admin')}}">PN</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
          <a href="{{ route('dashboard')}}" class="nav-link"><i class="fas fa-school"></i><span>Dashboard</span></a>
        </li>
        @if(auth()->user()->level == 'admin')
        <li class="menu-header">Data Master</li>
        <li class="nav-item {{ Request::is('data-siswa') ? 'active' : '' }}"><a class="nav-link" href="{{ url('data-siswa') }}"><i class="fas fa-book"></i> <span>Data Siswa</span></a></li>
        <li class="nav-item {{ Request::is('data-kelas') ? 'active' : '' }}"><a class="nav-link" href="{{ url('data-kelas') }}"><i class="fas fa-book-reader"></i> <span>Data Kelas</span></a></li>
        <li class="nav-item {{ Request::is('admin/denda') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fas fa-calendar-times"></i> <span>Data SPP</span></a></li>
        <li class="nav-item {{ Request::is('admin/petugas') ? 'active' : '' }}"><a class="nav-link" href=" "><i class="fas fa-users-cog"></i> <span>Data Petugas</span></a></li>
        @endif

        <li class="menu-header">Transaksi   </li>
        <li class="nav-item {{ Request::is('admin/laporan') ? 'active' : '' }}"><a class="nav-link" href=" "><i class="fas fa-file-alt"></i> <span>Entry Pembayaran</span></a></li>
        <li class="nav-item {{ Request::is('admin/siswa') ? 'active' : '' }}"><a class="nav-link" href=" "><i class="fas fa-users"></i> <span>History Pembayaran</span></a></li>

        @if(auth()->user()->level == 'admin')
        <li class="menu-header">Ekstra</li>
        <li class="nav-item {{ Request::is('admin/petugas') ? 'active' : '' }}"><a class="nav-link" href=" "><i class="fas fa-users-cog"></i> <span>Laporan</span></a></li>
        @endif


        <div class="px-3 " style="margin-top: 200px">
          <form action="{{ url ('logout')}}" method="POST">
          @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm btn-block ">
              <i class="fas fa-sign-out-alt"></i> <span class="hide-sidebar-mini">Logout</span>
            </button>
          </form>
        </div>
      </ul>
  </aside>
</div>
