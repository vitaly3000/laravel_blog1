@extends('layouts.admin.main')

@section('content-title')
    <h1 class="m-0">Создание постов</h1>
@endsection

@section('content')
    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="post">Название поста</label>
            <input type="text" class="mb-2 form-control" name="title" value="{{ old('title') }}" id="post"
                placeholder="Введите категорию">
            @error('title')
                <div class="mb-2 text-danger">

                    {{ $message }}
                </div>
            @enderror
            {{ old('title') }}
        </div>
        <div class="form-group">
            @csrf
            <label for="post">Контент поста</label>
            <textarea id="post-content" name="content">
                {{ old('content') }}
            </textarea>
            @error('content')
                <div class="mb-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group w-50">
            <label for="category-select">Выберите категорию</label>
            <select class="form-control select2" id="category-select" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}" {{ old('category_id') == $category['id'] ? 'selected' : '' }}>{{ $category['title'] }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="mb-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
          </div>
          <div class="form-group w-50">
            <label>Выберите теги</label>
            <select class="select2" multiple="multiple" name="tag_ids[]" data-placeholder="Выберите теги" style="width: 100%;">
              @foreach ($tags as $tag)
                 <option value="{{ $tag['id'] }}" {{ is_array( old('tag_ids') ) && in_array( $tag['id'], old('tag_ids') ) ? 'selected' : '' }}>{{ $tag ['title'] }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group w-50">
            <label for="preview-image">Превью поста</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="preview-image" name="preview_image">
                    <label class="custom-file-label" for="preview-image">Выберите файл</label>
                </div>
            </div>
            @error('preview_image')
            <div class="mb-2 text-danger">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-group w-50">
            <label for="banner-image">баннер поста</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="banner-image" name="banner_image">
                    <label class="custom-file-label" for="banner-image">Выберите файл</label>
                </div>
            </div>
            @error('banner_image')
                <div class="mb-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-block btn-dark btn-lg">Создать</button>
    </form>
@endsection
