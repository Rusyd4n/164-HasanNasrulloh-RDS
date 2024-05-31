@extends('layouts.app')
@section('title', $user['nama'])


@section('content')
    <ul>
        <li><h1>id: {{ $user['id'] }}</h1></li>
        <li><h1>nama: {{ $user['nama'] }}</h1></li>
        <li><h1>umur: {{ $user['umur'] }}</h1></li>
    </ul>
@endsection