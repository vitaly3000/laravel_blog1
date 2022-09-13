<?php

namespace App\Service;

use Exception;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            if (isset($data['banner_image'])) {
                $data['banner_image'] = Storage::disk('public')->put('/images', $data['banner_image']);
            }


            if (isset($data['tag_ids'])) {
                $tag_ids = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            $post = Post::firstOrCreate($data);

            if (isset($data['tag_ids'])) {

                $post->tags()->attach($tag_ids);
            }
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            dd($exception);
            abort(500);
        }
    }

    public function update($data, $post)
    {
        try {
            DB::beginTransaction();
            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }

            if (isset($data['banner_image'])) {
                $data['banner_image'] = Storage::disk('public')->put('/images', $data['banner_image']);
            }

            if (isset($data['tag_ids'])) {
                $tag_ids = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            $post->update($data);
            if (isset($data['tag_ids'])) {
                $post->tags()->sync($tag_ids);
            }

            DB::commit();
        } catch (\Exception) {
            DB::rollBack();
            abort(500);
        }

        return $post;
    }
}
