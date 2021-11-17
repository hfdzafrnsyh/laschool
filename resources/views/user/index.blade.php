@extends('layout.app')
@section('title' , 'Users')
@section('content')
<div class="content">
    <h3>Dashboard</h3>

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
                    <th scope="col">Nama </th>
                    <th scope="col">Email</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $users as $user )
                    <tr>
                    <th scope="row"> {{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <img src="{{asset('wp-school/user/image/' .$user->photo)}}" alt="" style="width:80px;">
                    </td>
                    <td>
                       
                    
                    <a href="/users/{{$user->id}}/detail" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info"></i></a> 
                    <a href="/users/{{$user->id}}/edit" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                     
                    <form action="/users/{{ $user->id }}" method="post"  class="d-inline">
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
    
                {{-- <div class="pagination justify-content-center">
                    {{$siswa->links("pagination::bootstrap-4")}}
                    </div>
             --}}
             
    
            </div>
    
    
</div>



@endsection
