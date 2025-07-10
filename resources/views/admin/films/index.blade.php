<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('css/admin/films/index.css') }}" rel="stylesheet">
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


<div class="allparent">
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
            <a class="nav-link {{ request()->is('/admin/about') ? 'active' : '' }}" href="/admin/about">Մեր Մասին</a>
            </li>
        </ul>
    </div>

    <div class="container" style='padding-top:20px'>

        <div class="buttonsParent">
        <a href="{{ route('films.create') }}"><button type="button" class="btn btn-dark createCarousel">ստեղծել</button></a>
        </div>  

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Անուն</th>
                    <th scope="col">Նկար</th>
                    <th scope="col">Ռեժիսոր</th>
                    <th scope="col">Ժանր</th>
                    <th scope="col">Լեզու</th>
                    <th scope="col">Թարմացնել/Ջնջել</th>
                </tr>
            </thead>
            <tbody>
                @foreach($slides as $slide)
                    <tr>
                        <td>{{$slide->id}}</td>
                        <td>{{$slide->title}}</td>
                        <td>
                        <img src="{{ asset($slide->image) }}" alt="Slide Image" style="width:100px; height:auto;">
                        </td>
                        <td>{{$slide->director}}</td>
                        <td>
                            @foreach($slide->genres as $genre)
                                {{ $genre->genre }},

                            @endforeach
                        </td>
                            
                        <td>
                            @foreach ($countries as $country)
                                @if ($country->id == $slide->language_id)
                                    {{ $country->name }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                           <a href="{{ route('films.update', ['id' => $slide->id])  }}"> <button 
                            class='btn btn-danger'
                            >Թարմացնել
                        </button>
                        </a>
                            <form action="{{ route('films.destroy', $slide->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Ուզում ես ջնջես՞')">Ջնջել</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
           
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
       

</body>
</html>
