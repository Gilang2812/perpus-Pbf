document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('a');  // Semua link
    links.forEach(link => {
        link.addEventListener('click', showLoading); // Tampilkan loading saat link diklik
    });
});