<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layout.bootstrap')
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            margin-top: auto;
        }
        .article-card {
            transition: transform 0.2s;
        }
        .article-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    @include('layout.header')

    @yield('konten')

    @include('layout.footer')
</body>
</html>