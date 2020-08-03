import Cookie from './../Classes/Cookie';

// @vue/component
export default {
    data(){
        return {
            sidebarStatus : `open`
        }
    },
    methods : {
        toggleSidebar(){
            let cookie = new Cookie();
            let sidebarStatus = this.getCurrentSidebarStatus();
            //console.log(sidebarStatus);
            sidebarStatus === `open` ? cookie.set(`sidebar_status`, `closed`) : cookie.set(`sidebar_status`, `open`);
            this.sidebarStatus = this.getCurrentSidebarStatus();

            //cookie.set('sidebar_status', Boolean(trure));

            //console.log(cookie.get(`sidebar_status`));
            //console.log(sidebarStatus);
            //console.log(typeof sidebarStatus);
            //let Cookie = new Cookie();
            //alert('so bored');
        },
        getCurrentSidebarStatus(){
            let cookie = new Cookie();
            return cookie.get(`sidebar_status`).length ?  cookie.get(`sidebar_status`) : `open`;
        },
        setInitialSidebarStatus(){
            this.sidebarStatus = this.getCurrentSidebarStatus();
        }
    }
};