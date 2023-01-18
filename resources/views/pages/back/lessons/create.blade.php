@extends('layouts.back')
@section('content')

    <h4>Buat Episode baru</h4>
    <form action="{{ route('lessons.store') }}" method="POST">
        @csrf
        <div class="form-group mb-5">
            <label class="mb-1">Course</label>

            <select class="form-select" name="course_id" aria-label="Default select example">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>

        </div>


        <div class="form-group mb-5">
            <label for="exampleInputEmail1">Nama Episode</label>
            <input type="text" class="form-control" placeholder="title Episode" name="name">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Kode Video Youtube </label>
            <input type="text" id="youtube-code" class="form-control" placeholder="Ex :vwee7NRaj74 " name="video">
        </div>

        <div id="video-container" style="display: none;">
            <iframe id="video" width="560" height="315" src=""></iframe>
        </div>
        <button type="button" id="show-video" class="mb-5">Show Video</button>

        <div class="form-group mb-5">
            <label for="exampleInputEmail1">Durasi Episode</label>
            <input type="text" class="form-control" placeholder="Durasi Episode,ex 20:00" name="duration">
        </div>
        <div class="form-group mb-3">
            <label class="mb-1">Tipe Episode</label>

            <select class="form-select" name="type" aria-label="Default select example">
                <option value="free">Free</option>
                <option value="premium">Premium</option>
            </select>

        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>

    </form>


@stop
