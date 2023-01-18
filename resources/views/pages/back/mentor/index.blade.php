@extends('layouts.back')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div>
        <a class="btn btn-primary" href="{{ route('mentor.create') }}">
            Create new mentor
        </a>
    </div>

    <table id="category" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>no</th>
                <th>photo</th>
                <th>name</th>
                <th>profession</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mentors as $mentor)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td><img src="/images/{{$mentor->profile}}" alt="photo {{$mentor->name}}" width="70" height="70" style="border-radius: 100%;object-fit: cover"/></td>
                    <td>{{ $mentor->name }}</td>
                    <td>{{ $mentor->profession }}</td>


                    <td class="d-flex gap-2">
                        <a href="{{ route('mentor.edit', $mentor) }}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
                            Update
                        </a>
                        <form action="{{ route('mentor.destroy', $mentor) }}" method="POST">
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
