<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DeleteController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function destroy($id) {
        $message = Message::find($id);
        $message->delete();
        return redirect()->route('admin.message.index');
    }
}
