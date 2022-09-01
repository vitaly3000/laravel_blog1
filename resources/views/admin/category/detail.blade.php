@extends('layouts.admin.main')

@section('content-title')
   <div class="category-detail__top">
        <h1 class="m-0">{{ $category['title'] }}</h1>
        <a class="categories-selector__table-icon" href="{{ route('admin.category.edit', $category['id']) }}">
        <i class="fa fa-pencil-alt"></i>
        </a>
   </div>
@endsection
@section('content')

<div class="card">
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Название</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $category['id'] }}</td>
                <td>{{ $category['title'] }}</td>
             </tr>
        </tbody>
      </table>
    </div>

    <!-- /.card-body -->
  </div>
  <form action="{{ route('admin.category.delete', $category['id']) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">
        Delete
    </button>
  </form>
@endsection

