// @vue/component
export default {
    methods : {
        enableTooltips(){
            $(function () {
                $(`[data-toggle="tooltip"]`).tooltip()
            })
        }
    }
}
