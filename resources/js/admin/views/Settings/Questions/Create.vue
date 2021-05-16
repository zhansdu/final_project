<template>
    <div class="content">
        <!--~~~~~HEADER~~~~~~-->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <p class="_title">{{$t('from')}}: {{data.mail}}</p>
                        <p class="Dates">{{$t('date')}}: {{data.date}}</p>
                        <p class="anw">{{$t('answered')}}: {{data.answered==0 ? 'No':'Yes'}}</p>
                        <div type="text" name="title" class="form-question p-3 border" v-html="data.question"></div>
                        <div class="card-footer align-content-end">
                            <Button class="_btn _action_btn answer_btn1" @click="answer()">{{$t('answer')}}</Button>
                            <Button type="button" class="_btn _action_btn cancle_btn1" @click="close()">{{$t('cancle')}}</Button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~END HEADER~~~~~~~-->
</template>
<script>
    import {message_success} from '../../../mixins/messages'
    export default {
        name: 'HelloWorld',
        mixins:[message_success],
        props:{
            data:{
                type:Object,
                default(){
                    return {}
                }
            },
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
            close(){
                this.$emit('close');
            },
            answer(){
                this.$http.post('/questions/update',{id:this.data.id,answered:1}).then((response)=>{
                    this.message_success('answered',response);
                    this.close();
                });
                this.$eventHub.$emit('getQuestions');
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
.form-question{
    min-height: 25vh;
    border-radius: 0;
    background-color: #F4F4F4;
}
._action_btn {
    padding: 5px 5px;
    font-weight: bold;
    font-size: 12px;
}
.answer_btn1 {
    background-color: #12873A;
    width: 10%;
    margin-left: 79%;
}
.cancle_btn1{
    background-color: #fd0000;
    width: 10%;
}
.card-footer{
    background-color:transparent !important;
}
</style>
