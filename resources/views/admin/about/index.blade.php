<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('css/admin/about/index.css') }}" rel="stylesheet">
</head>
<body>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  

@auth
<li class="nav-item">
    <a href="{{ route('about.new') }}" class="btn btn-primary aboutCreate">Ստեղծել</a>

    <form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-link text-decoration-none d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
            </svg>
            <span class="ms-2">Ելք</span>
        </button>
    </form>
</li>

@endauth
<div class="anvLink">
        <ul class="nav flex-column sidebar">
            <li class="nav-item">
            <a class="nav-link {{ request()->is('/admin') ? 'active' : '' }}" href="/admin">Գլխավոր Էջ</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/films') ? 'active' : '' }}" href="/admin/films">Ֆիլմեր</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/genres*') ? 'active' : '' }}" href="/admin/genres">Ժանր</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/halls*') ? 'active' : '' }}" href="/admin/halls">Դահլիճ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/promos*') ? 'active' : '' }}" href="/admin/promos">Պրոմո</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/pages*') ? 'active' : '' }}" href="/admin/pages">Էջեր</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/about') ? 'active' : '' }}" href="/admin/about">Մեր Մասին</a>
            </li>
        </ul>
    </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>