<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Careers | Quiroga Law Office'))</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo/logo.png') }}">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Join Quiroga Law Office - a recognized leader in immigration law, fighting courageously for immigrant families. Explore career opportunities with one of the fastest-growing law firms in the United States.">
    <meta name="keywords" content="Quiroga Law Office, immigration law careers, legal jobs, immigrant rights, law firm careers, Washington law jobs, Nevada law jobs, Mexico law jobs, legal positions, immigration attorney jobs">
    <meta name="author" content="Quiroga Law Office">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', config('app.name', 'Quiroga Law Office Careers'))">
    <meta property="og:description" content="Join Quiroga Law Office - a recognized leader in immigration law, fighting courageously for immigrant families. Explore career opportunities with one of the fastest-growing law firms in the United States.">
    <meta property="og:image" content="{{ asset('images/banners/banner-hero-1.webp') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', config('app.name', 'Quiroga Law Office Careers'))">
    <meta property="twitter:description" content="Join Quiroga Law Office - a recognized leader in immigration law, fighting courageously for immigrant families. Explore career opportunities with one of the fastest-growing law firms in the United States.">
    <meta property="twitter:image" content="{{ asset('images/banners/banner-hero-1.webp') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts - Quicksand -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    @vite(['resources/css/careers.css', 'resources/css/jobs.css'])
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="https://careers.quirogalawoffice.com/company/logo/QLO-oficial.png" alt="Logo" class="img-fluid" style="max-height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jobs">Jobs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    @include('components.footer')