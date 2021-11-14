<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <img src="{{ asset('assets/img/logo.png') }}" class="img" width="30" alt="">
      <a href="{{ url('dashboard')}}">SPP</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ url('dashboard')}}">SPP</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
          <a href="{{ route('dashboard')}}" class="nav-link"><i class="fas fa-school"></i><span>Dashboard</span></a>
        </li>
        @if(auth()->user()->level == 'admin')
        <li class="menu-header">Data Master</li>
        <li class="nav-item {{ Request::is('data-siswa') ? 'active' : '' }}"><a class="nav-link" href="{{ url('data-siswa') }}"><i class="fas fa-users"></i> <span>Data Siswa</span></a></li>
        <li class="nav-item {{ Request::is('data-kelas') ? 'active' : '' }}"><a class="nav-link" href="{{ url('data-kelas') }}"><i class="fas fa-layer-group"></i> <span>Data Kelas</span></a></li>
        <li class="nav-item {{ Request::is('data-spp') ? 'active' : '' }}"><a class="nav-link" href="{{url('data-spp')}}"><i class="fas fa-receipt"></i> <span>Data SPP</span></a></li>
        <li class="nav-item {{ Request::is('data-petugas') ? 'active' : '' }}"><a class="nav-link" href="{{ url('data-petugas') }}"><i class="fas fa-users-cog"></i> <span>Data Petugas</span></a></li>
        @endif

        <li class="menu-header">Transaksi   </li>
        <li class="nav-item {{ Request::is('pembayaran') ? 'active' : '' }}"><a class="nav-link" href="{{ url('pembayaran') }}"><i class="fas fa-money-bill-wave"></i> <span>Entry Pembayaran</span></a></li>
        <li class="nav-item {{ Request::is('histori-pembayaran') ? 'active' : '' }}"><a class="nav-link" href="{{ url('histori-pembayaran') }}"><i class="fas fa-history"></i> <span>History Pembayaran</span></a></li>

        @if(auth()->user()->level == 'admin')
        <li class="menu-header">Ekstra</li>
        <li class="nav-item {{ Request::is('laporan') ? 'active' : '' }}"><a class="nav-link" href="{{ url('laporan') }}"><i class="fas fa-file-invoice"></i> <span>Laporan</span></a></li>
        @endif

      </ul>
  </aside>
</div>
