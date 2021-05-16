<template>
	<div>
		<section id="nav">
            <div class="red_nav padding justify-content-between">
                <div class="cursor-pointer" @click="current=index" v-for="(link,index) in links" :key="index">{{$t(link)}}</div>
            </div>
        </section>
		<component :is="components[current]" />
	</div>
</template>
<script>
const links=['ilp.about','ilp.s1','ilp.s2','ilp.s3']
import About from './components/About'
import s1 from './components/s1'
import s2 from './components/s2'
import s3 from './components/s3'
export default {
	data(){
		return{
			links,
			current:0,
			components:[About,s1,s2,s3]
		}
	}
}
</script>