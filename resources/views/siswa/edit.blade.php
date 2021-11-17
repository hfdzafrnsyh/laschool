@extends('layout.app')
@section('title' , 'Siswa')
@section('content')
<div class="content">
    <h3>Data Siswa</h3>


    <form action="/siswa/{{$siswas->id}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
               <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" value="{{$siswas->nama_depan}}" name="nama_depan" required id="nama_depan" class="form-control round-form @error('nama_depan') is-invalid @enderror" >
                                    @error('nama_depan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                            </div>
                        
                        </div>
                      <div class="form-group">
                              
                                      <div class="col-sm-10">
                                          <input type="text" value="{{$siswas->nama_belakang}}" name="nama_belakang" required id="nama_belakang" class="form-control round-form @error('nama_belakang') is-invalid @enderror" >
                                          @error('nama_belakang')
                                  <div class="invalid-feedback">
                                      {{$message}}
                                  </div>
                                  @enderror
                                  </div>
                              
                              </div>
                      <div class="form-group">
                              
                                   <div class="col-sm-10">
                                          <input type="text" value="{{$siswas->agama}}" name="agama" required id="agama" class="form-control round-form @error('agama') is-invalid @enderror" >
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
                                      <option value="L" @if($siswas->jenis_kelamin == "L") selected @endif>Laki-laki</option>
                                      <option value="P" @if($siswas->jenis_kelamin == "P") selected @endif>Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                      
                              <div class="col-sm-10">
                                  <input type="text" value="{{$siswas->phone}}" name="phone" required id="phone" class="form-control round-form @error('phone') is-invalid @enderror" >
                                  @error('phone')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>
                          @enderror
                          </div>
                      </div>

                      
                      <div class="form-group">
                            
                          <div class="col-sm-10">
                              <input type="text" value="{{$siswas->alamat}}" name="alamat" required id="alamat" class="form-control round-form @error('alamat') is-invalid @enderror" >
                              @error('alamat')
                      <div class="invalid-feedback">
                          {{$message}}
                      </div>
                      @enderror
                      </div>
                  </div>

                  
        <div class="button-back text-center">
            <a href="/siswa" class="btn btn-primary">Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>

        </form>

        
</div>



  

@endsection
