@extends('layout.main')
@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h3 class=card-title>TABLE CIVITAS</h3>
          </div>
          <div class="card-body">
              <table class="table table-bordered table-striped">
                  <tr>
                      <th>ID</th>
                      {{-- <th>PHOTO</th> --}}
                      <th>NAMA</th>
                      <th>GENDER</th>
                      <th>TEMPAT LAHIR</th>
                      <th>TANGGAL LAHIR</th>
                      <th>ALAMAT</th>
                      <th>PHONE</th>
                      <th>EMAIL</th>
                      <th><input type="button" onclick="window.location.href='/civitas/tambah';" value="TAMBAH" style="                                        background-color: #04AA6D; /* Green */
                          allign:center;
                          border: none;
                          color: white;
                          padding: 15px 32px;
                          text-align: center;
                          text-decoration: none;
                          display: inline-block;
                          font-size: 16px;"/>
                      </th>
                  </tr>
                  @php ($i=0)
                  @foreach($civitas as $u)
                  <tr>
                      <td>{{ ++$i }}</td>
                      {{-- <td>{{ $u->photo }}</td> --}}
                      <td>{{ $u->nama_lengkap }}</td>
                      <td>{{ $u->jenis_kelamin }}</td>
                      <td>{{ $u->tempat_lahir }}</td>
                      <td>{{ $u->tanggal_lahir }}</td>
                      <td>{{ $u->alamat }}</td>
                      <td>{{ $u->no_hp }}</td>
                      <td>{{ $u->email }}</td>
                      <td>
                          <a href="/civitas/edit/{{ $u->id }}">Edit</a>
                          |
                          <a href="/civitas/hapus/{{ $u->id }}">Hapus</a>
                      </td>
                  </tr>
                  @endforeach
              </table>
          </div>
      </div>
  </div>
</div>
@endsection