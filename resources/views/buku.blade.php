<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    @include('navbar')
    <div class="container mt-3 mb-3">
        <div class="card">
            <div class="card-header">
                Buku yang tersedia
            </div>
            <ul class="list-group list-group-flush">
                <div class="container">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Tanggal/tahun terbit</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1.</th>
                                <td>The Will To Power</td>
                                <td>Friedrich Nietzsche</td>
                                <td>1901</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <button type="button" class="btn btn-warning">Ubah</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2.</th>
                                <td>The Metamorphosis</td>
                                <td>Franz Kafka</td>
                                <td>1915</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <button type="button" class="btn btn-warning">Ubah</button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3.</th>
                                <td>A Midsummer Night's Dream</td>
                                <td>William Shakespeare</td>
                                <td>1600</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
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
            </ul>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
