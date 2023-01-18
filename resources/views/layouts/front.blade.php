
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')

</head>

<body>
    @include('includes.header')
    <main>
        @yield('content')
    </main>
    @include('includes.footer')
</body>

</html>
