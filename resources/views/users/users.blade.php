@extends('layouts.app')
@section('title', 'List User')
@section('content')
    <table border='1'>
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>umur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>
                        <a href='{{ route('users.detail', $user['id']) }}'>
                        {{ $user['nama'] }}
                        </a>
                    </td>
                    <td>{{ $user['umur'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection