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
                    <img src="/assets/images/1.png" width="100"
                        height="100" class="d-inline-block align-top" alt="logo buildwithangga" />
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
            <img src="https://buildwithangga.com/themes/front/images/landing-page/hero/belajar-design-code-untuk-bangun-karir-impian-buildwith-angga.webp"
                width="100" />
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
</body>

</html>
