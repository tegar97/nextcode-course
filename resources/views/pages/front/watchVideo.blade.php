@extends('layouts.front-nonavbar')
@section('content')

<div id="content">
        <div class="video-container">

                @if($lesson->type == 'premium')

                    <h1>Video khusus premium</h1>

                @else

                        <iframe src="https://www.youtube.com/embed/{{$lesson->video}}" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

                @endif


        </div>

        <div class="content-information">

            <h1>{{ $lesson->name }}</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>

    </div>
    <div id="sidebar">
        <!-- <div class="icon-row">
        <i class="fa fa-home"></i>
        <i class="fa fa-tv"></i>
        <i class="fa fa-book"></i>
      </div> -->
        <h2>{{ $lesson->name }}</h2>
        <div class="meta-data">
            {{ count($course->lessons) }} episodes | {{ $course->name }}
        </div>
        <h3 class="mt-5">Episodes</h3>
        <ul>

                @foreach ($course->lessons as $listLesson)
                <a href="/class/{{$course->slug}}/{{$listLesson->id}}">
                         <li class="{{ $listLesson->id == $lesson->id ? 'now-episode' : ''}}">
                    <div class="num">{{$loop->index+1}}</div>
                    <div class="title">{{$listLesson->name}}1</div>
                    <div class="duration">10:30</div>
                    <div class="icon">
                        <i  class="{{ $listLesson->type == 'premium' ? 'fas fa-lock' : 'fas fa-unlock'}}"></i>
                    </div>
                </li>
                </a>
                @endforeach


        </ul>
    </div>
