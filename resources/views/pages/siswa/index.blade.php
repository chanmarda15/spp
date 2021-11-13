@extends('layouts.siswa')
@section('title', 'History Pembayaran')

@section('content')

<!-- Main Content -->
<div class="main-content px-5">
    <section class="section">
      <div class="section-header">
        <h1>SPP</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h5>Detail Siswa</h5>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-sm-2">
                          <h6 class="mb-0">NISN</h6>
                        </div>
                        <div class="col-sm-9">
                          {{ session('nisn') }}
                        </div>
                      </div>
                      <hr style="border-color: #f9f9f9;">
                      <div class="row">
                        <div class="col-sm-2">
                          <h6 class="mb-0">NIS</h6>
                        </div>
                        <div class="col-sm-9">
                            {{ $siswa[0]->nis }}
                        </div>
                      </div>
                      <hr style="border-color: #f9f9f9;">
                      <div class="row">
                        <div class="col-sm-2">
                          <h6 class="mb-0">Nama</h6>
                        </div>
                        <div class="col-sm-9">
                            {{ session('nama') }}
                        </div>
                      </div>
                      <hr style="border-color: #f9f9f9;">
                      <div class="row">
                        <div class="col-sm-2">
                          <h6 class="mb-0">Kelas</h6>
                        </div>
                        <div class="col-sm-9">
                            {{ $siswa[0]->kelas->nama_kelas }}
                        </div>
                      </div>
                      <hr style="border-color: #f9f9f9;">
                      <div class="row">
                        <div class="col-sm-2">
                          <h6 class="mb-0">Jurusan</h6>
                        </div>
                        <div class="col-sm-9">
                            {{ $siswa[0]->kelas->kompetensi_keahlian }}
                        </div>
                      </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h5>Histori Pembayran SPP</h5>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive p-3">
                    <table id="siswaTable" class="table table-striped" >
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Petugas</th>
                              <th>Bulan Bayar</th>
                              <th>Tanggal Bayar</th>
                              <th>Tahun Bayar</th>
                              <th>Jumlah Bayar</th>
                              <!-- <th>Action</th> -->
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($pembayaran as $i => $pay)
                            <tr>
                                <td>{{ $i += 1 }}</td>
                                <td>{{ $pay->user->name }}</td>
                                <td>{{ ucfirst($pay->bulan_bayar) }}</td>
                                <td>{{ Carbon\Carbon::parse($pay->tanggal_bayar)->format('d F Y') }}</td>
                                <td>{{ $pay->tahun_bayar }}</td>
                                <td>{{  "Rp. " . number_format($pay->jumlah_bayar, 0) }}</td>

                            </tr>

                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
  </div>

@endsection

@push('addon-script')
    <!-- <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> -->
    <script>
        $(document).ready(function() {
            $('#siswaTable').DataTable();
        } );
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
         function deleteData(nisn){
            Swal.fire({
                    title: 'PERINGATAN!',
                    text: "Yakin ingin menghapus data siswa? data pembayaran atas nama siswa ini pun akan dihapus jika ada.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yakin',
                        cancelButtonText: 'Batal',
                    }).then((result) => {
                    if (result.value) {
                            $('#delete'+nisn).submit();
                        }
                    })
        }
    </script>
@endpush
