<template>
	<div ref="slide_events" class="position-relative d-none d-lg-flex align-items-center w-min-0 w-100">
		<div class="overflow-hidden w-100">
			<div ref="events" class="d-flex align-items-start justify-content-between transition">
				<div v-for="(event,index) in events" :key="index" class="bg-lightgrey rounded flex-shrink-0 transition" :class="index==events.length-1 ? 'ml-2' : 'mr-2'" :style="{width:itemWidth+ 'px'}">
					<div class="d-flex p-3">
						<div class="mr-5 d-flex flex-column">
							<span class="font-size-32">{{toDate(event).getDate()}}</span>
							<span class="mt-2">{{toDate(event).toLocaleString('default', { month: 'long' })}}</span>
						</div>
						<div class="text-grey font-size-14 d-flex flex-column justify-content-around">
							<div>{{event.place}}</div>
							<div>{{time(event)}}</div>
						</div>
					</div>
					<div class="bg-grey my-3 height-1" />
					<div class="m-2 little_description" v-html="event.little_description" v-if="event.little_description"/>
					<div class="bg-grey my-3 height-1" v-if="event.little_description" />
					<div class="p-3 font-weight-bold font-size-20">{{event.name}}</div>
				</div>
			</div>
		</div>
		<div class="left_button rotate cursor-pointer" @click="move(-1)" v-if="current_item!=0">
			<right-little />
		</div>
		<div class="right_button cursor-pointer" @click="move(1)" v-if="current_item!=(events.length-this.number)">
			<right-little />
		</div>
	</div>
</template>
<script type="text/javascript">
// identication in sublime text 3
// icons
import RightLittle from '../../../assets/icons/RightLittle'

export default{
	props:{
		events:{
			type:Array,
			default(){
				return [1,2]
			}
		},
		number:{
			type:[Number,String],
			default(){
				return 3
			}
		}
	},
	components:{RightLittle},
	data(){
		return{
			current_item:0,
			itemWidth:''
		}
	},
	methods:{
		move(num){
			let events = this.$refs['events'];
			if((this.current_item+num)>=0 && (this.current_item+num+this.number)<=this.events.length){
				this.current_item+=num;
				events.style.transform="translateX("+(-this.current_item*this.itemWidth + (-this.current_item*10)) +'px) translateY(0px)';
			}
		},
		changeItemWidth(){
			setTimeout(()=>{
				let parent=this.$refs['slide_events'];
				this.itemWidth=((parent.offsetWidth - (this.number-1)*10))/this.number;
			},300)
		},
		resize(){
			this.changeItemWidth();
			setTimeout(()=>{
				this.move(0);
			},310)
		},
		toDate(event){
			let date=new Date(event.date);
			return date;
		},
		time(event){
			return event.time.slice(0,-3)
		}
	},
	beforeMount(){
		window.addEventListener("resize", this.resize);
	},
	mounted(){
		this.resize();
	},
	destroyed() {
		window.removeEventListener("resize", this.resize);
	}
}
</script>
<style scoped>
.right_button,.left_button{
	position: absolute;
	width:3em;
	height:3em;
	border-radius: 50%;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: white;
	box-shadow: 0 0.125em 0.625em rgba(141, 155, 164, 0.32);
}
.right_button{
	right:-1.5em;
}
.left_button{
	left:-1.5em;
}
.height-1{
	height:1px;
}
.little_description >>> img{
	width: 99%;
}
</style>