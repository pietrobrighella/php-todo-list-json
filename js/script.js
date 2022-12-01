const { createApp } = Vue

const app = createApp({
    data(){
        return {
            newTodoText: '',
            toDoList: [],
            apiUrl: './server/server.php',
        }
    },
    methods: {
        getTodo(){
            axios.get(this.apiUrl).then((res)=>{
                //const data = JSON.parse(res.data);
                this.toDoList = res.data;

                this.getTodo();
            });
        },

        addToDo(){
            const data = {
                newTodoText: this.newTodoText,
            }
            axios.post(this.apiUrl, data, {headers: {'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.getTodo();
                this.newTodoText = '';

                console.log(res.data);
            })
        },

        toggleTodo(index){
            const data = {
                toggleTodoIndex: index,
            }

            axios.post(this.apiUrl, data, {headers: {'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.getTodo();
            })
        },

        deleteTodo(index){
            const data = {
                deleteTodoIndex: index,
            }

            axios.post(this.apiUrl, data, {headers: {'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.getTodo();
            })
        }
    },
    mounted() {
        this.getTodo();
    }
}).mount('#app');