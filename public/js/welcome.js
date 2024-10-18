document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        document.getElementById('goToIndex').classList.remove('hidden');
    }, 3000);

    setTimeout(function () {
        document.querySelector('.hero').classList.add('visible');
    }, 200);
});



