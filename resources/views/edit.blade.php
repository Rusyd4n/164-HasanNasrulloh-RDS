@extends('layout.main')
@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h3 class=card-title>TABLE CIVITAS</h3>
          </div>
          <div class="card-body">
<div>
<h3>Edit Civitas</h3>

<a href="/civitas"> Kembali</a>

<br/>
<br/>

@foreach($civitas as $u)
<form action="/civitas/update" method="post">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $u->id }}"> <br/>
{{-- Photo <input type="text" name="photo" required="required" value="{{ $u->photo }}"> <br/> --}}
Nama <input type="text" name="nama_lengkap" required="required" value="{{ $u->nama_lengkap }}"> <br/>
Gender <input type="text" name="jenis_kelamin" required="required" value="{{ $u->jenis_kelamin }}"> <br/>
Tempat Lahir <input type="text" name="tempat_lahir" required="required" value="{{ $u->tempat_lahir }}"> <br/>
Tanggal Lahir <input type="date" name="tanggal_lahir" required="required" value="{{ $u->tanggal_lahir }}"> <br/>
Alamat <textarea name="alamat" required="required">{{ $u->alamat }}</textarea> <br/>
Phone <input type="text" name="no_hp" required="required" value="{{ $u->no_hp }}"> <br/>
Email <input type="text" name="email" required="required" value="{{ $u->email }}"> <br/>
<input type="submit" value="Simpan Data">
</form>
@endforeach<!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>

          </div>
      </div>
  </div>

</div>
@endsection