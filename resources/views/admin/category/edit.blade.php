@extends('layouts.admin.main')

@section('content-title')
     <h1 class="m-0">Редактирование: {{ $category['title'] }}</h1>
@endsection

@section('content')
<div class="form-group">
    <form action="{{ route('admin.category.update', $category['id']) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="category">Название категории</label>
        <input type="text" class="mb-2 form-control" name="title" value="{{ $category['title'] }}" id="category" placeholder="Введите категорию">
            @error('title')
            <div class="mb-2 text-danger">
                {{ $message }}
            </div>
            @enderror
        <button type="submit" class="btn btn-block btn-dark btn-lg">Редактировать</button>
    </form>
</div>

@endsection

