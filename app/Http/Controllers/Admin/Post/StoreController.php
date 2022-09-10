<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();

        if(isset($data['preview_image'])) {
            $data['preview_image'] = Storage::put('/images', $data['preview_image']);
        }
        if(isset($data['banner_image'])) {
            $data['banner_image'] = Storage::put('/images', $data['banner_image']);
        }

        Post::firstOrCreate([
            // массив проверяет по какому правилу проверять уникальность
            'title' => $data['title'],
            'content' => $data['content'],
            'preview_image' => $data['preview_image'] ?? null,
            'banner_image' => $data['banner_image'] ?? null,
        ]);
        return redirect()->route('admin.post.index');
    }
}
