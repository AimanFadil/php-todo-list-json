const { createApp } = Vue;

createApp({
    data() {
        return {
            myApi: 'server.php',
            listona: [],
            doElem: ''
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
        },
        addTool() {
            const data = {
                elem: this.doElem
            }
            axios.post(this.myApi, data, {
                headers: { 'Content-type': 'multipart/form-data' }
            }).then((response) => {
                this.myApi = response.data
                this.doElem = '';
            })
        }

    },
}).mount('#app')