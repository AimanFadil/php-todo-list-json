const { createApp } = Vue;

createApp({
    data() {
        return {
            myApi: 'server.php',
            listona: []
        }
    },
    mounted() {
        this.getListona()

    },
    methods: {
        getListona() {
            axios.get(this.myApi).then((response) => {
                this.listona = response.data;
            })
        }

    },
}).mount('#app')