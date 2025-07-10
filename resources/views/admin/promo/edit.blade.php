<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Թարմացնել Պրոմո</h2>
    <form enctype="multipart/form-data" class="promoFormUpdate">
        <input type="hidden" name="promos_id" value="{{ $promos->id }}">
        @csrf
        <div class="mb-3">
            <label for="promoIdUpdate" class="form-label">Պրոմո Անուն</label>
            <input type="text" value="{{ $promos->title }}" name="promoName" id="promoIdUpdate" class="form-control form-control-lg rounded-3 shadow-sm promoInputUpdate" required>
        </div>
        <div class="mb-3">
            <label for="promoSubtitleIdUpdate" class="form-label">Ենթավերնագիր</label>
            <input type="text" value="{{ $promos->subtitle }}" name="promoSubtitleNameUpdate" id="promoSubtitleIdUpdate" class="form-control form-control-lg rounded-3 shadow-sm updatePromoSubtitle" required>
        </div>
        <div class="mb-3">
            <label for="updateImageInput" class="form-label">Նկար</label>
            <input type="file" name="carouselImagePromoUpdate" class="form-control updateImageInput" accept="image/*" onchange="previewImage(event)">
        </div>

        <img class="updateImagePreview" id="imagePreview" src="{{ asset('storage/'.$promos->image) }}" alt="Նկարի նախադիտում" style="max-width: 100px;">
    

        <div class="mb-3">
            <label for="promoDescIdUpdate" class="form-label">Նկարագրություն</label>
            <textarea name="promodescNameUpdate" id="promoDescIdUpdate" class="form-control form-control-lg rounded-3 shadow-sm promoDescInput" rows="5" required>{{ $promos->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block px-4">Թարմացնել</button>
    </form>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/admin/promo/edit.js') }}"></script>

