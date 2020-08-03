require(`./bootstrap`);
import DataTablesMixin from "./Mixins/DataTablesMixin";
import Select2Mixin from "./Mixins/Select2Mixin";
import SidebarMixin from "./Mixins/SidebarMixin";

import Vue from 'vue';
//require('./Mixins/NavMixin');
require(`./Mixins/DataTablesMixin`);

const app = new Vue({
    el: `#wrapper`,
    mixins : [SidebarMixin, DataTablesMixin, Select2Mixin],
    data: {
    },
    mounted(){
        this.setInitialSidebarStatus();
        this.enableDataTables();
        this.enhanceSelectDropdowns();
    },
});