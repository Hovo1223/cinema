function previewImage(event, selector) {
    const input = event.target;
    const file = input.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const img = document.querySelector(selector);
            img.src = e.target.result;
            img.classList.remove('d-none');
        };

        reader.readAsDataURL(file);
    }
}

$(document).ready(function() {
    $('.js-example-basic-multiple').select2({
        width: '100%',
        placeholder: "Ընտրեք ժանրը"
    });
});

document.querySelector('.formUpdateAdmin').addEventListener('submit', function (event) {
    event.preventDefault();
    const formData = new FormData(this);

    document.querySelectorAll('.text-danger').forEach(el => el.remove());

    fetch('/api/films/edit/' + formData.get('film_id'), {
        method: 'POST',
        body: formData,
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(err => { throw err; });
        }
        return response.json();
    })
    .then(data => {
        alert('Ֆիլմը հաջողությամբ թարմացվել է');
        window.location.href = '/admin/films';
    })
    .catch(error => {
        if (error.errors) {
            for (const [field, messages] of Object.entries(error.errors)) {
                messages.forEach(msg => {
                    const input = document.querySelector(`[name="${field}"]`);
                    if (input) {
                        const errorBlock = document.createElement('div');
                        errorBlock.classList.add('text-danger');
                        errorBlock.textContent = msg;
                        input.after(errorBlock);
                    }
                });
            }
        } else {
            alert('Սխալ է տեղի ունեցել։');
            console.error(error);
        }
    });
});


