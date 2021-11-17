@extends('layout.app')
@section('title' , 'Forum')
@section('content')
<div class="content">
    <h3>Forum View</h3>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$forums->title}}</h6>
        </div>
        <div class="card-body">
           {{ $forums->content}}
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-default">Suka</button>
            <button type="button" class="btn btn-default" id="btn-comment-utama">Comment</button>
        </div>
     <form action="" method="POST" id="comment-utama" style="display:none;" class="mt-2 ml-3">
         @csrf
         <input type="hidden" name="forum_id" value="{{$forums->id}}">
         <input type="hidden" name="parent_id" value="0">
        <textarea name="content"  class="form-control" rows="5" placeholder="comment"></textarea>
        <button type="submit" class="btn btn-primary mt-2">Send</button>
    </form>
        <hr>

        @foreach ($forums->comment()->where('parent_id',0)->orderBy('created_at' , 'desc')->get() as $comment)
        <div class="dropdown-item d-flex align-items-center" >
            <div class="mr-3">
                <div class="icon-circle bg-primary">
                    <img src="{{asset('wp-school/siswa/image/' . $comment->user->siswa->photo )}}" style="width:50px" alt="">
                </div>
            </div>
            <div>
             <div class="small text-gray-500">{{$comment->created_at->diffForHumans()}}</div>
                <span class="font-weight-bold">{{$comment->user->siswa->nama_depan}}</span>
                <span class="font-weight">{{$comment->content}}</span>
                <span class="text-primary" id="reply-comment">Reply</span>
               
                <form action="" style="display:none;padding-top:5px;" method="POST" id="comment-child">
                    @csrf
                    <input type="hidden" name="forum_id" value="{{$forums->id}}">
                    <input type="hidden" name="parent_id" value="{{$comment->id}}">
                    <input type="text" name="content" class="form-control">
                    <input type="submit" class="btn btn-primary btn-sm" value="Send"> 
                </form>
                <br/>
                @foreach($comment->childs as $childs)
                <div class="dropdown-item d-flex align-items-center" >
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <img src="{{asset('wp-school/siswa/image/' . $childs->user->siswa->photo )}}" style="width:50px" alt="">
                        </div>
                    </div>
                    <div>
                     <div class="small text-gray-500">{{$childs->created_at->diffForHumans()}}</div>
                        <span class="font-weight-bold">{{$childs->user->siswa->nama_depan}}</span>
                        <span class="font-weight">{{$childs->content}}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        @endforeach
     
    </div>

</div>

@endsection

@section('footer')
<script>
    $(document).ready(function(){
        $('#btn-comment-utama').click(function(){
            $('#comment-utama').show();
        })

        $('#reply-comment').click(function(){
            $('#comment-child').show()
        })
    })
</script>

@stop

