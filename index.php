<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <div class="container mt-4">
            <h1 class="text-center">To do list:</h1>
            <div class="todo-list d-flex justify-content-center my-5">
                <ul class="list-group col-4">
                    <li class="list-group-item" :class="(todoItem.done==true)?'text-decoration-line-through':''"
                        v-for="todoItem in todoList">{{todoItem.task}}</li>
                </ul>
            </div>

            <div class="d-flex justify-content-center col-3 m-auto">
                <input v-model="todoInput" class="form-control me-2" type="text" placeholder="new task"
                    aria-label="default input example">
                <button class="btn btn-primary ms-2" type="submit" @click="addTodoItem"
                    @keyup.enter="addTodoItem">Add</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js"
        integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- main.js link -->
    <script src="main.js"></script>
</body>

</html>