<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('page.title', config('app.name')) </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css">
    @stack('css')

    <style>
        .container { max-width: 720px; }
        .required:after { content: '*'; color: red; }
    </style>

</head>
<body>

    <div class="d-flex flex-column justify-content-between min-vh-100">
        @include('includes.alert')
        @include('includes.danger-alert')
        @include('includes.header')


        <main class="flex-grow-1 py-3">

            @yield('content')

        </main>


        @include('includes.footer')
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
@stack('js')
</body>
</html>
