<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" />
</head>

<body>
    @include('navbar')
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-header">
                Buku yang tersedia
            </div>
            <div class="container">

                <table id="example" class="display">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>The Will Of Power</td>
                            <td>Filsafat</td>
                            <td>Friedrich Nietzsche</td>
                            <td>Narasi</td>
                            <td>1901</td>
                            <td>Rak A</td>
                            <td>
                                <div class="row">
                                    <div class="col-5">
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
                            <td>The Metamorphosis</td>
                            <td>Novel</td>
                            <td>Franz Kafka</td>
                            <td>Kurt Wolff Verlag</td>
                            <td>1915</td>
                            <td>Rak B</td>
                            <td>
                                <div class="row">
                                    <div class="col-5">
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
                            <td>A Midsummer Night's Dream</td>
                            <td>Sandiwara</td>
                            <td>William Shakespheare</td>
                            <td>Thomas Fisher</td>
                            <td>1600</td>
                            <td>Rak C</td>
                            <td>
                                <div class="row">
                                    <div class="col-5">
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
