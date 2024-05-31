@extends('layouts.app')
@section('title','Halaman Login')
@section('content')

@if(session()->get('error'))
    <h3 style="color:red">{{ session()->get('error') }}</h3>
@endif

    <form action="{{ route('login') }}" method="post">
      @csrf
    <h1>Login</h1>

    <label for="email">Email</label>
    <input type="text" id="email" name="email">
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <button type="submit">Submit</button>

    </form>
@endsection