@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Nextcode</title>
</head>

<body>
    <div class="wrapper">
        <div class="nav">
            <div class="nav-left">
                <div class="nav__logo">
                    <img src="https://buildwithangga.com/themes/front/images/logo_bwa_new.svg" width="50"
                        height="50" class="d-inline-block align-top" alt="logo buildwithangga" />
                </div>
                <div class="nav__links">
                    <a href="#" class="active">Home</a>
                    <a href="#">Flash sale</a>
                    <a href="#">Job</a>
                    <a href="#">Blog</a>
                    <a href="#">Our App</a>
                </div>
            </div>

            <div>
                <a href="#" class="nav__cta btn btn-secondary">Masuk/Daftar</a>
            </div>
        </div>
    </div>
    <!-- <div class="menu-url">
        <a class="active-url">NextCode</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 inline active-url" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
     <a class="active-url">course</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 inline active-url" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
         <a>Membangun shortener url dan statisk</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
    </div> -->

    <div class="course-detail">
        <div class="card-detail-course">
            <img src="{{ $course->thumbnail }}" alt="course" />
            <h1 class="course-name-detail">
                {{ $course->name }}
            </h1>
            <span class="list-video-information">{{ count($course->lessons) }} episode, terakhir diperbarui tanggal
                {{ Carbon::parse($course->updated_at)->locale(app()->getLocale())->isoFormat('LL') }}</span>
            <div>
                <a href="/class/{{$course->slug}}/1"  class="btn btn-primary">Mulai</a>
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
                            <span class="grey">{{$loop->index+1}}</span>
                            <span>{{$lesson->name}}</span>

                        </div>
                        <div class="episode-status">

                            <span class="grey">20:10</span>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</body>

</html>
