<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('css/admin/pages/index.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

<body>

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
            <a class="nav-link {{ request()->is('/admin/about') ? 'active' : '' }}" href="/admin/about">Մեր Մասին</a>
        </li>
    </ul>

    <table class="table">

        <tbody>
            <tr>
                <td>Home Page</td>
                <td>
                <a href="{{ route('pages.update') }}">
                <button type="button" class="btn btn-danger">Թարմացնել</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>