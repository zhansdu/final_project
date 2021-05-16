<template>
    <div>
        <section id="nav">
            <div class="red_nav padding">
                <div class="cursor-pointer" @click="scrollTo(link,-50)" v-for="(link,index) in links" :key="index">{{$t(link)}}</div>
            </div>
        </section>
        <section id="itr.itr">
            <ITR/>
        </section>
        <section id="itr.pyr">
            <PYR />
        </section>
        <section id="itr.ss">
            <SS />
        </section>
        <section id="itr.wts">
            <WTS />
        </section>
    </div>
</template>
<script type="text/javascript">
import ITR from './components/ITR'
import PYR from './components/PYR'
import SS from './components/SS'
import WTS from './components/WTS'
import {scrollTo} from '../../../mixins/goTo'
export default{
    components:{
        ITR,PYR,SS,WTS
    },
    mixins:[scrollTo],
    data(){
        return{
            links:['itr.itr','itr.pyr','itr.ss','itr.wts']
        }
    }
}
</script>