<template>
	<div>
		<section id="nav">
			<div class="red_nav padding">
				<div class="cursor-pointer" @click="scrollTo(link,-50)" v-for="(link,index) in nav_links" :key="index">{{$t(link)}}</div>
			</div>
		</section>
		<section id="research.services">
			<div class="padding">
				<div class="text_title m-5">
					{{$t('research.services')}}
				</div>
				<div class="bg-lightgrey shadowed rounded p-5 mb-5">
					<ul>
						<li>PROVIDE TRAINING AND SUPPORT ON BIBLIOMETRICS INCLUDING JOURNAL IMPACT MEASURES, H-INDEX AND ALTMETRICS</li>
						<li>PROVIDE SUPPORT ON MEASURING YOUR RESEARCH IMPACT AND TRACKING YOUR CITATIONS</li>
						<li>ADVISE ON AUTHOR/PUBLISHER COPYRIGHT PERMISSIONS REGARDING OPEN ACCESS PUBLISHING</li>
						<li>PROVIDE CITATION MANAGER TOOL TRAINING AND SUPPORT</li>
					</ul>
				</div>
			</div>
		</section>
		<section id="research.guides">
			<div class="padding bg-lightgrey py-5">
				<div class="text_title mb-5">
					{{$t('research.guides')}}
				</div>
				<div class="bg-white mb-5">
					<router-link :to="{name:link.link}" class="d-block text_link cursor-pointer" v-for="(link,index) in page_links" :key="index">{{$t(link.name).toUpperCase()}}</router-link>
				</div>
			</div>
		</section>
	</div>
</template>
<script type="text/javascript">
	const nav_links=['research.services','research.guides']
	const page_links=[
	{
		name:'research.ilp',
		link:'ilp'
	},
	{
		name:'research.itr',
		link:'itr'
	},
	{
		name:'research.oaer',
		link:'oaer'
	}]
	import {scrollTo} from '../../mixins/goTo'
	export default{
		mixins:[scrollTo],
		data(){
			return {
				nav_links,
				page_links
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
ul{
	padding:0!important;
}
li{
	margin-bottom: .5em;
}
.shadowed{
	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.text_link{
	width:100%;
	padding:2em;
	text-align: center;
	border:1px solid black;
	color: #1B3A75;
	margin:-1px 0;
}
</style>