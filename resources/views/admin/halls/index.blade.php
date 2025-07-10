<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/admin/halls/index.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

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
  <h2 class="text-center fw-bold mb-4">Դահլիճների ցուցակ</h2>

  <div class="text-center mb-4">
        <a href="{{ asset('/admin/halls/new') }}">
            <button type="button" class="btn btn-dark buttonModalCreate btn-rounded shadow-sm px-4 py-2">
            Ստեղծել նոր դահլիճ
            </button>
        </a>
  </div>

  <table class="table table-bordered table-hover align-middle shadow-sm bg-white">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Դահլիճի Անուն</th>
        <th scope="col">Թարմացնել / Ջնջել</th>
      </tr>
    </thead>
    <tbody>
      @foreach($halls as $hall)
        <tr>
          <td>{{$hall->id}}</td>
          <td>{{$hall->hall_name}}</td>
          <td>
            <a href="{{ route('hall.update', ['id' => $hall->id]) }}">
                <button type="button" class="btn btn-primary btn-sm rounded-pill px-3 updateButton" 
                    data-id="{{$hall->id}}" data-hall="{{$hall->hall_name}}">
                Թարմացնել
                </button>
            </a>
            <form action="{{ route('hall.destroy', $hall->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm rounded-pill px-3" onclick="return confirm('Դու ուզում ես ջնջել՞')">Ջնջել</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>