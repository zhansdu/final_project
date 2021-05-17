<template>
	<div>
		<section id="nav">
			<div class="red_nav padding">
				<div class="cursor-pointer" @click="scrollTo(link,-50)" v-for="(link,index) in links" :key="index">{{$t(link)}}</div>
			</div>
		</section>
		<section id="instructor.ask_l">
			<Ask />
		</section>
		<section id="instructor.faq">
			<FAQ />
		</section>
		<section id="instructor.info">
			<Informative />
		</section>
	</div>
</template>
<script type="text/javascript">
	import Ask from './components/ask'
	import FAQ from './components/faq'
	import Informative from './components/informative'
	import {scrollTo} from '../../mixins/goTo'
	export default{
		components:{
			Ask,FAQ,Informative
		},
		mixins:[scrollTo],
		data(){
			return{
				links:['instructor.ask_l','instructor.faq','instructor.info'],
            }
		}
	}
</script>
<style scoped>
.header{
	color: #333;
	font-family: 'Roboto', sans-serif;
	font-weight: 400;
	font-style: italic;
}
</style>