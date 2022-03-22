<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UpdateController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __invoke(UpdateRequest $request, Post $post) {

        $data = $request->validated();
        $post->update($data);
        return redirect()->route('admin.post.show', $post->id);
    }
}
