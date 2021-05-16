<template>
    <div class="content">
        <!--~~~~~HEADER~~~~~~-->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary" style="margin: 1%">
                            <form @submit.prevent="save()">
                                <div class="card-body">
                                    <h4 class="text-center _title0">{{$t('events')}}</h4>
                                    <div class="form-group">
                                        <label>{{$t('title')}}</label>
                                        <input type="text" class="form-control" placeholder="Title" v-model="data.name" :readonly="info"><br>
                                        <label>{{$t('place')}}</label>
                                        <input type="text" class="form-control" placeholder="Place" v-model="data.place" :readonly="info"><br>
                                        <label>{{$t('datet')}}</label>
                                        <input type="date" class="form-control" v-model="data.date" :readonly="info"><br>
                                        <label>{{$t('time')}}</label>
                                        <input type="time" class="form-control" v-model="data.time" :readonly="info"><br>
                                        <label>{{$t('description')}}</label>
                                        <quill-editor
                                        v-model="data.description"
                                        ref="myQuillEditor"
                                        :options="editorOption"
                                        :disabled="info"
                                        /><br>
                                        <label>{{$t('little_description')}}</label>
                                        <quill-editor
                                        v-model="data.little_description"
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
                placeholder: 'Type your description',
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
                this.$http.post('events/'+method,this.data).then(response=>{
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
            console.log(this.data);
            if(this.edit || this.info){
                this.data=JSON.parse(JSON.stringify(this.data));
            }
        }
    }
</script>
<style>
._title0{
    text-transform: uppercase;
}
.ql-editor{
    height: 20vh;
}
._action_btn {
    padding: 5px 5px;
    font-weight: bold;
    font-size: 12px;
}
.save_btn1 {
    background-color: #0e339b;
    width: 20%;
}
.cancle_btn1{
    background-color: #fd0000;
    width: 20%;
}
.card-body .form-group > input{
    width: 100%;
    height: 5%;
    border-radius: 0%;
}
</style>
