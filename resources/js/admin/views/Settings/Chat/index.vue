<template>
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h5 class="d-flex align-items-end">
                            {{$t('pab_chat')}}
                            <small class="ml-1">
                                ({{users_number}}
                                {{$t('users_online')}})
                            </small>
                            <span class="ml-auto cursor-pointer" @click="connect()">{{connected?'X Disconnect' : 'Connect'}}</span>
                        </h5>
                    </div>
                    <div class="d-flex form-group" style="height: 500px">
                        <form class="col-8 p-2" @submit.prevent="sendMessage">
                            <div id="messages" class="form-control h-75 overflow-auto">
                                <div class="d-flex flex-1 justify-content-center">
                                    <div v-if="Object.keys(user).length==0">Click on a chat to start messaging</div>
                                    <div v-if="Object.keys(user).length>0 && messages.length==0">There's no messages yet</div>
                                </div>
                                <div class="d-flex flex-1" v-for="(message,index) in messages" :key="index">
                                    <div class="message" :class="{'ml-auto admin':message.from=='admin'}">
                                        <span class="my-2 font-size-12">
                                            {{message.time}}
                                        </span>
                                        <span class="d-block">
                                            {{message.message}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column pt-2">
                                <input class="w-100 p-3 py-4" type="text" v-model="message" placeholder="Your message" required>
                                <div class="ml-auto mt-2">
                                    <button type="submit" class="btn-primary font-size-14">{{$t('send')}}</button>
                                </div>
                            </div>
                        </form>
                        <div class="userd col-4 p-2">
                            <div class="hoss mt-2" :class="{hoss_active:usr==user}" v-for="(usr,index) in users" :key="index" @click="setUser(usr)">
                                <div>{{userName(usr)}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name:'chat',
        data: function() {
            return {
                connected:false,
                user:{},
                users:[],
                message:'',
            }
        },
        computed:{
            users_number(){
                return this.users.length ?? 0;
            },
            messages(){
                let messages=[]
                try{
                    messages=this.users.filter(user=>user.from==this.user.from)[0].message_history;
                }catch(e){}
                return messages
            }
        },
        methods: {
            connect(){
                this.connected=!this.connected
                this.$http.post('/chat/connect',{name:'admin',connected:this.connected});
            },
            userName(user){
                return user.name ?? user.mail ?? 'Anonymous';
            },
            sendMessage() {
                if (this.message != "") {
                    let now=new Date();
                    let time='';
                    time+=now.getHours()+' : '+now.getMinutes();
                    this.$http.post('/chat/send-message',{message: this.message,name: 'admin',from:'admin',to:this.user.from,time:time});
                    this.message='';
                }
            },
            addUser(data){
                this.users.push(data);
            },
            placeFirst(data){
                let arr =[];

                let user=this.users.filter(user=>user.from==data.from)[0];
                let others=this.users.filter(user=>user.from!=data.from);

                if(user){
                    arr.push(user);
                }
                arr=arr.concat(others);

                this.users=arr;
            },
            removeUser(data){
                if(this.users.filter(user=>user.from==data.from).length>0){
                    this.users=this.users.filter(user=>user.from!=data.from);
                }
            },
            addMessage(client,from,message,time){
                this.users.filter(user=>user.from==client)[0].message_history.push({from:from,message:message,time:time});
                var messageBody = document.getElementById('messages');
                messageBody.scrollTop = messageBody.scrollHeight;
            },
            playMusic(name){
                const audio = new Audio('/assets/sounds/'+name+'.mp3');
                audio.play();
            },
            setUser(user){
                this.user=user;
            }
        },
        created(){
            this.connect();
        },
        mounted() {
            socket.on("connection",function(data){
                if(data.name!="admin"){

                    data.from=data.token;
                    data=objectWithoutKey(data,'token');
                    if(data.connected){
                        data.message_history=[]
                        this.addUser(data);
                        this.placeFirst(data);
                        this.playMusic('connected');
                    }
                    else{
                        this.removeUser(data);
                    }
                }
            }.bind(this));
            socket.on("chat", function(data){
                if(data.from=='admin'){
                    console.log('from admin');
                    console.log(data);
                    this.addMessage(data.to,data.from,data.message,data.time);
                }
                else{
                    this.addMessage(data.from,data.from,data.message,data.time);
                    this.playMusic('sms');
                }
                this.placeFirst(data);
            }.bind(this));
        }
    }
</script>
<style>
.container{
    max-width: unset!important;
}
.card{
    margin: 10px;
}
.card-header{
    background-color: #333333;
}
.form-control:disabled, .form-control[readonly]{
    border-radius: 0%;
}
.card-header h5{
    color: #FF9D29;
}
.form-group{
    background-color: #FFFFFF;
    color: #000000;
    margin-top: 1px;
    margin-bottom: 0px;
}
.form-group input{
    width: 200px;
    height: 25px;
}
.form-control:disabled, .form-control[readonly]{
    background-color: #333333;
}
.message{
    margin-top: 3px;
    margin-bottom: 3px;
    padding:2px;
    padding-left:  8px;
    padding-right: 8px;
    border-radius:5px;
    background-color:lightgrey;
}
.admin{
    background-color: blue;
    color:white;
}
.hoss{
    border: 1px solid #333333;
    border-radius: 1%;
    height: 15%;
    padding: 20px 10px;
    margin-top: 0rem!important;
    color: #FF9D29;
    background-color: #f1f0f0;
}
.hoss:hover{
    cursor: pointer;
}
.hoss_active{
    background-color: #333333;
}
</style>
