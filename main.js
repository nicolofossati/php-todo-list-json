const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: []
        }
    },
    methods: {
        readList() {
            axios.get('server.php').then(response => {
                this.todoList = response.data;
            });
        }
    },
    mounted() {
        this.readList();
    }
}).mount('#app')