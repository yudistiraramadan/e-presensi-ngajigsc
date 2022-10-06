<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>SB Admin 2 - Blank</title>
    
        <!-- Custom fonts for this template-->
        <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
        <!-- Custom styles for this template-->
        <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    
        {{-- Fontawesome 6.2.0 --}}
        <script src="https://kit.fontawesome.com/7d0c6917e1.js" crossorigin="anonymous"></script>
    </head>
    
    <body class="hold-transisition sidebar-mini">
        <div id="wrapper">
            @include('layouts.sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                <div class="content">
                    @include('layouts.navbar')
                    <div class="container-fluid">
                        <h5 style="text-align:center;">Rekap Presensi Santri</h5>
                        <div class="row justify-content-center">
                            <div class="card shadow mb-4 col-lg-6">
                                <div class="card-header">Lihat Data</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="label">Tanggal Awal</label>
                                        <input type="date" name="tglawal" id="tglawal" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="label">Tanggal Akhir</label>
                                        <input type="date" name="tglakhir" id="tglakhir" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <a href="" onclick="this.href='/filter-data' + document.getElementById('tglawal').value +
                                        '/' + document.getElementById('tglakhir').value" class="btn btn-primary col-md-12">
                                        Lihat Data <i class="fa-sharp fa-solid fa-print-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <table class="table table-responsive table-bordered table-hover">
                                            <tr>
                                                <th>Santri</th>
                                                <th>Tanggal</th>
                                                <th>Masuk</th>
                                                <th>Keluar</th>
                                                <th>Jumlah Jam Mengaji</th>
                                            </tr>
                                            @foreach ($presensi as $row)
                                                <tr>
                                                    <td>{{ $row->user->name }}</td>
                                                    <td>{{ $row->tanggal }}</td>
                                                    <td>{{ $row->jammasuk }}</td>
                                                    <td>{{ $row->jamkeluar }}</td>
                                                    <td>{{ $row->jamngaji }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer')
                </div>
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        @include('layouts.script')
        @include('sweetalert::alert')
    </body>
</html>