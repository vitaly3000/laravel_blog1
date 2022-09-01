@extends('layouts.admin.main')

@section('content-title')
     <h1 class="m-0">Редактирование: {{ $tag['title'] }}</h1>
@endsection

@section('content')
<div class="form-group">
    <form action="{{ route('admin.tag.update', $tag['id']) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="tag">Название категории</label>
        <input type="text" class="mb-2 form-control" name="title" value="{{ $tag['title'] }}" id="tag" placeholder="Введите категорию">
            @error('title')
            <div class="mb-2 text-danger">
                {{ $message }}
            </div>
            @enderror
        <button type="submit" class="btn btn-block btn-dark btn-lg">Редактировать</button>
    </form>
</div>

@endsection

