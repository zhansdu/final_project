<template>
	<div>
		<section id="nav">
			<div class="red_nav padding">
				<div class="cursor-pointer" @click="scrollTo(link,-50)" v-for="(link,index) in links" :key="index">{{$t(link)}}</div>
			</div>
		</section>
		<section id="Borrow / Return">
			<Borrowreturn />
		</section>
		<section id="More Services">
			<Moreservices />
		</section>
		<section id="Informative">
			<Informative />
		</section>
	</div>
</template>
<script type="text/javascript">
	import Borrowreturn from './components/borrow_return'
	import Moreservices from './components/more_services'
	import Informative from './components/informative'
	import {scrollTo} from '../../mixins/goTo'
	export default{
		components:{
			Borrowreturn,Moreservices,Informative
		},
		mixins:[scrollTo],
		data(){
			return{
				links:['Borrow / Return','More Services','Informative']
			}
		}
	}
</script>