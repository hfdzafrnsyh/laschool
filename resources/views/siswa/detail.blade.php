@extends('layout.app')
@section('title' , 'Detail Siswa')
@section('content')
<div class="content">
    <h3>Detail Siswa</h3>

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
            <h6 class="m-0 font-weight-bold text-primary">{{$siswas->nama_depan .' '. $siswas->nama_belakang}}</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample" style="">
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6 text-center">
                    <img src="{{asset('wp-school/siswa/image/' . $siswas->photo) }}" style="width:150px;"/>
                    <h6>Nama : {{$siswas->nama_depan .' '. $siswas->nama_belakang}}</h6>
                    <p>Agama : {{ $siswas->agama }}</p>
                    <p>Jenis Kelamin : {{ $siswas->jenis_kelamin }}</p>
                    <p>Alamat : {{$siswas->alamat}}</p>
                   
                    <h6>Phone : {{$siswas->phone}}</h6>
                </div>
                  <div class="col-sm-6 text-center">

                    
                    <button type="button" class="btn btn-primary mt-3 mb-3" data-toggle="modal" data-target="#exampleModal">
                        Tambah Nilai
                        </button>

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
                            @foreach ($siswas->mapel as $mapels)
                                
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
            <a href="/siswa" class="btn btn-primary">Back</a>
        </div>
    
</div>





      
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              <form action="/siswa/{{$siswas->id}}/add-nilai" method="post" enctype="multipart/form-data">
              @method('post')
              @csrf
                               
                                <div class="form-group">
                                   <div class="col-sm-10">
                                    <label for="disabledSelect" class="form-label">Mata Pelajaran</label>
                                    <select id="form-control" class="form-select" name="mapel">
                                     @foreach($matapelajaran as $mp)
                                     <option value="{{$mp->id}}">{{$mp->nama}}</option>
                                     @endforeach
                                    </select>
                                   </div>
                                  </div>

                                  <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Nilai" name="nilai" required id="nilai" class="form-control round-form @error('nilai') is-invalid @enderror" >
                                        @error('nilai')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                                </div>
                            
                            </div>

 
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save</button>
                          </div>
  
              </form>
        </div>
       
      </div>
    </div>
  </div>



@endsection
