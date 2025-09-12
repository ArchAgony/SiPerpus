@extends('master')
@section('isi')
    <div class="container mt-3 mb-3">
        <div class="card-body">
            <table id="datatablesSimple" class="stripe">
                <div class="row">
                    <div class="col">
                        <h1>Buku</h1>
                    </div>
                    <div class="col">
                        <div class="text-end mb-3">
                            <a href="/buku/create"><button type="button" class="btn btn-success">Tambah</button></a>
                        </div>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun terbit</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->judul_buku }}</td>
                            <td>{{ $item->pengarang }}</td>
                            <td>{{ $item->penerbit }}</td>
                            <td>{{ $item->tahun_terbit }}</td>
                            <td>
                                @if ($item->id_lokasi == null)
                                    -
                                @else
                                    {{ $item->id_lokasi }}
                                @endif
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="/buku/edit/{{ $item->id }}"><button type="button"
                                                class="btn btn-warning"><i class="fas fa-file"></i> Ubah</button></a>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $item->id }}">
                                            Hapus
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Yakin ingin menghapus data <strong>{{ $item->judul_buku }}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success"
                                            data-bs-dismiss="modal">Kembali</button>
                                        <a href="/buku/delete/{{ $item->id }}">
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
