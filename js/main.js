const app = new Vue ({
    el: "#root",
    data: {
        vinyls: [],
    },
    created() {
        axios.get('api/server.php')
            .then((results) => {
                this.vinyls = results.data
                console.log(this.vinyls);
            });
        }
})  