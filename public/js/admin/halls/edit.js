document.querySelector('.hallsUpdateForm').addEventListener('submit', function (event) {
    alert(4)
    event.preventDefault();
    const formData = new FormData(this);
    fetch('/api/films/halls/edit/' + formData.get('hall_id'), {
        method: 'post',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        alert('Դահլիճը հաջողությամբ թարմացվել է');
        window.location.href = '/admin/halls'; 

    })
    .catch(error => {
        console.error(error);
        alert('Սխալ է տեղի ունեցել');
    });
});