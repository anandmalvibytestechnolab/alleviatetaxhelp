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

document.querySelector('[data-value="second_slide"]').addEventListener('click', function(){
    /* Commented below code due to added multiselect as array before it was only single select
    var optionsChecked = !!document.querySelectorAll('input[name="current_sit"]:checked').length;
    if(!optionsChecked){
        return;
    }
    */
    document.querySelector('.progre_s').style.display = 'block';
});

var taxVal = ["5000", "7500", "10000", "20000", "50000", "100000"];
var amount = new Intl.NumberFormat();
$("#slider").slider({
    min: 0,
    max: 100000,
    step: 500,
    value: 10000,
    slide: function (event, ui) {
        let selectedValue = new Intl.NumberFormat('en-US', {maximumSignificanDigits: 0}).format(ui.value);
        console.log(selectedValue + 'anand');
        document.querySelector('.price-picker').innerText = `$${selectedValue}`;
        document.querySelector('#price-picker_s').setAttribute('value', selectedValue);
        /*
        if (ui.value <= 500) {
            $(".price-picker").text('Under ' + '$' + ui.value);
        } else if (ui.value >= 100000) {
            $(".price-picker").text('$' + amount.format(ui.value) + ' or more');
        } else {
            $(".price-picker").text('$' + amount.format(ui.value));
        }
        if (ui.value < 4999) {
            return $("#tax_debt").val(taxVal[0]);
        }
        if (ui.value >= 5000 && ui.value < 9999) {
            return $("#tax_debt").val(taxVal[1]);
        }
        if (ui.value >= 10000 && ui.value < 19999) {
            return $("#tax_debt").val(taxVal[2]);
        }
        if (ui.value >= 20000 && ui.value < 49999) {
            return $("#tax_debt").val(taxVal[3]);
        }
        if (ui.value >= 50000 && ui.value < 99999) {
            return $("#tax_debt").val(taxVal[4]);
        }
        if (ui.value >= 100000) {
            return $("#tax_debt").val(taxVal[5]);
        }
        */
    },
    create: function (event, ui) {
        $(this).slider('value');
    }
});