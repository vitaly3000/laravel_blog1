@extends('layouts.admin.main')

@section('content-title')
     <h1 class="m-0">Создание тегов</h1>
@endsection

@section('content')
<div class="form-group">
    <form action="{{ route('admin.tag.store') }}" method="POST">
        @csrf
        <label for="tag">Название тега</label>
        <input type="text" class="mb-2 form-control" name="title" value="{{ old('title') }}" id="tag" placeholder="Введите тег">
            @error('title')
            <div class="mb-2 text-danger">
                {{ $message }}
            </div>
            @enderror
        <button type="submit" class="btn btn-block btn-dark btn-lg">Создать</button>
    </form>
</div>

@endsection

