@extends('layouts.admin.main')

@section('content-title')
     <h1 class="m-0">Создание категорий</h1>
@endsection

@section('content')
<div class="form-group">
    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <label for="category">Название категории</label>
        <input type="text" class="mb-2 form-control" name="title" value="{{ old('title') }}" id="category" placeholder="Введите категорию">
            @error('title')
            <div class="mb-2 text-danger">
                {{ $message }}
            </div>
            @enderror
        <button type="submit" class="btn btn-block btn-dark btn-lg">Создать</button>
    </form>
</div>

@endsection

