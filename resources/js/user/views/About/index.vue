<template>
	<div>
		<section id="nav">
			<div class="red_nav padding">
				<div class="cursor-pointer" @click="scrollTo(link,-50)" v-for="(link,index) in links" :key="index">{{$t(link)}}</div>
			</div>
		</section>
		<section id="header">
			<div class="padding">
				<div class="row">
					<div class="col-lg-12 text-center header">
						<h2 class="section-heading text-uppercase py-5">LIBRARY CONNECTS PEOPLE TO PEOPLE, PEOPLE TO PLACE,<br>PEOPLE TO LEARNING. DISCOVER. CONNECT. INSPIRE</h2>
					</div>
				</div>
			</div>
		</section>
		<section id="about_page.history">
			<History />
		</section>
		<section id="about_page.staff">
			<Staff />
		</section>
		<section id="about_page.BAV">
			<BAV />
		</section>
		<section id="about_page.polices">
			<Polices />
		</section>
		<section id="about_page.reports">
			<Reports />
		</section>
	</div>
</template>
<script type="text/javascript">
	import History from './components/History'
	import Staff from './components/Staff'
	import BAV from './components/BAV'
	import Polices from './components/Polices'
	import Reports from './components/Reports'
	import {scrollTo} from '../../mixins/goTo'
	export default{
		components:{
			History,Staff,BAV,Polices,Reports
		},
		mixins:[scrollTo],
		data(){
			return{
				links:['about_page.history','about_page.staff','about_page.BAV','about_page.polices','about_page.reports']
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