@extends('layouts.back')
@section('content')

    <div>
        <a class="btn btn-primary" href="{{ route('course.create') }}">
            Create Course
        </a>
    </div>

    <table id="category" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>no</th>
                <th>images</th>
                <th>name</th>
                <th>actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td><img src="/images/{{$course->thumbnail}}" alt="Thumbnail " width="70" height="70" /></td>
                    <td>{{ $course->name }}</td>


                    <td class="d-flex gap-2">
  <a href="{{ route('course.edit', $course) }}" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
                            Update
                        </a>
                        <form action="{{ route('course.destroy', $course) }}" method="POST">
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
