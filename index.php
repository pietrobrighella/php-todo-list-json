<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP ToDo List JSON</title>
</head>

<body>
    <div id="app">
        <h2>ToDoList</h2>
        <input type="text" placeholder="Scrivi testo ..." v-model="newTodoText" name="newtext">
        <button @click="addToDo">Aggiungi</button>
        <ul>
            <li v-for="(toDo, index) in toDoList" :class="toDo.done ? 'done' : ''" @click="toggleTodo(index)">{{toDo.text}}
                <button @click.stop="deleteTodo(index)">DELETE</button>
            </li>
        </ul>

    </div>

    <script src="./js/script.js"></script>
</body>

</html>