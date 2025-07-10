<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="form-container " style="max-width: 600px;
            margin: 0 auto;
            padding: 20px;">
        <form enctype="multipart/form-data" class="promoCreateForm">
            @csrf
            <div class="mb-4">
                <label for="promoId" class="form-label">Պրոմո Անուն</label>
                <input type="text" name="promoName" id="promoId" class="form-control form-control-lg rounded-3 shadow-sm" placeholder="Գրեք անուն">
            </div>
            
            <div class="mb-4">
                <label for="promoSubtitleId" class="form-label">Ենթավերնագիր</label>
                <input type="text" name="promoSubtitleName" id="promoSubtitleId" class="form-control form-control-lg rounded-3 shadow-sm" placeholder="Գրեք ենթավերնագիր">
            </div>
            
            <div class="mb-4">
                <label for="carouselImageId" class="form-label">Նկար</label>
                <input type="file" id="carouselImageId" name="carouselImagePromo" class="form-control createImageInput" >
            </div>

            <div id="imagePreviewId" class="text-center" style="display: none;">
                <img id="imagePreview" class="createImagePreview" src="" alt="Image preview" 
                    style="max-width: 100%; max-height: 200px; display: block; border: 1px solid #ddd; border-radius: 8px; margin-top: 10px;">
            </div>

            <div class="mb-4">
                <label for="promoDescId" class="form-label">Նկարագրություն</label>
                <textarea name="promodescName" id="promoDescId" class="form-control form-control-lg rounded-3 shadow-sm" rows="4" placeholder="Գրեք նկարագրություն"></textarea>
            </div>

            <div class="modal-footer border-0">
                <button type="submit" class="btn btn-primary btn-rounded px-4">Ստեղծել</button>
            </div>
        </form>
    </div>
</body>
</html>
<script src="{{ asset('js/admin/promo/new.js') }}"></script>
