@extends('layouts.back')
@section('content')

    <div>
        <a class="btn btn-primary" href="{{ route('lessons.create') }}">
            Create Episode
        </a>
    </div>

    <table id="category" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>no</th>
                <th>name</th>
                <th>type</th>
                <th>Course</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($lessons as $lesson)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $lesson->name }}</td>
                    <td>{{ $lesson->type }}</td>
                    <td>{{ $lesson->course->name }}</td>


                    <td class="d-flex gap-2">
                        <a href="{{ route('lessons.edit', $lesson) }}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
                            Update
                        </a>
                        <form action="{{ route('lessons.destroy', $lesson) }}" method="POST">
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
