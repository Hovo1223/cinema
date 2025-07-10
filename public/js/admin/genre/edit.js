document.querySelector('.genreUpdateForm').addEventListener('submit', function (event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch('/api/films/genre/edit/' + formData.get('genre_id'), {
        method: 'post',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        alert('Ֆիլմը հաջողությամբ թարմացվել է');
        window.location.href = '/admin/genres'; 

    })
    .catch(error => {
        console.error(error);
        alert('Սխալ է տեղի ունեցել');
    });
});