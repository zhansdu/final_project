<template>
	<div>
		<section id="nav">
			<div class="red_nav padding">
				<div class="cursor-pointer" @click="scrollTo(link,-50)" v-for="(link,index) in links" :key="index">{{$t(link)}}</div>
			</div>
		</section>
		<section id="instructor.ask">
			<Ask />
		</section>
		<section id="instructor.question">
			<Question />
		</section>
		<section id="instructor.faq">
			<FAQ />
		</section>
		<section id="instructor.informative">
			<Informative />
		</section>
	</div>
</template>
<script type="text/javascript">
	import Ask from './components/ask'
	import FAQ from './components/faq'
	import Informative from './components/informative'
	import Question from './components/question'
	import {scrollTo} from '../../mixins/goTo'
	export default{
		components:{
			Ask,FAQ,Informative,Question,
		},
		mixins:[scrollTo],
		data(){
			return{
				links:['instructor.ask','instructor.faq','instructor.informative','instructor.question'],
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