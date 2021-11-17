@extends('layout.app')
@section('title' , 'Siswa')
@section('content')
<div class="content">
    <h3>Data Siswa</h3>

       <!-- Button trigger modal -->
 
       <div class="col-lg-12">
           <div class="row">
               <div class="col-sm-6">
                   
                         <button type="button" class="btn btn-primary mt-3 mb-3" data-toggle="modal" data-target="#exampleModal">
                          Tambah Data
                          </button>
               </div>
               <div class="col-sm-6">
                <form class="d-flex">
                    <input name="search_siswa"class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
        
               </div>
           </div>
       </div>

 

    <div class="table-user">

    <div class="session">
        @if( session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    </div>

    <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Depan</th>
                <th scope="col">Nama Belakang</th>
                <th scope="col">Agama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $siswa as $siswas )
                <tr>
                <th scope="row"> {{ $loop->iteration }}</th>
                <td>{{ $siswas->nama_depan }}</td>
                <td>{{ $siswas->nama_belakang }}</td>
                <td>{{ $siswas->agama }}</td>
                <td>{{ $siswas->jenis_kelamin }}</td>
                <td>
                   
                
                <a href="/siswa/{{$siswas->id}}/detail" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info"></i></a> 
                <a href="/siswa/{{$siswas->id}}/edit" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                 
                <form action="/siswa/{{ $siswas->id }}" method="post"  class="d-inline">
                    @method('delete')
                    @csrf

                    <button type="submit" class="btn btn-danger btn-circle btn-sm justify-content-end" onclick="return confirm('apakah anda yakin hapus?')"><i class="fas fa-trash "></i></button>
                </form>
                    
                </td>

            </tr>
                <tr>
                @endforeach
            </tbody>
            </table>

            <div class="pagination justify-content-center">
                {{$siswa->links("pagination::bootstrap-4")}}
                </div>
        
         

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
              <form action="/siswa/create" method="post" enctype="multipart/form-data">
              @method('post')
              @csrf
                     <div class="form-group">
                                      <div class="col-sm-10">
                                          <input type="text" placeholder="Nama Depan" name="nama_depan" required id="nama_depan" class="form-control round-form @error('nama_depan') is-invalid @enderror" >
                                          @error('nama_depan')
                                  <div class="invalid-feedback">
                                      {{$message}}
                                  </div>
                                  @enderror
                                  </div>
                              
                              </div>
                            <div class="form-group">
                                    
                                            <div class="col-sm-10">
                                                <input type="text" placeholder="Nama Belakang" name="nama_belakang" required id="nama_belakang" class="form-control round-form @error('nama_belakang') is-invalid @enderror" >
                                                @error('nama_belakang')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        </div>
                                    
                                    </div>
                                    <div class="form-group">
                                    
                                        <div class="col-sm-10">
                                            <input type="email" placeholder="Email" name="email" required id="email" class="form-control round-form @error('email') is-invalid @enderror" >
                                            @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    </div>
                                
                                </div>     
                            <div class="form-group">
                                    
                                         <div class="col-sm-10">
                                                <input type="text" placeholder="Agama" name="agama" required id="agama" class="form-control round-form @error('agama') is-invalid @enderror" >
                                                @error('agama')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        </div>
                                    
                                    </div>
                              
                               
                                <div class="form-group">
                                   <div class="col-sm-10">
                                    <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="form-control" class="form-select">
                                      <option value="L">Laki-laki</option>
                                      <option value="P">Perempuan</option>
                                    </select>
                                   </div>
                                  </div>

                                  <div class="form-group">
                            
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Phone" name="phone" required id="phone" class="form-control round-form @error('phone') is-invalid @enderror" >
                                        @error('phone')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                                </div>
                            </div>

                            
                            <div class="form-group">
                                  
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Alamat" name="alamat" required id="alamat" class="form-control round-form @error('alamat') is-invalid @enderror" >
                                    @error('alamat')
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
