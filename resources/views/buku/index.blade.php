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
                                <div class="row">
                                    <div class="col">
                                        <a href="/buku/edit"><button type="button" class="btn btn-warning"><i
                                                    class="fas fa-file"></i> Ubah</button></a>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Hapus
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr>
                        <td>2.</td>
                        <td>Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones</td>
                        <td>James Clear</td>
                        <td>Avery</td>
                        <td>2018</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="/buku/edit"><button type="button" class="btn btn-warning"><i
                                                class="fas fa-file"></i> Ubah</button></a>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>The Diary of a Young Girl</td>
                        <td>Anne Frank</td>
                        <td>Doubleday & Company</td>
                        <td>1947</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="/buku/edit"><button type="button" class="btn btn-warning"><i
                                                class="fas fa-file"></i> Ubah</button></a>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Yakin ingin menghapus data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
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
