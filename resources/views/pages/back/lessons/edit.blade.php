@extends('layouts.back')
@section('content')

    <h4>Edit Episode baru</h4>
    <form action="{{ route('lessons.update',$lesson) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group mb-5">
            <label class="mb-1">Course</label>

            <select class="form-select" name="course_id" aria-label="Default select example">
                @foreach ($courses as $course)
                    <option selected="{{$lesson->course_id == $course->id ? 'selected' : ''}}" value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>

        </div>


        <div class="form-group mb-5">
            <label for="exampleInputEmail1">Nama Episode</label>
            <input type="text" value="{{$lesson->name}}" class="form-control" placeholder="title Episode" name="name">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Kode Video Youtube </label>
            <input type="text" value="{{$lesson->video}}"  id="youtube-code" class="form-control" placeholder="Ex :vwee7NRaj74 " name="video">
        </div>

        <div id="video-container" style="display: none;">
            <iframe id="video" width="560" height="315" src=""></iframe>
        </div>
        <button type="button" id="show-video" class="mb-5">Show Video</button>

        <div class="form-group mb-5">
            <label for="exampleInputEmail1">Durasi Episode</label>
            <input type="text"  value="{{$lesson->duration}}" class="form-control" placeholder="Durasi Episode,ex 20:00" name="duration">
        </div>
        <div class="form-group mb-3">
            <label class="mb-1">Tipe Episode</label>

            <select class="form-select" name="type" aria-label="Default select example">
                <option value="free" selected="{{$lesson->type == 'free' ? 'selected' : ''}}">Free</option>
                <option value="premium" selected="{{$lesson->type == 'premium' ? 'selected' : ''}}">Premium</option>
            </select>

        </div>
        <button type="submit" class="btn btn-primary">Update</button>

    </form>


@stop
