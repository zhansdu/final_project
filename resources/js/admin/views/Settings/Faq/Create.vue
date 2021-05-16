<template>
    <div class="content">
        <!--~~~~~HEADER~~~~~~-->
        <div class="content-header">
            <div class="container-fluid"><br>
                <p class="_title0">{{$t('add faq')}}</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary" style="margin: 1%">
                            <form @submit.prevent="save()">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>{{$t('question')}}</label>
                                        <input type="text" name="title" class="form-control" placeholder="Write your question" v-model="data.question" :readonly="info"><br>
                                        <label>{{$t('answer')}}</label>
                                        <quill-editor
                                        v-model="data.answer"
                                        ref="myQuillEditor"
                                        :options="editorOption"
                                        :disabled="info"
                                        />
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <Button type="button" class="_btn _action_btn cancle_btn1" @click="close()">{{$t('cancle')}}</Button>
                                    <Button type="submit" class="_btn _action_btn save_btn1">{{$t('save')}}</Button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~END HEADER~~~~~~~-->
</template>
<script>
    import 'quill/dist/quill.snow.css'
    import { quillEditor } from 'vue-quill-editor'
    import {message_success} from '../../../mixins/messages'
    export default {
        name: 'HelloWorld',
        mixins:[message_success],
        props:{
            edit:{
                type:Boolean,
                default(){
                    return false
                }
            },
            info:{
                type:Boolean,
                default(){
                    return false
                }
            },
            data:{
                type:Object,
                default(){
                    return {}
                }
            },
            after:{
                type:Function,
                default(){
                    return ()=>{}
                }
            }
        },
        components: {
            quillEditor
        },
        data: () => ({
            content: '',
            editorOption: {
                debug: 'info',
                placeholder: 'Type your answer...',
                readOnly: true,
                theme: 'snow'
            }
        }),
        methods:{
            save(){
                let method='create';
                if(this.edit){
                    method='update'
                };
                this.$http.post('faq/'+method,this.data).then(response=>{
                    this.message_success('save',response);
                    this.after();
                }).catch(error=>{
                    this.message_error('save',error);
                }).then(()=>{
                    this.close();
                });
            },
            close(){
                this.$emit('close');
            }
        },
        created(){
            if(this.edit || this.info){
                this.data=JSON.parse(JSON.stringify(this.data));
            }
        }
    }
</script>
<style>
.ql-editor{
    height: 25vh;
}
._action_btn {
    padding: 5px 5px;
    font-weight: bold;
    font-size: 12px;
}
.save_btn1 {
    background-color: #0e339b;
    width: 10%;
}
.cancle_btn1{
    background-color: #fd0000;
    width: 10%;
}
.card-body .form-group >input{
    width: 100%;
    height: 5%;
    border-radius: 0%;
}
</style>
