@extends('layouts.main')
@section('content')

@if (auth()->user()->level=='admin')
    <h5>Selamat Datang Admin</h5>
    
@else     
<h5>Selamat Datang Santri</h5>
   
@endif
     
    
    
@endsection