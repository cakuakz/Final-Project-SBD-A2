<html>
    <head>

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
            crossorigin="anonymous">

        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
            crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap"
            rel="stylesheet">

        <title>TDC ITS</title>
    </head>
    <body>

        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                background-color: #edf044;
                color: #312ee2;
            }
        </style>

        <a class="btn btn-primary ml-5 mb-4 mt-3" href="/home" role="button">Kembali</a>
        <h1 class="display-2 font-weight-bold text-center mt-2">DASHBOARD TDC</h1>

        <div class="container">
            <div class="row mt-5 justify-content-around">
                <div class="card" style="width: 20rem;">
                    <div class="card-body text-center">
                      <h5 class="card-title">Total Divisi</h5>
                      <p class="card-text">{{ $divisiCount }}</p>
                      @if (Auth::user()->role == 1)
                      <a class="btn btn-primary" href="/divisi" role="button">Cek Data</a>
                      @endif
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <div class="card-body text-center">
                      <h5 class="card-title">Total Proker</h5>
                      <p class="card-text">{{ $prokerCount }}</p>
                      <a class="btn btn-primary" href="/proker" role="button">Cek Data</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-around">
                <div class="card" style="width: 20rem;">
                    <div class="card-body text-center">
                      <h5 class="card-title">Total Staff</h5>
                      <p class="card-text">{{ $staffCount }}</p>
                      @if (Auth::user()->role != 4)
                      <a class="btn btn-primary" href="/staff" role="button">Cek Data</a>
                      @endif
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <div class="card-body text-center">
                      <h5 class="card-title">Total Staff Ahli</h5>
                      <p class="card-text">{{ $staffAhliCount }}</p>
                      @if (Auth::user()->role == 1 || Auth::user()->role == 2)
                      <a class="btn btn-primary" href="/staffahli" role="button">Cek Data</a>
                      @endif
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5 justify-content-center">
                <div class="card" style="width: 20rem;">
                    <div class="card-body text-center">
                      <h5 class="card-title">Total Anggota</h5>
                      <p class="card-text">{{ $anggotaCount }}</p>
                      <a class="btn btn-primary" href="/anggota" role="button">Cek Data</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
