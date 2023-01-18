@extends('layouts.front')
@section('content')

<div class="hero">
     <div class="hero-text-group">
         <h4 class="tag">#FutureCode</h4>
         <h1 class="hero-text">Your Next Future Code</h1>
         <p class="hero-subtitle">
             Belajar sesuai arahan yang telah disusun baik<br>
             oleh expert & komunitas yang supportive
         </p>
         <div class="flex mt-5">
             <button class="btn btn-primary">Mulai</button>
         </div>
     </div>
     <div class="hero-img">
         <img src="https://buildwithangga.com/themes/front/images/landing-page/hero/belajar-design-code-untuk-bangun-karir-impian-buildwith-angga.webp" width="100" />
     </div>
 </div>
    <div class="feature-one">
        <header class="feature-title">
            <p class="tag">Start Learning Now</p>
            <h2 class="hero-primary">Pelajari Skills Baru <br>
                Sesuai Dengan Minatmu</h2>
        </header>

        <div class="course">
            @foreach ($courses as $course)
                <a href="/class/{{ $course->slug }}">
                    <div class="course-card">
                        <div class="course-img">
                            <img src="/images/{{ $course->thumbnail }}" alt="course" />
                        </div>
                        <div>
                            <h3 class="course-name">{{ $course->name }}</h3>
                            <div>
                                <ul class="list-video-information">
                                    <li>{{ count($course->lessons) }} episode </li>
                                    {{-- <li>115 mins</li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>

@stop
