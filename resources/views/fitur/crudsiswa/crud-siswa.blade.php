@extends('layouts.master')
@section('content')
@if (session('status'))
<div class="alert alert-succes">
  {{ session('status')}}
</div>
@endif
<div class="container"> 
    <div class="row px-3 d-sm-flex">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title mt-2"> <strong>Tabel Siswa</strong> </h3>
              <div class="float-md-right ">
                <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                  <div class="pull-right px-2">
                    <a href="{{ route('create.siswa') }}" class="btn btn-primary"><i class="fa fa-plus-square"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 470px;">
              <table class="table table-head-fixed text-nowrap" id="search">
                  <thead>
                      <tr>
                          <th>Nisn</th>
                          <th>Nis</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Alamat</th>
                          <th>No Telp</th>
                          <th>No Spp</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                <tbody>
                    @foreach ($siswa as $item)
                    <tr>
                        <td>{{ $item->nisn }}</td>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->id_kelas }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->spp->id }}</td>
                        <td>
                          <a href="#" class="btn btn-primary px-2"><i class="fa fa-pen-square"></i></a>
                          <a href="#" class="btn btn-primary px-2 btn-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
</div>

@endsection
<script>
    // Simple Datatable
    let search = document.querySelector('#search');
    let dataTable = new simpleDatatables.DataTable(search);
</script>