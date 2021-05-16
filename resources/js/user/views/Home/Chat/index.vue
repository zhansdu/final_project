<template>
	<div ref="parent" class="parent bg-white transition hoverable">
		<div class="d-flex align-items-center cursor-pointer h-100" @click="showChat()" v-if="!chatShown">
			<span class="d-flex text-orange font-size-20 justify-content-center align-items-center flex-shrink-0 transition chat_icon">
				<component :is="Chat"/>
			</span>
			<span refs="ask" class="mr-3 text-no-wrap ml-3">{{$t('ask_a_librarian')}}</span>
		</div>
		<div class="h-100 d-flex flex-column" v-else>
			<div class="d-flex justify-content-between p-4">
				<div class="font-weight-bold">{{$t('chat_librarian')}}</div>
				<div @click="close()" class="cursor-pointer"><Times /></div>
			</div>
			<div class="height-1 w-100 bg-lightgrey"/>
			<div class="p-4" v-if="!adminOnline">Sorry, chat is offline</div>
			<div class="d-flex align-items-center justify-content-center flex-fill" v-else>
				<form  @submit.prevent="connect()" class="border rounded col-10 p-3" v-if="!chatting">
					<input class="w-100" type="text" placeholder="Name" v-model="user.name">
					<input class="w-100 mt-2" type="text" placeholder="Department" v-model="user.department">
					<input class="w-100 mt-2" type="text" placeholder="Mail" v-model="user.mail">
					<button class="w-100 mt-5" type="submit">Start chat</button>
				</form>
				<div class="d-flex flex-column flex-fill fill mx-3 mb-3" v-else>
					<div class="ml-auto my-1 cursor-pointer" @click="disconnect()">
						x &nbsp;&nbsp;&nbsp;Disconnect
					</div>
					<div class="d-flex flex-column flex-fill border">
						<div id="messages" class="p-2 overflow-auto w-100">
							<div class="d-flex flex-column px-2" v-for="(message,index) in messages">
								<div class="message align-self-start" :class="{'align-self-end user':message.from!='admin'}">
									<span class="my-2 font-size-10">
										{{message.time}}
									</span>
									<span class="d-block text-left" :class="{'text-right':message.from!='admin'}">
										{{message.message}}
									</span>

								</div>
							</div>
						</div>
						<div class="mt-auto">
							<div class="height-1 w-100 border-top"></div>
							<form class="d-flex" @submit.prevent="sendMessage()">
								<input class="border m-2 rounded-0" type="text" placeholder="Message" v-model="chat.message" />
								<button type="submit" class="text-orange ml-auto cursor-pointer bg-white">send &nbsp;&nbsp;&nbsp;-></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script type="text/javascript">
// icons
import Chat from '../../../assets/icons/Chat'
import Times from '../../../assets/icons/Times'

export default{
	components:{
		Times
	},
	data(){
		return{
			Chat:Chat,
			chatShown:false,
			adminOnline:false,
			user:{
				name:'',
				department:'',
				mail:''
			},
			chat:{
				mail:'',
				message:'',
			},
			chatting:false,
			messages:[],
			token:''
		}
	},
	methods:{
		showChat(){
			this.chatShown=true;
			this.$refs['parent'].classList.remove('hoverable');
			this.$refs['parent'].classList.add('chat');
		},
		close(){
			this.chatShown=false;
			this.$refs['parent'].classList.remove('chat');
			setTimeout(()=>{
				this.$refs['parent'].classList.add('hoverable');
			},400);
		},
		addMessage(data){
			if(data.to==this.token || data.from == this.token){
				this.messages.push(data);
				var messageBody = document.getElementById('messages');
				messageBody.scrollTop = messageBody.scrollHeight;
			}
		},
		sendMessage() {
			if(this.chat.message!=''){
				this.chat.from=this.token;
				this.chat.to='admin';
				let now=new Date();
				let time='';
				time+=now.getHours()+' : '+now.getMinutes();
				this.chat.time=time;
				this.$http.post('/chat/send-message',this.chat);
				this.chat.message='';
			}
		},
		connect(){
			this.user.token=this.token;
			this.user.connected=true;
			this.$http.post('/chat/connect',this.user);
			this.chatting=true;
		},
		disconnect(){
			this.user.connected=false;
			this.user.token=this.token;
			this.$http.post('/chat/connect',this.user);
			this.chatting=false;
			this.chat={
				name:'',
				department:'',
				mail:'',
				message:'',
			}
			this.messages=[]
		}
	},
	mounted() {
		this.token=document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		socket.on("chat", function(data){
			this.addMessage(data);
		}.bind(this));
		socket.on("isAdminOnline",(data)=>{
			this.adminOnline=data;
		})
	}
}	
</script>
<style scoped>
.parent{
	position: fixed;
	bottom:3.125em;
	right:3.125em;
	z-index: 2;
	max-width: 3.75em;
	height:3.75em;
	overflow: hidden;
	border-radius: 3.125em;
	box-shadow: 0 0.25em 0.625em rgba(141, 155, 164, 0.6);
	width:3.75em;
}
.hoverable{
	width:unset;
}
.hoverable:hover{
	max-width: 18em;
	width:unset;
}
.hoverable:hover .chat_icon{
	transform:rotate(-360deg);
	color:white !important;
	background-color: #ff9d29;
}
.chat_icon{
	width: 3.125em;
	height:3.125em;
	border-radius: 3.125em;
}

.chat{
	height: 28.125em;
	width: 25em;
	background-color: white;
	border-radius: 0;
	border-top-right-radius: 1.875em;
	border-top-left-radius: 1.875em;
	box-shadow: 0 0.25em 1.875em rgba(141, 155, 164, 0.6);
	max-width: 62.5em;
}
.pd-30{
	padding:1.875em;
}
.close{
	max-width: 3.75em;
}
.hidden{
	display: none;
}
.height-1{
	height: 1px;
}
.fill{
	height: -webkit-fill-available;
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
.user{
	background-color: blue;
	color:white;
}
#messages{
	max-height: 282px
}
</style>