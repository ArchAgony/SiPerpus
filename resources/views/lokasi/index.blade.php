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
                        <th>Kode buku</th>
                        <th>Judul buku</th>
                        <th>Kategori</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>17100</td>
                        <td>The Metamorphosis</td>
                        <td>Filsafat</td>
                        <td>Rak A</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="/lokasi/edit"><button type="button" class="btn btn-warning"><i
                                                class="fas fa-file"></i> Ubah</button></a>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"
                                            onclick="showAlert()"></i> Hapus</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>17101</td>
                        <td>The Will of Power</td>
                        <td>Novel</td>
                        <td>Rak B</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="/lokasi/edit"><button type="button" class="btn btn-warning"><i
                                                class="fas fa-file"></i> Ubah</button></a>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i>
                                        Hapus</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>17102</td>
                        <td>Mein Kampf</td>
                        <td>Autobiografi</td>
                        <td>Rak C</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="/lokasi/edit"><button type="button" class="btn btn-warning"><i
                                                class="fas fa-file"></i> Ubah</button></a>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i>
                                        Hapus</button>
                                </div>
                            </div>
                        </td>
                    </tr>
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
