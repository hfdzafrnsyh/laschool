@extends('layout.app')
@section('title' , 'Profile')
@section('content')
<div class="content">
    <h3>Profile</h3>

    <div class="session">
        @if( session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">{{$siswa->email}}</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample" style="">
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6 text-center">
                    <img src="{{asset('wp-school/siswa/image/' . $siswa->photo) }}" style="width:150px;"/>
                    <h6>Nama : {{$siswa->nama_depan}}</h6>
                   
                </div>
                  <div class="col-sm-6 text-center">


                    <h5>Mata Pelajaran</h5>

                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Kode</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Semester</th>
                          <th scope="col">Guru</th>
                          <th scope="col">Nilai</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($siswa->mapel as $mapels)
                              
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$mapels->kode}}</td>
                          <td>{{$mapels->nama}}</td>
                          <td>{{$mapels->semester}}</td>
                          <td>{{$mapels->guru->nama}}</td>
                          <td>{{$mapels->pivot->nilai}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>


                  </div>
              </div>
            </div>
        </div>
    </div>

        <div class="button-back text-center">
            <a href="/dashboard" class="btn btn-primary">Back</a>
        </div>
    
</div>







@endsection
