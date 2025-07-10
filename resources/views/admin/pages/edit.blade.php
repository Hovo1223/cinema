<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Թարմացնել Ֆիլմի Տվյալները</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin/pages/index.css') }}" rel="stylesheet">

</head>

<body>

    <div class="parentPagesUpdate">
        <div class="mb-4">
            <form action="{{ route('home.index') }}" method="POST">
                @csrf
                <h2>Ընտրել Սլայդի Նկարներ</h2>
                @php
                $selectedFilmIds = $carousel_slides->pluck('slide_id')->toArray();
                @endphp

                @foreach($Selectedfilms as $Selectedfilm)
                <div style="margin-bottom: 20px;">
                    <label style="display: block;">
                        <input type="checkbox" name="films[]" value="{{ $Selectedfilm->id }}"
                            @if(in_array($Selectedfilm->id, $selectedFilmIds)) checked @endif>
                        {{ $Selectedfilm->title }}
                    </label>
                    <img
                        class="updateImagePreview"
                        src="{{ asset($Selectedfilm->image) }}"
                        alt=""
                        style="max-width: 100px; margin-top: 10px;">
                </div>
                @endforeach

                <div class="form-container">
                    <h2>Անջատել</h2>
                    <input type="hidden" name="hiddenInput">
                    <div class="checkbox-group">
                        <div>
                            <label for="ActiveFilmsId">Ընթացիկ ֆիլմեր</label>
                            <input type="checkbox" id="ActiveFilmsId" name="ActiveFilms" {{ isset($settings['ActiveFilms']) && $settings['ActiveFilms'] == 1 ? 'checked' : '' }}>
                        </div>
                        <div>
                            <label for="PromoOnOfId">Պրոմո</label>
                            <input type="checkbox" id="PromoOnOfId" name="promos"  {{ isset($settings['promos']) && $settings['promos'] == 1 ? 'checked' : '' }}>
                        </div>
                        <div>
                            <label for="UpcomingMoviesId">Սպասվող Ֆիլմեր</label>
                            <input type="checkbox" id="UpcomingMoviesId" name="UpcomingMovies" {{ isset($settings['UpcomingMovies']) && $settings['UpcomingMovies'] == 1 ? 'checked' : '' }}>
                        </div>
                        <div>
                            <label for="followId">Բաժանորդագրվել</label>
                            <input type="checkbox" id="followId" name="follow" {{ isset($settings['follow']) && $settings['follow'] == 1 ? 'checked' : '' }}>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary pagesButtonSubmit">Պահպանել</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>

</html>