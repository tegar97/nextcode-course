@extends('layouts.back')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div>
        <a class="btn btn-primary" href="{{ route('category.create') }}">
            Create kategori
        </a>
    </div>

    <table id="category" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>no</th>
                <th>name</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $category->name }}</td>


                    <td class="d-flex gap-2">
                        <a href="{{ route('category.edit', $category) }}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
                            Update
                        </a>
                        <form action="{{ route('category.destroy', $category) }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </td>

                </tr>
            @endforeach


        </tbody>

    </table>




@stop
