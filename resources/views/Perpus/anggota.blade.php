@extends('layout/main')
@section('title', 'Anggota')
@section('container')
    <div class="container">
        <h1 class="display-3">Anggota</h1>
        <p>Anggota perpustakaan (Mahasiswa Politeknik Negeri Jember)</p>

    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><b>Daftar Anggota</b></div>
                    <div class="card-body table-responsive">
                        <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal">Tambah
                            Data</a>
                        <br><br>
                        <table class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anggota</th>
                                    <th>NIM</th>
                                    <th>Email</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anggota as $a)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->nim }}</td>
                                        <td>{{ $a->email }}</td>
                                        <td>{{ $a->jurusan }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="" class="btn btn-sm btn-danger">Hapus</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan nama anda" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan email anda" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">NIM</label>
                            <input type="text" name="nim" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan NIM" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan jurusan anda" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary"
                                onclick="return confirm('Apakah anda yakin data sudah benar');"><i
                                    class=" fa fa-save"></i> Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
