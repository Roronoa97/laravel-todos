export default {
    state: {
        todos: null
    },
    getters: {
        displayTodo(state){
            return state.todos
        }
    },
    actions: {
        getTodo({commit}){
            axios.get('/api/todo')
            .then(res => {
                commit('saveTodo', res.data)
            })
        },
    },
    mutations: {
        saveTodo(state, data){
            return state.todos = data
        }
    }
}