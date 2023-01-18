@extends('layouts.back')
@section('content')

    <h4>Update mentor baru</h4>
    <form action="{{ route('mentor.update', $mentor) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group mb-3">
            <label>Nama mentor</label>
            <input type="text" class="form-control" value="{{$mentor->name}}" placeholder="nama mentor" name="name">
        </div>
        <div class="form-group mb-3">
            <label>Profession</label>
            <input type="text" class="form-control"  value="{{$mentor->profession}}" placeholder="Pekerjaan Mentors" name="profession">
        </div>
        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" class="form-control" value="{{$mentor->email}}" placeholder="Email" name="email">
        </div>
        <div class="form-group mb-3">
            <label>Photo</label>
            <input type="file" class="form-control" name="profile">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>

    </form>


@stop
