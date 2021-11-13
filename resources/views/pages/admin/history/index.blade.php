@extends('layouts.master')
@section('title', 'History Pembayaran')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>History Pembayaran</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-body p-0">
                  <div class="table-responsive p-3">
                    <table id="siswaTable" class="table table-striped" >
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Petugas</th>
                              <th>NISN</th>
                              <th>Nama</th>
                              <th>Kelas</th>
                              <th>Tanggal Bayar</th>
                              <th>Bulan Bayar</th>
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
                                <td>{{ $pay->nisn }}</td>
                                <td>{{ $pay->siswa->nama }}</td>
                                <td>{{ $pay->siswa->kelas->nama_kelas }}</td>
                                <td>{{ Carbon\Carbon::parse($pay->tanggal_bayar)->format('d-m-Y') }}</td>
                                <td>{{ ucfirst($pay->bulan_bayar) }}</td>
                                <td>{{ $pay->tahun_bayar }}</td>
                                <td>{{  "Rp. " . number_format($pay->jumlah_bayar, 0, '', '.') }}</td>

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
