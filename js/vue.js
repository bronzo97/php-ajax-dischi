const appVue = new Vue({
    el: "#app",
    data: {
        pageTitle: "Titolo Pagina",
        db: [],
    },
    mounted() {
        axios.get("db/db_dischi_vue.php")
        .then(resp => {
            this.db = resp.data.db;
        })
    }
})