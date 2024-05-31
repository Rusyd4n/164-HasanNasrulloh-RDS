@extends('layouts.app')
@section('title','User Form')
@section('content')



{{-- @isset($error)
    <h3 style="color:red">{{ $error }}</h3>
@endisset --}}

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <h3 style="color:red">{{ $error }}</h3>
    @endforeach
@endif

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nama</label>
        <input type="text" name="nama"><br>
        <label for="">Umur</label>
        <input type="text" name="umur">
        <label for="gambar">gambar</label>
        <input type="file" id="gambar" name="gambar">
        <button type="submit">Submit</button>
    </form>

    @isset($payload)
        <h1>hai namaku, {{ $payload['nama'] }}</h1>
        <h1>umurku sekarang, {{ $payload['umur'] }}</h1>
        <h1>kenalan yyuk</h1><br>
        {{ $payload['gambar'] }}

    @endisset
@endsection