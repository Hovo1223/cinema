<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ավելացնել Նոր Ֆիլմ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('css/admin/films/new.css') }}" rel="stylesheet">



<body class="bg-light py-5">
    <div class="container">
        <form id="filmForm" class="p-4 rounded shadow-sm bg-white" enctype="multipart/form-data">
            @csrf
            <h4 class="mb-4 fw-bold">Ավելացնել Նոր Ֆիլմ</h4>

            <div class="mb-3">
                <label for="carouselTitleId" class="form-label fw-bold">Վերնագիր</label>
                <input type="text" id="carouselTitleId" name="carouselTitle" class="form-control" placeholder="Մուտքագրեք վերնագիրը">
            </div>

            <div class="mb-3">
                <label for="carouselImageId" class="form-label fw-bold">Նկար</label>
                <input type="file" id="carouselImageId" name="carouselImage" class="form-control" onchange="previewImage(event, '.imagePreviewCreate')">
                <div class="preview-container">
                    <img class="imagePreviewCreate" src="" alt="Նկարի նախադիտում" style="width:200px">
                </div>
            </div>

            <div class="mb-3">
                <label for="carouselImagePostId" class="form-label fw-bold">Պոստի Նկար</label>
                <input type="file" id="carouselImagePostId" name="carouselImagePost" class="form-control" onchange="previewImage(event, '.imagePreviewCreatePost')">
                <div class="preview-containerPost">
                    <img class="imagePreviewCreatePost" src="" alt="Նկարի նախադիտում"style="width:200px">
                </div>
            </div>


            <div class="mb-3">
                <label for="carouselDirectorId" class="form-label fw-bold">Ռեժիսոր</label>
                <input type="text" id="carouselDirectorId" name="carouselDirector" class="form-control" placeholder="Մուտքագրեք ռեժիսորի անունը">
            </div>

            <div class="mb-3">
                <label for="carouselCastId" class="form-label fw-bold">Դերերում</label>
                <input type="text" id="carouselCastId" name="carouselCast" class="form-control" placeholder="Նշեք դերասաններին">
            </div>

            <div class="mb-3">
                <label for="carouselGenreId" class="form-label fw-bold">Ժանր</label>
                <select id="carouselGenreId" name="genre[]" class="form-control js-example-basic-multiple" multiple>
                    @if($genres != null)
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="mb-3">
                <label for="carouselLanguageId" class="form-label fw-bold">Լեզու</label>
                <select id="carouselLanguageId" name="language" class="form-select js-example-basic-single">
                    <option disabled selected>Ընտրեք լեզուն</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="carouselAgeId" class="form-label fw-bold">Տևողություն</label>
                <input type="number" id="carouselAgeId" name="carouselAge" class="form-control">
            </div>

            <div class="mb-3">
                <label for="start_time" class="form-label fw-bold">Սկսելու ժամանակ</label>
                <input type="datetime-local" id="start_time" name="start_time" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="end_time" class="form-label fw-bold">Ավարտի ժամանակ</label>
                <input type="datetime-local" id="end_time" name="end_time" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="carouselDurationId" class="form-label fw-bold">Տարիքային սահմանափակում</label>
                <input type="number" id="carouselDurationId" name="carouselDuration" class="form-control">
            </div>

            <div class="mb-3">
                <label for="hallIdSelect" class="form-label fw-bold">Ընտրեք Դահլիճը</label>
                <select name="hallIdSelect" class="form-control">
                    @foreach($hall as $halls)
                        <option value="{{ $halls->id }}">{{ $halls->hall_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label fw-bold">Գին</label>
                <input type="number" id="price" name="price" class="form-control" step="0.01" min="0" required>
            </div>

            <div class="mb-3">
                <label for="carouselDescriptiontId" class="form-label fw-bold">Նկարագրություն</label>
                <textarea id="carouselDescriptiontId" name="carouselDescriptiontId" class="form-control" rows="3" placeholder="Գրեք նկարագրությունը"></textarea>
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="special_price" value="1" id="specialPriceId">
                <label class="form-check-label fw-bold" for="specialPriceId">Հատուկ Գին</label>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary me-2">Պահպանել</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/admin/films/new.js') }}"></script>
</body>
</html>
