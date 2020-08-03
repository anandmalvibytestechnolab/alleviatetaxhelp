import select2 from 'select2';

 // @vue/component
export default {
    methods : {
        enhanceSelectDropdowns(){
            const options = {
                // dropdownParent : `.modal`
            };
            $(`.select2`).select2(options);
            $(`.select2`).on('change', function(e){
                let selection = $(e.target).select2('data');
            Event.fire('select2Changed', {selection})
            });
        }
    }
}