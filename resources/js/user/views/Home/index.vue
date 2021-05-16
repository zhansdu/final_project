<template>
	<div>
		<!-- search-->
		<div class="homepage d-flex flex-column flex-wrap flex-xl-nowrap bg-blue padding py-5 static_height border-top border-blue">
			<div class="col-md-6 p-0">
                <div class="font-size-32 text-white font-weight-bold my-4 text-center"  v-html="$t('welcome_lib')"></div>
                <div class="d-flex flex-column w-100 mt-5">
                    <Search class="pt-4 pb-4 col-md-12 col-xl-11 px-0 flex-0 text-white search-width align-self-left" />
                </div>
            </div>


		</div>
		<!-- upcoming events -->
		<div class="padding py-5">
			<div class="d-flex justify-content-between">
				<span class="font-size-32 font-weight-bold">{{$t('upcoming_events').toUpperCase()}}</span>
				<a href="https://sdu-kz.libguides.com/about_us/reports" target="_blank" class="d-flex align-items-center link text-blue">
					{{$t('lib_digest')}}
					<span class="ml-2 font-size-14">
						<right-normal />
					</span>
				</a>
			</div>
			<div class="d-flex align-items-start mt-5 ">
				<calendar-div class="mr-4" :events="events" />
				<slide-events v-if="!$mobileCheck()" :number="events.length>2 ? 2:events.length!=0 ? events.length:1" :events="events" />
			</div>
		</div>
		<!-- library's video content -->
		<div class="bg-lightgrey padding py-5">
			<span class="font-size-32 font-weight-bold" v-html="$t('vid_content').toUpperCase()" />
			<div class="mt-3">
				{{$t('video_content')}}
			</div>
			<div class="d-flex justify-content-between mt-3">
				<div class="flex-wrap d-flex flex-xl-nowrap w-100">
					<iframe class="videos mr-3 w-100" src="https://www.youtube.com/embed/IS3jYEzgb4A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<iframe class="videos mr-3 mt-3 mt-xl-0 w-100" src="https://www.youtube.com/embed/KMGDDYt2Zvs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="d-none d-lg-flex align-items-center">
					<img src="images/Video.svg">
				</div>
			</div>
			<div class="mt-5">
				<a class="link text-blue" href="https://www.youtube.com/channel/UCmuuTTBkfi8aUgUc56VY8kA" target="_blank">
					{{$t('see_all_videos')}}
					<span class="ml-2 "><right-normal /></span>
				</a>
			</div>
		</div>
		<!-- FAQ -->
        <div class="sect1 col-md-12 d-flex padding py-3 flex-wrap">
            <div class="col-12 col-md-6 pr-3 p-lg-0 mt-5">
                <div class="font-size-32 font-weight-bold">
                    FAQ
                </div>
                <div class="mt-5 font-size-18 font-weight-bold">{{$t('faq_question')}}</div>
                <div class="mt-1 font-size-14">{{$t('faq_answer')}}</div><br>
                <form class="llable" @submit.prevent="search()">
                    <input class="ltext" type="text" placeholder="Write question" v-model="question" >
                    <button class="lbutton">{{$t('search')}}</button>
                </form><br><br>
                <button @click="showModal(Question)">{{$t('ask_que')}}</button>
            </div>
            <div class="col-12 col-md-6 pr-3 p-lg-0 mt-5">
                <div class="cardD">
                    <div class="lists" v-for="(faq,index) in faqs" :key="index">
                        <h6>{{faq.question}}</h6>
                        <p v-html="faq.answer"></p>
                        <p class="topicin">{{faq.topic}}</p>
                    </div>
                    <hr>
                    <div class="text-center listsall">
                        <a href="javascript:;" @click="goTo('faqs')">{{$t('seeall')}} -></a>
                    </div>

                </div>
            </div>

        </div>
	</div>
</template>
<script type="text/javascript">
    import modal from "../../mixins/modal";
    import Question from "../Faqs/question"
	// components
	import Search from '../Search/search'
	import Chat from './Chat/'
	import SlideEvents from './Events/slide_events'
	import CalendarDiv from './Events/CalendarDiv'

	// icons
	import RightNormal from '../../assets/icons/RightNormal'

	import {goTo} from '../../mixins/goTo'
	export default{
		mixins:[goTo, modal],
		components:{Search,RightNormal,SlideEvents,CalendarDiv},
		data(){
			return{
				events:[],
				faqs:[],
				question:'',
                Question:Question
			}
		},
		methods:{
			loadScript(src){
				let externalScript = document.createElement('script');
				externalScript.setAttribute('src', src)
				document.head.appendChild(externalScript)
			},
			loadExternalLibGuideScripts(){
				let srcs=[];
				// faq questions
				srcs[0]='https://sdu-kz.libanswers.com/1.0/widgets/7614';
				// faq answers
				srcs[1]='https://sdu-kz.libanswers.com/1.0/widgets/7615';
				// chat
				srcs[2]='https://sdu-kz.libanswers.com/load_chat.php?hash=591323eae0c67c543ac18bf22cf2e1a7';
				srcs.forEach(item=>{
					this.loadScript(item);
				});
			},
			getEvents(){
				this.$http.get('/events/index').then(response=>{
					this.events=response.data.res;
				})
			},
			getFaqs(){
				this.$http.get('/faq/index?max='+5).then(response=>{
					this.faqs=response.data.res
				})
			},
			search(){
				this.goTo('faqs',{question:this.question});
			}
		},
		created(){
			this.getEvents();
			this.getFaqs();
		},
		mounted(){
			this.loadExternalLibGuideScripts();
		}
	}
</script>
<style scoped>
.homepage{
    width: 100%;
    height: 100vh;
    background: url("back.png");
    background-size: cover;
}
.sect1{
    margin-bottom: 10%;
}
.cardD{
    height: 100%;
    width: 100%;
    background-color: #ffffff;
    border: 1px solid #C4C6CA;
    border-radius: 5px;
    box-sizing: border-box;
    padding: 5%;
}
.lists h6{
    color: #FF9D29;
}
.lists p{
    color: #333333;
}
.lists .topicin{
    font-size: 80%;
    color: #979797;
}
.calendar{
	border:none;
	height:300px;
}
.videos{
	height:18em;
}
.static_height{
	height:43.75em;
}
.border-blue{
	border-color:#1B3A75 !important;
}
.llable{
    position: relative;
    display: inline-block;
    margin-bottom: 0;
}
.ltext{
    border: 1px solid #C4C6CA;
    width: 350px;
    height: 45px;
    padding: 0 15px;
}
.lbutton{
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    background: #FF9D29;
    color: #FFFFFF;
    padding: 0 15px;
    letter-spacing: 1.2px;
    border: none;
}
.listsall a{
    cursor: pointer;
}
.search-width{
	width:100%;
}
</style>
