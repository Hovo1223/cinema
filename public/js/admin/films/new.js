function previewImage(event) {
    const inputId = event.target.id;
    let image;

    if (inputId === 'carouselImageId') {
        image = document.querySelector('.imagePreviewCreate');
    } else if (inputId === 'carouselImagePostId') {
        image = document.querySelector('.imagePreviewCreatePost');
    }

    if (image && event.target.files[0]) {
        image.src = URL.createObjectURL(event.target.files[0]);
        image.style.display = 'block';
    }
}

$(function () {
    $('.js-example-basic-single').select2();
    $('.js-example-basic-multiple').select2({
        placeholder: "Ընտրեք ժանրը",
        allowClear: true
    });
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('filmForm').addEventListener('submit', function (e) {
        e.preventDefault();

        let formData = new FormData(this); 
        fetch('/api/films/store', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => { throw err; });
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                alert('Ֆիլմը հաջողությամբ ավելացվեց');
                window.location.href = '/admin/films';
            } else {
                alert('Սխալ: ' + data.message);
            }
        })
        .catch(error => {
            if (error.errors) {
                console.log(error.errors); 
                for (const [field, messages] of Object.entries(error.errors)) {
                    messages.forEach(msg => {
                        const errorBlock = document.createElement('div');
                        errorBlock.classList.add('text-danger');
                        errorBlock.textContent = msg;
                        document.querySelector(`[name="${field}"]`)?.after(errorBlock);
                    });
                }
            } else {
                alert('Տեղի ունեցավ անհայտ սխալ։');
            }
        });
    });
});
