@extends('layouts.default')
@section('content')

<section>
    <br><br><br>
    <div class="container rounded-3 col-md-6 border border-light shadow p-3">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h2>Tambah Data</h2><br>
                <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" name="nama" class="form-control" placeholder="masukan nama">
                    </div><br>
                    <div class="form-group">
                        <label for="no_tlp">Nomor Telephone</label>
                        <input type="text" name="no_tlp" class="form-control" placeholder="masukan nomor telephone">
                    </div><br>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="masukan alamat"></textarea>
                    </div><br>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-secondary">Tambah Data</button>
                        <a href="{{ url('/') }}" class="btn btn-secondary">Batal</a>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection