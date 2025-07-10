document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.promoCreateForm'); 

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            fetch('/api/films/promos/store', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(' հաջողությամբ ավելացվեց');
                    window.location.href = '/admin/promos';
                } else {
                    alert('Սխալ: ' + data.message);
                }
            })
        });
    }
});

document.getElementById('carouselImageId').addEventListener('change', function (event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function (e) {
        const imagePreview = document.getElementById('imagePreview');
        const imagePreviewContainer = document.getElementById('imagePreviewId');

        imagePreviewContainer.style.display = 'block';
        imagePreview.src = e.target.result;
    };

    if (file) {
        reader.readAsDataURL(file);
    }
});


