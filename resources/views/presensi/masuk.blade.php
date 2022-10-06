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
        <script src="{{ asset('sbadmin/js/clock/jam.js') }}"></script>

        <style>
            #watch {
                color: rgb(252, 150, 65);
                position: absolute;
                z-index: 1;
                height: 40px;
                width: 700px;
                overflow: show;
                margin: auto;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                font-size: 10vw;
                -webkit-text-stroke: 3px rgb(210, 65, 36);
                text-shadow: 4px 4px 10px rgba(210, 65, 36, 0.4),
                4px 4px 20px rgba(210, 45, 26, 0.4),
                4px 4px 30px rgba(210, 25, 16, 0.4),
                4px 4px 40px rgba(210, 15, 06, 0.4),
            }
        </style>
    </head>
    
    <body class="hold-transisition sidebar-mini" onload="realtimeClock()">
        <div id="wrapper">
            @include('layouts.sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                <div class="content">
                    @include('layouts.navbar')
                    <div class="container-fluid">
                        <h5>Presensi Masuk</h5>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            </div>
                            <div class="card-body">
                                <form action="{{ route('simpan-masuk') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <center>
                                            <label id="clock" style="font-size: 100px; color:#0a77de; -webkit-text-stroke: 3px #00acfe;
                                                    text-shadow: 4px 4px 10px #36d6fe,
                                                    4px 4px 20px #36d6fe,
                                                    4px 4px 30px #36d6fe,
                                                    4px 4px 10px #36d6fe;">
                                            </label>
                                        </center>
                                    </div>
                                    <center>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Presensi Sekarang</button>
                                        </div>
                                    </center>
                                </form>
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
    </body>
</html>