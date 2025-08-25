@extends('master')
@section('isi')
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col">
                <h1>Lokasi</h1>
            </div>
            <div class="col">
                <div class="text-end mb-3">
                    <a href="/lokasi"><button type="button" class="btn btn-danger">Kembali</button></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="fs-2">Tambah data</div>
                    </div>
                    <div class="col">
                        <div class="text-end">
                            <a href="/lokasi"><button type="button" class="btn btn-success">Kirim</button></a>
                        </div>
                    </div>
                </div>
                <div class="mt-3">Kode buku</div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Kode..." aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="mt-1">Judul buku</div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Judul..." aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="mt-1">kategori</div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Kategori..." aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="mt-1">Lokasi</div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Lokasi..." aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
    </div>
@endsection
