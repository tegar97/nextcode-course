@extends('layouts.back')
@section('content')

    <h4>Edit Kursus</h4>
    <form action="{{ route('course.update', $course) }}" method="POST" enctype="multipart/form-data">
       @method('PUT')
        @csrf
        <div class="form-group mb-3">
            <label for="exampleInputEmail1" class="mb-1"> Nama Kursus</label>
            <input type="text" value={{$course->name}} class="form-control" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)"
                placeholder="ex : laravel dari dasar sampai mahir" name="name">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1" class="mb-1">Slug</label>
            <input type="text" class="form-control"   value={{$course->slug}} name="slug" id="slug-text" >
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1" class="mb-1">thumbnail</label>
            <input type="file" class="form-control" name="thumbnail">
        </div>

        <div class="form-group mb-3">
            <label for="exampleInputEmail1" class="mb-1">Price</label>
            <input type="text" class="form-control" id="uang" name="price-visual"  value={{$course->price}}>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1" class="mb-1">Level Kursus</label>
            <select class="form-select" name="level" aria-label="Default select example">
                <option selected>Level</option>
                <option value="all-level" selected="{{$course->level == 'all-level' ? 'selected' :''}}">All Level</option>
                <option value="beginner" selected="{{$course->level == 'beginner' ? 'selected' :''}}">beginner</option>
                <option value="intermediate" selected="{{$course->level == 'intermediate' ? 'selected' :''}}">intermediate</option>
                <option value="advance" selected="{{$course->level == 'advance' ? 'selected' :''}}">advance</option>

            </select>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1" class="mb-1">Description</label>
            <textarea type="text"   class="form-control" id="description" name="description">{{$course->description}}</textarea>
        </div>

        <div class="form-group mb-3">
            <label class="mb-1">Mentors</label>

            <select class="form-select" name="mentors_id" aria-label="Default select example">
                @foreach ($mentors as $mentor)
                    <option value="{{ $mentor->id }}">{{ $mentor->name }}</option>
                @endforeach
            </select>

        </div>



        {{-- <button type="submit" class="btn btn-warning">Draft</button> --}}
        <button type="submit" class="btn btn-primary">Simpan</button>

    </form>


@stop
