import {Spanish} from 'flatpickr/dist/l10n/es.js';
import flatpickr from 'flatpickr';

// @vue/component
export default {
    methods : {
        enableDatePickers() {
            flatpickr(`[data-date-picker]`, {
                locale: Spanish,
                //dateFormat: "yy-mm-dd"
            });
        }
    }
}
