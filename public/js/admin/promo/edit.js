
document.querySelector('.promoFormUpdate').addEventListener('submit', function (event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch('/api/films/promos/edit/' + formData.get('promos_id'), {
        method: 'post',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        alert('Դահլիճը հաջողությամբ թարմացվել է');
        window.location.href = '/admin/promos'; 

    })
    .catch(error => {
        console.error(error);
        alert('Սխալ է տեղի ունեցել');
    });
});

function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('imagePreview');
        output.src = reader.result;
        output.style.display = 'block';
    };
    reader.readAsDataURL(event.target.files[0]);
}