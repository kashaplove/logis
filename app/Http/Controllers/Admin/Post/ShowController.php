<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ShowController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __invoke(Post $post) {
        $posts = Post::all();
        $messages = Message::all();
        $name = $post->title;
        return view('admin.post.show', compact('messages', 'posts', 'name', 'post'));
    }
}
