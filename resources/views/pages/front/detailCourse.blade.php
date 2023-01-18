@extends('layouts.front')
@section('content')
@php
    use Carbon\Carbon;
@endphp
    <div class="course-detail">
        <div class="card-detail-course">
            <img src="/images/{{ $course->thumbnail }}" alt="course" />
            <h1 class="course-name-detail">
                {{ $course->name }}
            </h1>
            <span class="list-video-information">{{ count($course->lessons) }} episode, terakhir diperbarui tanggal
                              {{ Carbon::parse($course->updated_at)->locale(app()->getLocale())->isoFormat('LL') }}</span>
</span>
            <div>
                <a href="/class/{{ $course->slug }}/{{$course->lessons[0]->id}}" class="btn btn-primary">Mulai</a>
                <button class="btn btn-secondary">Tonton nanti</button>
            </div>
            <p class="course-detail-description">
                {{ $course->description }}
            </p>
        </div>
        <div class="list-content">
            <h2 class="list-content-title">Daftar episode</h2>
            <h3 class="list-content-subtitle">
                {{ count($course->lessons) }} episode siap untuk dipelajari, jadi bersiaplah untuk mulai
                sekarang.
            </h3>
            <ul class="episode-list">
                @foreach ($course->lessons as $lesson)
                    <li class="episode">
                        <div class="episode-info">
                            <span class="grey">{{ $loop->index + 1 }}</span>
                            <span>{{ $lesson->name }}</span>

                        </div>
                        <div class="episode-status">

                            <span class="grey">{{ $lesson->duration }}</span>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
@stop
