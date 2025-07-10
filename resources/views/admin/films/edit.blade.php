<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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

    <div class="container">
        <form class="p-4 rounded shadow bg-white formUpdateAdmin" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="film_id" value="{{ $film->id }}">

            <h4 class="mb-4"><i class="bi bi-pencil-square me-2"></i>Թարմացնել Ֆիլմը</h4>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="title" class="form-label">Վերնագիր</label>
                    <input type="text" id="title" name="titleUpdate" class="form-control" value="{{ old('titleupdate', $film->title) }}" required>
                </div>

                <div class="col-12 mb-3">
                    <label for="image" class="form-label">Նկար</label>
                    <input type="file" id="image" name="image" class="form-control" onchange="previewImage(event, '#mainImagePreview')">
                    <img id="mainImagePreview"
                        src="{{ $film->image ? asset($film->image) : '' }}"
                        class="img-fluid my-2 {{ $film->image ? '' : 'd-none' }}"
                        style="max-width: 35%;">
                </div>
                <div class="mb-3">
                    <label for="carouselImagePostUpdateId" class="form-label fw-bold">Պոստի Նկար</label>
                    <input type="file" id="carouselImagePostUpdateId" name="carouselImagePostUpdate" class="form-control" onchange="previewImage(event, '.imagePreviewUpdatePost')">
                    <div class="preview-containerPost">
                        <img class="imagePreviewUpdatePost"
                        src="{{  $film->post_image ? asset($film->post_image) : '' }}"
                        alt="Նկարի նախադիտում"
                            style="width:200px"
                            @if(!$film->post_image) class="d-none" @endif>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label for="director" class="form-label">Ռեժիսոր</label>
                    <input type="text" id="director" name="director" class="form-control" value="{{ old('director', $film->director) }}">
                </div>

                <div class="col-12 mb-3">
                    <label for="cast" class="form-label">Դերերում</label>
                    <input type="text" id="cast" name="cast" class="form-control" value="{{ old('cast', $film->cast) }}">
                </div>

                <div class="col-12 mb-3">
                    <label for="duration" class="form-label">Տևողություն</label>
                    <input type="text" id="duration" name="duration" class="form-control" value="{{ old('duration', $film->duration) }}">
                </div>

                <div class="col-12 mb-3">
                    <label for="age_limit" class="form-label">Տարիքային սահմանափակում</label>
                    <input type="text" id="age_limit" name="age_limit" class="form-control" value="{{ old('age_limit', $film->age) }}">
                </div>

                <div class="col-12 mb-3">
                    <label for="price" class="form-label">Գին</label>
                    <input type="number" id="price" name="price" class="form-control" min="0" step="0.01" value="{{ old('price', $film->price) }}">
                </div>

                <div class="col-12 mb-3">
                    <label for="start_time" class="form-label">Սկսելու ժամանակ</label>
                    <input type="datetime-local" id="start_time" name="start_time" class="form-control" value="{{ old('start_time', \Carbon\Carbon::parse($film->start_time)->format('Y-m-d\TH:i')) }}">
                </div>

                <div class="col-12 mb-3">
                    <label for="end_time" class="form-label">Ավարտի ժամանակ</label>
                    <input type="datetime-local" id="end_time" name="end_time" class="form-control" value="{{ old('end_time', \Carbon\Carbon::parse($film->end_time)->format('Y-m-d\TH:i')) }}">
                </div>

                @php
                $selectedGenres = old('genre', $film->genres->pluck('id')->toArray());
                @endphp

                @php
                $selectedGenres = old('genre', $film->genres->pluck('id')->toArray());
                @endphp

                <div class="col-12 mb-3">
                    <label for="genre" class="form-label">Ժանր</label>
                    <select id="genre" name="genre[]" class="form-select js-example-basic-multiple" multiple="multiple">
                        @foreach($genres as $genre)
                        <option value="{{ $genre->id }}" {{ in_array($genre->id, $selectedGenres) ? 'selected' : '' }}>
                            {{ $genre->genre }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 mb-3">
                    <label for="language" class="form-label">Լեզու</label>
                    <select id="language" name="language" class="form-select">
                        <option disabled {{ !isset($film->language_id) ? 'selected' : '' }}>Ընտրեք լեզուն</option>
                        @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ old('language', $film->language_id) == $country->id ? 'selected' : '' }}>
                            {{ $country->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 mb-3">
                    <label for="hall" class="form-label">Դահլիճ</label>
                    <select name="hall" id="hall" class="form-select">
                        <option disabled>Ընտրեք Դահլիճը</option>
                        @foreach($hall as $halls)
                        <option value="{{ $halls->id }}" {{ old('hall', $film->hall_id) == $halls->id ? 'selected' : '' }}>
                            {{ $halls->hall_name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 mb-3">
                    <label for="description" class="form-label">Նկարագրություն</label>
                    <textarea id="description" name="description" class="form-control" rows="3">{{ old('description', $film->description) }}</textarea>
                </div>

                <div class="col-12 mb-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" id="specialPrice" type="checkbox" name="special_price" value="1" {{ old('special_price', $film->special_price) ? 'checked' : '' }}>
                        <label class="form-check-label" for="specialPrice">Հատուկ Գին</label>
                    </div>
                </div>

                <div class="col-12 text-end mt-4">
                    <button type="submit" class="btn btn-primary ButtonUpdate">
                        <i class="bi bi-save2 me-1"></i>Պահպանել
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('js/admin/films/edit.js') }}"></script>