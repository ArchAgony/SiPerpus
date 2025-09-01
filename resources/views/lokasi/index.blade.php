@extends('master')
@section('isi')
    <div class="container mt-3 mb-3">
        <div class="card-body">
            <table id="datatablesSimple" class="stripe">
                <div class="row">
                    <div class="col">
                        <h1>Lokasi</h1>
                    </div>
                    <div class="col">
                        <div class="text-end mb-3">
                            <a href="/lokasi/create"><button type="button" class="btn btn-success">Tambah</button></a>
                        </div>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Lokasi</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lokasi as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="/lokasi/edit/{{ $item->id }}">
                                            <button type="button" class="btn btn-warning"><i class="fas fa-file"></i>
                                                Ubah</button>
                                        </a>
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

                        <!-- Modal Hapus untuk item ini -->
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
                                        Yakin ingin menghapus data <strong>{{ $item->lokasi }}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success"
                                            data-bs-dismiss="modal">Kembali</button>
                                        <a href="/lokasi/delete/{{ $item->id }}">
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

        @push('scripts')
            <script>
                function showAlert() {
                    Swal.fire({
                        title: 'Halo!',
                        text: 'Ini adalah pop-up dari SweetAlert2.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                }
            </script>
        @endpush
    @endsection
