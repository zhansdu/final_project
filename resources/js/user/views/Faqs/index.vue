<template>
    <div class="content">
        <!--~~~~~HEADER~~~~~~-->
        <div class="content-header">
            <div class="container-fluid"><br>
                <div class="row">
                    <div class="col-md-12">
                        <form @submit.prevent="search()" class="card">
                            <h1 class="title0 text-center">{{$t('faq1')}}</h1>
                            <input type="text" placeholder="Search question" class="search" v-model="query">
                        </form>
                        <div class="card1" id="#app">
                            <ul>
                                <li v-for="(question,index) in questions" @click="showModal(Dialog,{question:question})">
                                    <span class="text-blue cursor-pointer">{{question.question}}</span>
                                    <br>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--~~~~~~END HEADER~~~~~~~-->
    </div>
</template>
<script type="text/javascript">
    import modal from "../../mixins/modal.js"
    import dialog from "./Dialog.vue"
    export default{
        props:{
            question:String
        },
        mixins: [modal],
        data(){
            return{
                questions:[],
                query:'',
                Dialog: dialog,
            }
        },
        methods:{
            search(){
                this.$http.post('/faq/search',{query:this.query}).then(response=>{
                    this.questions=response.data.res;
                })
            },
            getInitData(){
                this.$http.get('/faq/index').then(response=>{
                    this.questions=response.data.res;
                })
            }
        },
        created(){
            this.getInitData();
            if(this.question){
                this.query=this.question;
                this.search();
            }
        }
    }
</script>
<style>
.title0{
    margin: 1%;
}
.card{
    background-color: #EBEFF8;
    border: 1px solid #EBEFF8;
    border-radius: 0px;
    height: 200px;
    margin: 0.1%;
}
.card1{
    position: relative;
    padding: 40px 80px 15px 40px;
    top: -50px;
    left: 10%;
    background-color: #ffffff;
    border: 1px solid #0a306a;
    border-radius: 0px;

    width: 80%;
}
.card1 ul{
    list-style-type: none;
}
.search{
    position: relative;
    left: 10%;
    width: 80%;
    border: 1px solid #0a306a;
    border-radius: 0px;
}

</style>














