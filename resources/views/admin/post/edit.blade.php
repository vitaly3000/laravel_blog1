@extends('layouts.admin.main')

@section('content-title')
     <h1 class="m-0">Редактирование: {{ $post['title'] }}</h1>
@endsection

@section('content')
<div class="form-group">
    <form action="{{ route('admin.post.update', $post['id']) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="post">Название поста</label>
        <input type="text" class="mb-2 form-control" name="title" value="{{ $post['title'] }}" id="post" placeholder="Введите заголовок поста">
            @error('title')
            <div class="mb-2 text-danger">
                {{ $message }}
            </div>
            @enderror
        <button type="submit" class="btn btn-block btn-dark btn-lg">Редактировать</button>
    </form>
</div>

@endsection

