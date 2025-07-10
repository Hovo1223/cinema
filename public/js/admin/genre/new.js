document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.genreCreateForm'); 

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            fetch('/api/films/genre/store', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Ֆիլմը հաջողությամբ ավելացվեց');
                    window.location.href = '/admin/genres';
                } else {
                    alert('Սխալ: ' + data.message);
                }
            })
        });
    }
});

