<template>
    <div class="todo-container">
        <ul class="list-group">
            <li 
            class="list-group-item mb-3 "
            v-for="todo in todos"
            :key="todo.id"
            @click = "editTodo(todo.id)"
            >
                <div><i class="fas fa-trash"></i></div>
                <div class="title">{{ todo.title }}</div>
                <div class="body">{{ todo.body }}</div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    mounted(){
        this.$store.dispatch('getTodo')
    },
    methods: {
        editTodo(id){
            console.log(this)
            console.log('scroll top' + this.$el.scrollTop)
            console.log('scroll Left' + this.$el.scrollLeft)
            console.log('scroll width' + this.$el.scrollWidth)
            console.log('scroll height' + this.$el.scrollHeight)
        }
    },
    computed: {
        todos(){
            // return this.$store.getters.displayTodo
            return this.$store.state.todos
        }
    }
}
</script>

<style scoped>
.todo-container{
    width: 500px;
}
.list-group-item{
    box-shadow: 0 6px 20px rgba(0,0,0,16%);
    border: none;
    border-radius: 20px;
    padding: 20px 40px;
    cursor: pointer;
}
.list-group-item:hover{
    box-shadow: 0 6px 20px rgba(56,53,53,60%);
    transition: .3s;
}
.title{
    font-weight: 500;
    font-size: 18px;
    margin-bottom: 20px;
}
.body{
    font-size: 16px;
    font-weight: 400;
    word-wrap: break-word;
}
</style>