<template>
    <div>
        <div class="content">
            <div class="container-fluid">
                <p class="_title0">{{$t('all_faq')}}<button type="button" class="_add_btn" @click="showModal(Create,{after:loadFaqs})">+ {{$t('add')}}</button></p>

                <!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
                <div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">

                    <div class="_overflow _table_div">
                        <table class="_table">
                            <!-- TABLE TITLE -->
                            <tr>
                                <th>{{$t('id')}}</th>
                                <th>{{$t('question')}}</th>
                                <th>{{$t('answer')}}</th>
                                <th>{{$t('action')}}</th>
                            </tr>
                            <!-- TABLE TITLE -->

                            <!-- ITEMS -->
                            <tr v-for="(faq,index) in faqs" :key="index">
                                <td style="width: 54px;">{{faq.id}}</td>
                                <td style="width: 400px;">{{faq.question}}</td>
                                <td v-html="faq.answer" style="width: 600px;"></td>
                                <td class="ddd" style="width: 300px;">
                                    <Button type="button" class="_btn _action_btn view_btn1" @click="showModal(Create,{info:true,data:faq})">{{$t('view')}}</Button>
                                    <Button type="button" class="_btn _action_btn edit_btn1" @click="showModal(Create,{edit:true,data:faq,after:loadFaqs})">{{$t('edit')}}</Button>
                                    <Button type="button" class="_btn _action_btn make_btn1" @click="delete_it(faq.id)">{{$t('delete')}}</Button>
                                </td>
                            </tr>
                            <!-- ITEMS -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import showModal from '../../../mixins/showModal'
import {message_success} from '../../../mixins/messages'
import Create from './Create'
export default{
    mixins:[showModal,message_success],
    data(){
        return{
            faqs:[],
            Create:Create
        }
    },
    methods:{
        loadFaqs(){
            this.$http.get('faq/index').then(response=>{
                this.faqs=response.data.res;
            })
        },
        delete_it(id){
            this.$http.get('faq/delete?id='+id).then(response=>{
                this.message_success('delete',response);
                this.loadFaqs();
            });
        }
    },
    created(){
        this.loadFaqs();
    }
}
</script>
<style scoped>

/*========= 1.COMMON ========*/
p {
    font-size: 1rem;
    line-height: 24px;
    margin: 0px;
}
button {
    outline: none;
    border: 0;
    cursor: pointer;
}
button:hover {
    text-decoration: none;
}
button:focus, button:active {
    outline: 0;
    border: 0;
}
button:focus{
     outline: none;
     box-shadow: none;
 }
button{
    font-family: "Helvetica Neue",Helvetica,"PingFang SC","Hiragino Sans GB","Microsoft YaHei","\5FAE\8F6F\96C5\9ED1",Arial,sans-serif;
}
._box_shadow {
    background: #fff;
    -webkit-box-shadow: 0 10px 20px rgba(47, 91, 231, 0.1);
    box-shadow: 0 10px 20px rgba(47, 91, 231, 0.1);
}
._btn:hover{
    background: #0551b7;
}
._btn {
    border: none;
    font-size: 14px;
    color: #fff;
    border-radius: 3px;
    transition: .3s all ease;
    padding: 3px 11px;
    cursor: pointer;
    background: #0099ff;
}
._btn:focus{
    outline: none;
    border: none;
    box-shadow: none;
}

._overflow{
    overflow: auto;
}

._title0 {
    color: #222;
    font-size: 17px;
    font-weight: 600;
    margin-bottom: 10px;
}

._border_radious{
    border-radius: 3px;
}

._p20{
    padding: 18px 20px 25px;
}
._mar_b30{
    margin-bottom: 30px;
}

/*========= 2.HOME =======*/
.content {
    padding-top: 30px;
    padding-bottom: 50px;
    padding-left: 20px;
    padding-right: 20px;
}

/*TABLE*/
._table {
    border-collapse: collapse;
    width: 100%;
}
._table tr{}
._table tr:first-child {
    background: #ffffff;
}
._table tr:first-child:hover{
    background: #ffffff;
}
._table tr:hover, ._table tr:nth-child(even):hover {
    background: #e7e7e7;
}
._table tr:nth-child(even) {
    background: rgba(255, 255, 255, 0.55);
}
._table tr th {
    border: 1px solid transparent;
    text-align: left;
    padding: 8px 13px;
    color: #000000;
    font-size: 15px;
}
._table tr td {
    text-align: left;
    padding: 8px 13px;
    min-width: 103px;
    font-size: 15px;
}
._table tr{
    border: 1px solid #e7e7e7;
    text-align: left;
    padding: 8px 13px;
    min-width: 103px;
    font-size: 15px;
}

/*TABLE*/

/*========= 13.ADMIN OVERVEIW =======*/

._action_btn {
    padding: 2px 2px;
    font-weight: bold;
    font-size: 12px;
}
._add_btn {
    padding: 0px 3px;
    font-weight: bold;
    font-size: 12px;
    width: 10%;
    color: #fff;
    margin-left: 80%;
    background-color: #333333;
    border-radius: 5px;
}

._add_btn:hover {
    color: #ffffff;
    background-color: #09467a;
    border-radius: 5px;
}

._table_name {
    font-weight: 600;
    color: #383737;
    max-width: 415px;
    display: -webkit-box;
    max-height: 3.2rem;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    -webkit-line-clamp: 2;
}
.view_btn1{
    background-color: #249b43;
    width: 30%;
}
.edit_btn1 {
    background-color: #0e339b;
    width: 30%;
}
.make_btn1{
    background-color:#fd0000;
    width: 30%;
}
.post_category_list p {
    display: inline-block;
    padding-left: 26px;
    font-size: 13px;
    color: #000;
}
</style>

