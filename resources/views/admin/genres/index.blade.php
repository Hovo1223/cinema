<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/admin/genre/index.css') }}" rel="stylesheet">

</head>
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

<div class="container py-5">
  <h2 class="text-center fw-bold mb-4">Ժանրերի Ցանկ</h2>

  <div class="text-center mb-4">
    <a href="{{ asset('/admin/genres/new') }}">
        <button type="button" class="btn btn-dark buttonModalCreate btn-rounded shadow-sm px-4 py-2">
            Ստեղծել Ժանր
        </button>
    </a>
  </div>

  <table class="table table-bordered table-hover align-middle shadow-sm bg-white">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Ժանրի անուն</th>
        <th scope="col">Թարմացնել / Ջնջել</th>
      </tr>
    </thead>
    <tbody>
      @foreach($genres as $genre)
        <tr>
          <td>{{$genre->id}}</td>
          <td>{{$genre->genre}}</td>
          <td>
          <a href="{{ route('genre.update', ['id' => $genre->id]) }}">
              <button type="button" class="btn btn-primary btn-sm rounded-pill px-3 updateButton" data-id="{{ $genre->id }}">
                  Թարմացնել
              </button>
          </a>


            <form action="{{ route('genre.destroy', $genre->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm rounded-pill px-3" onclick="return confirm('Ջնջե՞լ նշված տարրը')">Ջնջել</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>