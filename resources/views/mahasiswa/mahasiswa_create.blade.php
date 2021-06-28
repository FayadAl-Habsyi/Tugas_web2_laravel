@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                 <a href="mahasiswa" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama..." required>
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir" class="control-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir..."
                         required>
                    </div>

                    
                    <div class="form-group">
                        <label for="tgl_lahir" class="control-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tgl_lahir" placeholder="Masukan Tanggal Lahir..."
                         required>
                    </div>

                    
                    <div class="form-group">
                        <label for="telepon" class="control-label">Telepon</label>
                        <input type="number" class="form-control" name="telepon" placeholder="Masukan Telepon..."
                         required>
                    </div>

                    
                    <div class="form-group">
                        <label for="alamat" class="control-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat..."
                         required>
                    </div>

                    <div class="form-group">
                        <label for="gender" class="control-label">Gender</label>
                        <select class="form-control" name="gender">
                            <option disabled selected> Pilih </option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <label for="foto" class="control-label">Photo</label>
                        <input type="file" class="form-control" name="foto" placeholder="Masukan Foto..."
                         required>
                    </div>

                    

                    <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                
                </form>
                </div>
                </div>
                </div>

                </div>
            </div>
            </div>
@endsection