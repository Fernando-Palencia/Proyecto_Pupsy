function previewPhoto(input) {
    const photoPreview = document.getElementById('photoPreview');
    const photoIcon = document.getElementById('photoIcon');
    const photoContent = document.getElementById('photoContent');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            photoPreview.style.backgroundImage = `url('${e.target.result}')`;
            photoIcon.style.display = 'none'; // Ocultar el icono
            photoPreview.style.display = 'block'; // Mostrar la foto
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        photoPreview.style.backgroundImage = '';
        photoIcon.style.display = 'flex'; // Mostrar el icono
        photoPreview.style.display = 'none'; // Ocultar la foto
    }
}