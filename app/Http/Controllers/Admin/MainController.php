<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index() {
        $posts = Post::all();
        $messages = Message::all();
        $name = 'Dashboard';
        return view('admin.main', compact('posts', 'messages', 'name'));
    }
}
