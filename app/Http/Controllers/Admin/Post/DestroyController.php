<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Message;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DestroyController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __invoke(Post $post) {

        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
