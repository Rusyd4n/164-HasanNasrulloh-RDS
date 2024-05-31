<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pegawai - <strong>TAMBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
                </div>
                <div class="card-body">
                    <a href="/pegawai" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/pegawai/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama"><br>
                            <label for="">Alamat</label>
                            <input type="text" name="alamat">
                            <button type="submit" class="btn btn-success" value="Simpan">SIMPAN</button>
                        </div>

                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>