@extends('layouts.master')
@section('title','Tambah siswa')
@section('content')
<div class="container px-4">
    <div class="alert alert-primary" role="alert">
        <form action=" {{ route('add.siswa')}}" method="POST">
            @csrf
            <div class="mb-3 mt-3 px-2">
            <input type="text" class="form-control mt-2" name="nisn" placeholder="Nisn">
            <input type="text" class="form-control mt-2" name="nis" placeholder="Nis">
            <input type="text" class="form-control mt-2" name="nama" placeholder="Nama">
            <input type="text" class="form-control mt-2" name="id_kelas" placeholder="Kelas">
            <input type="text" class="form-control mt-2" name="alamat" placeholder="Alamat">
            <input type="text" class="form-control mt-2" name="no_telp" placeholder="No Telp">
            <input type="text" class="form-control mt-2" name="id_spp" placeholder="No Spp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-primary"><a href=""></a></button>   
        </form>
    </div>
</div>
@endsection
