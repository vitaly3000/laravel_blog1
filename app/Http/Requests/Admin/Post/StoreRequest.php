<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|image',
            'banner_image' => 'nullable|image',
            // exists штука чтобы проверить если ли такое значение в таблице categories в колонке id
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            // валидация внутрених элементов массив
            'tag_ids.*' => 'nullable|integer|exists:tags,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле обязательно для заполнения',
            'content.required' => 'Поле обязательно для заполнения',
            'category_id.required' => 'Поле обязательно для заполнения',
            'category_id.exists' => 'Id категории отсутствует в базе',
            'tag_ids.*.exists' => 'Id тега отсутствует в базе',
            'title.required' => 'Поле обязательно для заполнения',
            'preview_image.image' => 'Нужна картинка',
            'banner_image.image' => 'Нужна картинка',
        ];
    }
}
