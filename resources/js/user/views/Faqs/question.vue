<template>
    <div class="content">
        <!--~~~~~HEADER~~~~~~-->
        <div class="content-header">
            <div class="container-fluid"><br>
                <div class="row">
                    <div class="col-md-12">
                        <form class="card" @submit.prevent="sendQuestion()">
                            <h2 class="title0 text-center">ASK YOUR QUESTION</h2>

                            <div class="card-body">
                                <label>Your Email:</label>
                                <input type="text" class="form-control" placeholder="Write your Email" v-model="question.mail"><br>
                                <label>Your question:</label>
                                <quill-editor
                                    ref="myQuillEditor"
                                    :options="editorOption"
                                    v-model="question.question"
                                />
                                <button class="mt-3" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--~~~~~~END HEADER~~~~~~~-->
    </div>
</template>
<script>
import 'quill/dist/quill.snow.css'
import { quillEditor } from 'vue-quill-editor'
import {message_success} from "../../mixins/messages";
export default {
    name: 'HelloWorld',
    mixins:[message_success],
    components: {
        quillEditor
    },
    data(){
        return{
            editorOption: {
                debug: 'info',
                placeholder: 'Type your question...',
                readOnly: true,
                theme: 'snow'
            },
            question:{
                mail:'',
                question:''
            }
        }
    },
    methods:{
        sendQuestion(){
            this.$http.post('questions/create',this.question).then(response=>{
                this.message_success('Message sending',response);
                this.$emit('close');
            });
        }
    }
}
</script>

<style>
.title0{
    margin: 1%;
}
.card{
    background-color: #ffffff;
    border: 1px solid #EBEFF8;
    border-radius: 0px;
    height: unset !important;
    margin: 0.1%;
}
.card h2{
    font-size: 48px;
    font-weight: 700;
    color: #274FB6;
}
.card-body label{
    position: absolute;
    width: 267px;
    height: 32px;
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    line-height: 28px;
    color: #274FB6;
}
.card-body input{
    background: #FFFFFF;
    border: 1px solid #274FB6;
    box-sizing: border-box;
    border-radius: 5px;
    margin-top: 3%;
}
.card-body .quill-editor{
    background: #FFFFFF;
    border: 1px solid #274FB6;
    box-sizing: border-box;
    border-radius: 5px;
    margin-top: 3%;
}
.ql-editor{
    height: 25vh;
}
</style>














