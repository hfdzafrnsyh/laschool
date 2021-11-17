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
            <h6 class="m-0 font-weight-bold text-primary">{{$users->email}}</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample" style="">
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-6 text-center">
                    <img src="{{asset('wp-school/user/image/' . $users->photo) }}" style="width:150px;"/>
                    <h6>Nama : {{$users->name}}</h6>
                   
                </div>
                  <div class="col-sm-6 text-center">


                 
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
