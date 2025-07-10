document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.hallsCreateForm'); 

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            fetch('/api/films/halls/store', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Նոր դահլիճը հաջողությամբ ավելացվեց');
                    window.location.href = '/admin/halls';
                } else {
                    alert('Սխալ: ' + data.message);
                }
            })
        });
    }
});

