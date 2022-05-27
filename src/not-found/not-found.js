const $notFoundLink = document.querySelector('.not-found__bottom');

if ($notFoundLink) {
    $notFoundLink.addEventListener('click', () => {
        window.location.href = `/#portfolio`;
    });
}