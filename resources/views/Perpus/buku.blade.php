@extends('layout/main')
@section('title', 'Buku')
@section('container')
    <div class="container">
        <h1 class="display-3">Buku</h1>
        <p>Tersedia berbagai buku dan jurnal secara digital yang dapat diakses mahasiswa</p>

    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><b>Daftar Buku</b></div>
                    <div class="card-body table-responsive">
                        <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal">Tambah
                            Data</a>
                        <br><br>
                        <table class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($buku as $b)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $b->judul_buku }}</td>
                                        <td>{{ $b->penulis }}</td>
                                        <td>{{ $b->penerbit }}</td>
                                        <td>{{ $b->tahun_terbit }}</td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Judul Buku</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan judul buku" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Penulis</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan penulis" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Penerbit</label>
                            <input type="text" name="notelp" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan penerbit" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tahun Terbit</label>
                            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan tahun terbit" required>
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
