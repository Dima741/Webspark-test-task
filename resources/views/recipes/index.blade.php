@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('recipes.create') }}" class="btn btn-primary">Создать рецепт</a>
        <h2>Мои рецепты</h2>
        <table class="table table-bordered" id="laravel_datatable">
            <thead>
            <tr>
                <th>Рецепт</th>
                <th>Ингридиенты</th>
                <th>Действия</th>
            </tr>
            </thead>
        </table>
    </div>

    <script>
        $(document).ready( function () {
            $('#laravel_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('recipes.index') }}",
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'description', name: 'description'},
                    { data: 'action', name: 'action'},
                ]
            });
        });
    </script>
@endsection


