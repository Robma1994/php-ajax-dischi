const app = new Vue ({
    el: "#root",
    data: {
        vinyls: [],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/server.php')
            .then((results) => {
                this.vinyls = results.data
                console.log(this.vinyls);
            });
        }
})  