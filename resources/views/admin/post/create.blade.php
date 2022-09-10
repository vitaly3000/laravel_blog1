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
        <div class="form-group">
            <label for="preview-image">Превью поста</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="preview-image" name="preview_image">
                    <label class="custom-file-label" for="preview-image">Выберите файл</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Загрузить</span>
                </div>
            </div>
            @error('preview_image')
            <div class="mb-2 text-danger">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="banner-image">баннер поста</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="banner-image" name="banner_image">
                    <label class="custom-file-label" for="banner-image">Выберите файл</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Загрузить</span>
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
