@extends('layouts.main')
@section('content')
<h1 class="h3 text-gray-800" style="margin-bottom: 20px; margin-left:10px;">Laporan Presensi Keseluruhan Santri</h1>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="container-fluid">
        <div class="card">
            {{-- <div class="card-header">
                tes
            </div> --}}
            <div class="card-body">
                <div class="row">
                    <table class="table table-hover table-responsive-lg table-bordered" style="margin-top: 5px;">
                        <thead>
                            {{-- <th>Id</th> --}}
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Masuk</th>
                            <th>Keluar</th>
                            <th>Lama Mengaji</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                {{-- <td>{{ $no++ }}</td> --}}
                                {{-- <td>{{ $row->id }}</td> --}}
                                <td>{{ $row->user->name }}</td>
                                <td>{{ $row->tanggal }}</td>
                                <td>{{ $row->jammasuk }}</td>
                                <td>{{ $row->jamkeluar }}</td>
                                <td>{{ $row->jamngaji }}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')

@endsection