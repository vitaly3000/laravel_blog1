@extends('layouts.admin.main')

@section('content-title')
     <h1 class="m-0">Посты</h1>
@endsection

@section('content')
<div class="categories-selector">

<a href="{{ route('admin.post.create') }}" class="mb-3 btn btn-block btn-dark btn-lg">Создать</a>

<div class="card">
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Действие</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
             <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['title'] }}</td>
                <td class="categories-selector__table-icons">
                    <a class="categories-selector__table-icon" href="{{ route('admin.post.show', $post['id']) }}"><i class="fa fa-eye"></i></a>
                    <a class="categories-selector__table-icon" href="{{ route('admin.post.edit', $post['id']) }}"><i class="fa fa-pencil-alt"></i></a>
                    <form action="{{ route('admin.post.delete', $post['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="categories-selector__table-icon text-danger" type="submit">
                            <i class="fa fa-trash-alt" role="button">
                            </i>
                        </button>
                    </form>
                </td>
             </tr>
            @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

</div>
@endsection

