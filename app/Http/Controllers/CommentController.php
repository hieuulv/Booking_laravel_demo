<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Http\Requests\CommentLoginFormRequest;
use App\Models\Comment;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
    public function index_comment()
    {
        $comments = Comment::with([
            'room' => function ($query) {
                $query->select(['id', 'name']);
            },
            'user' => function ($query) {
                $query->select(['id', 'name', 'email']);
            }])
            ->get()->toArray();

        return view('admin.comment.index_comment', compact('comments'));

    }

    public function comment_not_logged(CommentFormRequest $request)
    {
        $rooms = Room::find($request->get('room_id'));
        if (empty($rooms)) {
            abort(404);
        }
        $rooms_id = $rooms['id'];
        $comments = new Comment();
        $comments->name = $request->get('name');
        $comments->email = $request->get('email');
        $comments->content = $request->get('content');
        $comments->room_id = $rooms['id'];
        $comments->room_url = '/rooms/detail/' . $rooms['id'];
        $comments->save();

        return redirect()->route('detail', compact('rooms_id'));
    }

    public function comment_login(CommentLoginFormRequest $request)
    {
        $rooms = Room::find($request->get('room_id'));
        if (empty($rooms)) {
            abort(404);
        }
        $rooms_id = $rooms['id'];
        $comments = new Comment();
        $comments->content = $request->get('content');
        $comments->room_id = $rooms['id'];
        $comments->room_url = '/rooms/detail/' . $rooms['id'];
        $comments->user_id = (Auth::user()->id);
        $comments->save();

        return redirect()->route('detail', compact('rooms_id'));

    }

    public function remove($id)
    {
        $comments = Comment::destroy($id);
        if (empty($comments)) {
            abort(404);
        }

        return redirect()->route('index_comment', compact('comments'));
    }
}
