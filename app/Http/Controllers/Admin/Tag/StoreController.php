<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();

        Tag::firstOrCreate([
            // массив проверяет по какому правилу проверять уникальность
            'title' => $data['title']
        ]);
        return redirect()->route('admin.tag.index');
    }
}
