@extends('layout.app')
@section('title' , 'Forum')
@section('content')
<div class="content">
    <h3>Forum</h3>

    <div class="col-lg-10">
        
        <button type="button" class="btn btn-primary mt-3 mb-3" data-toggle="modal" data-target="#exampleModal">
            Add Forum
            </button>

        @foreach ($forum as $frm)

        
        <div class="card mb-4 py-3 border-left-primary">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{asset('wp-school/siswa/image/' . $frm->user->siswa->photo)}}"  style="width:80px" alt="">
                    </div>
                    <div class="col-sm-9">
                        <h5 ><a href="/forum/{{$frm->id}}/view" class="text-danger">{{$frm->title}} | {{$frm->user->siswa->nama_depan}}</a></h5>
                        <p>{{ $frm->created_at->diffForHumans()}}</p>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

        <div class="pagination justify-content-center">
            {{$forum->links("pagination::bootstrap-4")}}
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
              <form action="/forum/create" method="post" enctype="multipart/form-data">
              @method('post')
              @csrf
                     <div class="form-group">
                                      <div class="col-sm-10">
                                          <input type="text" placeholder="Title" name="title" required id="title" class="form-control round-form @error('title') is-invalid @enderror" >
                                          @error('title')
                                  <div class="invalid-feedback">
                                      {{$message}}
                                  </div>
                                  @enderror
                                  </div>
                              
                              </div>
                     <div class="form-group">
                                      <div class="col-sm-10">
                                       <textarea name="content" required placeholder="Content" class="form-control round-form @error('content') is-invalid @enderror" ></textarea>
                                          @error('content')
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
