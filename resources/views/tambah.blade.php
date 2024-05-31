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
<h3>Data Civitas</h3>

<a href="/civitas"> Kembali</a>

<br/>
<br/>

<form action="/civitas/store" method="post">
{{ csrf_field() }}
{{-- Photo <input type="text" name="photo" required="required"> <br/> --}}
Nama <input type="text" name="nama_lengkap" required="required"> <br/>
Gender <input type="text" name="jenis_kelamin" required="required"> <br/>
Tempat Lahir <input type="text" name="tempat_lahir" required="required"> <br/>
Tanggal Lahir <input type="date" name="tanggal_lahir" required="required"> <br/>
Alamat <textarea name="alamat" required="required"></textarea> <br/>
Phone <input type="text" name="no_hp" required="required"> <br/>
Email <input type="text" name="email" required="required"> <br/>
<input type="submit" value="Simpan Data">
</form>
</div>

          </div>
      </div>
  </div>

</div>
@endsection