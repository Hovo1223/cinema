<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin/promo/index.css') }}" rel="stylesheet">
    <link
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="allparent">
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
        <h2 class="text-center fw-bold mb-4">Պրոմո ցուցակ</h2>

        <div class="text-center mb-4">
            <a href="{{ asset('/admin/promos/new') }}">
                <button type="button" class="btn btn-dark buttonModalCreate btn-rounded shadow-sm px-4 py-2">
                    Ստեղծել
                </button>
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle shadow-sm bg-white">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Անուն</th>
                        <th scope="col">Նկար</th>
                        <th scope="col">Թարմացնել / Ջնջել</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($promos as $promo)
                        <tr>
                            <td>{{ $promo->id }}</td>
                            <td>{{ $promo->title }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $promo->image) }}" alt="Promo Image" style="max-width: 100px; max-height: 100px;">
                            </td>

                            <td>
                                <a href="{{ asset('/admin/promos/update/' . $promo->id) }}">
                                    <button type="button" class="btn btn-primary btn-sm rounded-pill px-3 updateButtonPromo">
                                        Թարմացնել
                                    </button>
                                </a>


                                <form action="{{ route('promo.destroy', $promo->id) }}" method="POST" class="d-inline">
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
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
