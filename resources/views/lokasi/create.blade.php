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
                <form action="/lokasi/create" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="fs-2">Tambah data</div>
                        </div>
                        <div class="col">
                            <div class="text-end">
                                <button type="submit" class="btn btn-success">Kirim</button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">Lokasi</div>
                    <div class="input-group">
                        <input name="lokasi" type="text" class="form-control" placeholder="Lokasi..." aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="mt-1">Deskripsi</div>
                    <div class="input-group">
                        <input name="deskripsi" type="text" class="form-control" placeholder="Deskripsi..." aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
