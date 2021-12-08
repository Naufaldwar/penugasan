@extends('layouts.default')

@section('content')
     <!-- nav judul -->
     <nav class="colornav sizenav"><h2 class="size">Klinik <small class="text-muted ">Sehat</small></h2></nav>
     <!-- akhir nav judul -->
     <!-- nav bar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                     <li class="nav-item">
                         <a class="nav-link" href="{(url(''))}">Beranda</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{(url(''))}">Data Pasien</a>
                     </li>                     
                 </ul>
             </div>
             <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-secondary" type="button" href="{(url(''))}">Logout</a>
             </div>
         </div>
     </nav><br>
     <!-- akhir navbar -->
     <div class="container-sm-3">
        <a href="{{ url('create') }}" class="btn btn-secondary btn-md mt-2" >+ Tambah</a>
     </div>
     <br><br>
      <!-- table -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Nomor Telephone</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
                
                </tr>
                @foreach ($data as $dataPasien)
                    <tr>
                        <td>{{ $dataPasien->id }}</td>
                        <td>{{ $dataPasien->nama }}</td>
                        <td>{{ $dataPasien->no_tlp }}</td>
                        <td>{{ $dataPasien->alamat }}</td>
                        <td>
                            <a href="{{ url('/show/'. $dataPasien->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('/destroy/'. $dataPasien->id) }}" class="btn btn-warning">Delete</a>
                        </td>
                    </tr>   
                @endforeach 
            </thead>
        </table>
    </div>
        <!-- akhir table -->
     
     
@endsection