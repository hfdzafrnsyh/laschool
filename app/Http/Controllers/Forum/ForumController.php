<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Comment;

class ForumController extends Controller
{
    //

    public function index(){
        $forum = Forum::orderBy('created_at' , 'desc')->paginate(2);
        return view('forum.index' , ['forum' => $forum]);
    }


    public function create(Request $request){
        $userId = auth()->user()->id;
        $request->request->add(['user_id' => $userId]);
        $forum = Forum::create($request->all());
       
        return redirect('/forum')->with('success' , 'Add Forum Berhasil');
    }


    public function view($forum) {
        $forums = Forum::find($forum);
        return view('forum.view' , ['forums' => $forums]);
    }

    public function postcomment(Request $request){
        $userId = auth()->user()->id;
        $request->request->add(['user_id' => $userId]);
        $comment = Comment::create($request->all());

        return redirect()->back()->with('success' , 'Add Comment Successfully');
    }
}
