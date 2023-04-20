const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            todoInput: ''
        }
    },
    methods: {
        readList() {
            axios.get('server.php').then(response => {
                this.todoList = response.data;
                console.log(response.data);
            });
        },
        addTodoItem() {
            const data = {
                todoInput: this.todoInput
            };
            axios.post('server.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }
            ).then(response => {
                this.todoList = response.data;
                this.todoInput = '';
            });
        }
    },
    mounted() {
        this.readList();
    }
}).mount('#app')