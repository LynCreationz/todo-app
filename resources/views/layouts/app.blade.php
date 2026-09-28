<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Projects') · {{ config('app.name', 'Project List') }}</title>
    <style>
        :root{font-family:system-ui,-apple-system,"Segoe UI",sans-serif;color:#1f2937;background:#f3f4f6}*{box-sizing:border-box}body{margin:0}header{background:#fff;border-bottom:1px solid #e5e7eb;padding:1rem max(1.25rem,calc((100% - 900px)/2));display:flex;justify-content:space-between;align-items:center}header a,.link{color:#2563eb;text-decoration:none}main{max-width:900px;margin:2rem auto;padding:0 1.25rem}.card{background:#fff;padding:1.5rem;border:1px solid #e5e7eb;border-radius:12px;margin:1rem 0}.row{display:flex;gap:1rem;align-items:center;justify-content:space-between}.actions{display:flex;gap:.75rem;align-items:center}label{display:block;font-weight:600;margin:.8rem 0 .3rem}input{width:100%;padding:.7rem;border:1px solid #d1d5db;border-radius:7px;font:inherit}button,.button{display:inline-block;background:#2563eb;color:white;padding:.65rem 1rem;border:0;border-radius:7px;font:inherit;cursor:pointer;text-decoration:none}.danger{background:#b91c1c}.muted{color:#6b7280}.error{color:#b91c1c}.notice{color:#166534;background:#dcfce7;padding:.75rem;border-radius:7px}.inline{display:inline}h1{margin-top:0}
    </style>
</head>
<body>
<header>
    <a href="{{ auth()->check() ? route('projects.index') : route('login') }}"><strong>Project List</strong></a>
    <nav class="actions">
        @auth
            <span class="muted">{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit">Log out</button></form>
        @else
            <a href="{{ route('login') }}">Log in</a><a href="{{ route('register') }}">Register</a>
        @endauth
    </nav>
</header>
<main>
    @if (session('status'))<p class="notice">{{ session('status') }}</p>@endif
    @if ($errors->any())<div class="card error"><strong>Please check the form:</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
    @yield('content')
</main>
</body>
</html>
