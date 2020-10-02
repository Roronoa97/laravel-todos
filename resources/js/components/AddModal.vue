<template>
    <!-- Modal -->
    <div class="modal fade" id="modalTodo" tabindex="-1" role="dialog" aria-labelledby="Adding Todo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-transparent">
                <input class="text w-100 mb-3" id="title" placeholder="Title" v-model="form.title" /> 
                <textarea class="w-100" id="body" placeholder="Body" v-model="form.body"></textarea>
                <button @click="addTodo()">
                    <slot>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24.714" height="21.184" viewBox="0 0 24.714 21.184">
                        <defs>
                            <linearGradient id="linear-gradient" x1="0.077" y1="0.135" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#a72e8f"/>
                            <stop offset="1" stop-color="#2b2879"/>
                            </linearGradient>
                        </defs>
                        <path id="Icon_material-send" data-name="Icon material-send" d="M3.012,25.684l24.7-10.592L3.012,4.5,3,12.738l17.653,2.354L3,17.446Z" transform="translate(-3 -4.5)" fill="url(#linear-gradient)"/>
                    </svg>
                    </slot>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            form: {
                title: '',
                body: ''
            }
        }
    },
    methods:{
        addTodo(){
            if(this.form.title == '' || this.form.body == ''){
                console.log('empty')
            }else{
                axios.post('api/todo', this.form)
                .then( () => {
                    $('#modalTodo').modal('hide');
                    // this.$refs.todo.getTodo()
                    this.$store.dispatch('getTodo');
                })
            }
        }
    }
}
</script>

<style scoped>
.modal-content{
    border: none;
    outline: none;
    width: 600px;
    min-height: 350px;
    font-size: 22px;
}

#title{
    height: 60px;
    border: none;
    border-radius: 11px;
    box-shadow: 0 3px 15% rgba(0,0,0,16%);
    outline: none;
    padding: 16px 35px;
    font-weight: 700;
}
#body{
    resize: none;
    flex: 1;
    border: none;
    border-radius: 11px;
    box-shadow: 0 3px 15px rgba(0,0,0,16%);
    outline: none;
    padding: 16px 35px;
}
button{
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    right: 30px;
    bottom: -35px;
    width: 65px;
    height: 65px;
    border-radius: 50%;
    border: none;
    background-color: #fff;
    box-shadow: 5px 5px 10px rgba(0,0,0,16%);
}
</style>