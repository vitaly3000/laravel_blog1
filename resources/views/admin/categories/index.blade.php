@extends('layouts.admin.main')

@section('content-title')
     <h1 class="m-0">Категории</h1>
@endsection

@section('content')
<div class="categories-selector">

<a href="{{ route('admin.category.create') }}" class="mb-3 btn btn-block btn-dark btn-lg">Создать</a>

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
            @foreach ($categories as $category)
             <tr>
                <td>{{ $category['id'] }}</td>
                <td>{{ $category['title'] }}</td>
                <td class="categories-selector__table-icons">
                    <a class="categories-selector__table-icon" href="{{ route('admin.category.show', $category['id']) }}"><i class="fa fa-eye"></i></a>
                    <a class="categories-selector__table-icon" href="{{ route('admin.category.edit', $category['id']) }}"><i class="fa fa-pencil-alt"></i></a>
                    <form action="{{ route('admin.category.delete', $category['id']) }}" method="POST">
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

