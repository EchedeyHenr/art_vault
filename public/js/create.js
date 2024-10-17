document.getElementById('photo').addEventListener('change', function() {
    const fileName = this.files[0] ? this.files[0].name : 'Ningún archivo seleccionado';
    document.getElementById('file-name').textContent = fileName;
});