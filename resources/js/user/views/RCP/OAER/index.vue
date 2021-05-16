<template>
	<div>
		<section id="nav">
			<div class="red_nav padding">
				<div class="cursor-pointer" @click="scrollTo(link,-50)" v-for="(link,index) in links" :key="index">{{$t(link)}}</div>
			</div>
		</section>
		<section id="oaer.about">
			<AboutOer />
		</section>
		<section id="oaer.finding">
			<FindingOer />
		</section>
	</div>
</template>
<script type="text/javascript">
	import AboutOer from './components/about_oer'
	import FindingOer from './components/finding_oer'
	import {scrollTo} from '../../../mixins/goTo'
	export default{
		components:{
			AboutOer,FindingOer
		},
		mixins:[scrollTo],
		data(){
			return{
				links:['oaer.about','oaer.finding']
			}
		}
	}
</script>