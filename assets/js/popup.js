document.addEventListener("DOMContentLoaded", function () {
    // Select all images with either class (normal or small)
    const images = document.querySelectorAll('.image , .image1, .image1mobile');

    images.forEach(img => {
        img.addEventListener('click', function () {
            this.classList.toggle('fullscreen'); // Toggle fullscreen on click
        });
    });
});
