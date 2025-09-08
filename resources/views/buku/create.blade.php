@extends('master')
@section('isi')
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col">
                <h1>Lokasi</h1>
            </div>
            <div class="col">
                <div class="text-end mb-3">
                    <a href="/buku"><button type="button" class="btn btn-danger">Kembali</button></a>
                </div>
            </div>
        </div>
        <div class="card">
            <form action="/buku/create" method="post">
                @csrf
                <div class="card-body">
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
                    <div class="mt-3">Judul Buku</div>
                    <div class="input-group">
                        <input name="judul" type="text" class="form-control" placeholder="Judul..."
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="mt-1">Pengarang</div>
                    <div class="input-group">
                        <input name="pengarang" type="text" class="form-control" placeholder="Pengarang..."
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="mt-1">Penerbit</div>
                    <div class="input-group">
                        <input name="penerbit" type="text" class="form-control" placeholder="Penerbit..."
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="mt-1">Tahun Terbit</div>
                    <div class="input-group">
                        <input name="tahun" type="text" class="form-control" placeholder="Tahun..."
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="mt-1">Lokasi rak</div>
                    <div class="input-group">
                        <select name="lokasi" class="form-select" id="inputGroupSelect01">
                            <option value="" selected>Choose...</option>
                            @foreach ($lokasi as $key => $item)
                                <option value="{{ $item->id }}">{{ $item->lokasi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
