document.querySelectorAll('.button-label input[type="checkbox"]').forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        this.closest('label').classList.toggle('btn-warning');
    });
});

document.querySelectorAll('.button-label-radio input[type="radio"]').forEach(function (radio) {
    radio.addEventListener('change', function () {
        document.querySelectorAll('.button-label-radio').forEach(function (label) {
            console.log(label);
            label.classList.remove('btn-warning');
        })
        if (this.checked) {
            this.closest('label').classList.add('btn-warning');
        }
    });
});

document.querySelector('[data-display-current-situation-text-field]').addEventListener('change', function () {
    document.querySelector('input[name="other_current_situation"]').classList.toggle('d-none');
});
