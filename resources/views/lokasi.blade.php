<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" />
</head>

<body>
    @include('navbar')
    <div class="container text-center pt-2 pb-2">
        <div class="display-5 mb-2">Lokasi Rak Buku</div>
        <div class="card">
            <div class="card-header text-start">
                Pembagian Rak
            </div>
            <div class="container">

                <table id="example" class="display text-start">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Rak</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Rak A</td>
                            <td>Filsafat</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-warning">Ubah</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Rak B</td>
                            <td>Novel</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-warning">Ubah</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Rak C</td>
                            <td>Sandiwara</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-warning">Ubah</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>
