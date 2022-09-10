@extends('layouts.admin.main')

@section('content-title')
   <div class="category-detail__top">
        <h1 class="m-0">{{ $post['title'] }}</h1>
        <a class="categories-selector__table-icon" href="{{ route('admin.post.edit', $post['id']) }}">
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
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['title'] }}</td>
             </tr>
        </tbody>
      </table>
    </div>

    <!-- /.card-body -->
  </div>
  <form action="{{ route('admin.post.delete', $post['id']) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">
        Delete
    </button>
  </form>
@endsection

