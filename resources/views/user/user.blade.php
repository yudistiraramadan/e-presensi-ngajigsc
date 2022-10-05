@extends('layouts.main')
@section('content')
<h1 class="h3 text-gray-800" style="margin-bottom: 20px; margin-left:10px;">Daftar User Admin & Santri</h1>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="container-fluid">
        <a href="/tambah-user">
            <button type="button" class="btn btn-success btn-sm" style="margin-left: -11px;">Tambah User
                <i class="fa-solid fa-plus"></i>
            </button>
        </a>
        <div class="row">
            <table class="table table-hover table-responsive-lg table-bordered" style="margin-top: 5px;">
                <thead>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Phone</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($data as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->level }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm">Edit
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm">Hapus
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        
        </div>
    </div>
</div>
@endsection