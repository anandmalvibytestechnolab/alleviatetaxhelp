require(`datatables.net-bs4`);
require(`datatables.net-fixedheader`);
require(`datatables.net-responsive-bs4`);

// @vue/component
export default {
    methods: {
        enableDataTables() {
            $(function () {
                $(`table.table`).DataTable({
                    paging: false,
                    ordering: false,
                    fixedHeader: true,
                    // responsive: true,
                    language: {
                        search: `Filtrar`,
                        info: ``,
                        infoFiltered: ``,
                    }
                });
            });
        }
    }
}
