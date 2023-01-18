<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.back.head')
</head>

<body>
    @include('includes.back.logo')
    <hr />
    <nav class="menu flex-fill">
        @include('includes.back.sidebar')
    </nav>
    <footer>
        @include('includes.back.footer')
    </footer>
    </aside>
    <main class="content flex-fill">
        @include('includes.back.header')
        @yield('content')
    </main>

    @include('includes.back.script')
</body>

</html>
