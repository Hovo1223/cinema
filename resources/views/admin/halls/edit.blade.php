<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <title>Դահլիճի թարմացում</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<body style='padding-top: 50px;'>

    <div class="parent" style='max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);'>
        <form class='hallsUpdateForm'>
            @csrf
            <div class="mb-3">
                <label for="genreid" class="form-label">Դահլիճի Անուն</label>
                <input type="text" value="{{$halls->hall_name}}" name="hallNameUpdate" id="genreid" class="form-control form-control-lg rounded-3" placeholder="Մուտքագրեք Նոր Դահլիճի Անուն">
            </div>
            <input type="hidden" name="hall_id" value="{{ $halls->id }}">

            <div class="mb-3">
                <label for="color_picker" class="form-label fw-bold">Գույն</label>
                <div class="input-group" style="max-width: 200px;">
                    <input type="text" value="{{$halls->color}}" id="color_picker" name="colorUpdate" 
                        class="jscolor form-control form-control-lg rounded-start-3" 
                        placeholder="Ընտրեք գույն">
                    <span class="input-group-text rounded-end-3">
                        🎨
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-rounded px-4">թարմացնել</button>
        </form>
    </div>

</body>
</html>
<script src="{{ asset('js/admin/halls/edit.js') }}"></script>
<script src="https://jscolor.com/releases/2.4.6/jscolor.js"></script>
