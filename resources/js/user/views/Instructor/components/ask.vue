<template>
    <div class="padding">
        <div class="text_title pt-5">
            {{$t('instructor.ask_l')}}
        </div>
        <div class="row py-5">
            <div class="col-md-8 backgroundd">
                <div class="row" v-for="(link,index) in links" :key="index">
                    <div class="col py-5" v-for="(link,index) in link.links" :key="index">
                        <div class="row">
                            <div class="col-md-3"><img v-bind:src="link.img"></div>
                            <div class="col-md-7">
                                <div class="row"><router-link class="cursor-pointer" :to="{name:link.link}" target="_blank">{{link.name}}</router-link></div>
                                <div class="row text-center">{{link.description}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <p class="font-weight-bold">Upcoming library wokshops</p>
                <CalendarDiv :events="events" />
            </div>
        </div>
    </div>
</template>
<script>
import CalendarDiv from '../../Home/Events/CalendarDiv.vue'
import ask1 from '../../../assets/images/ask1.png'
import ask2 from '../../../assets/images/ask2.png'
import ask3 from '../../../assets/images/ask3.png'
import ask4 from '../../../assets/images/ask4.png'

export default {
  components: { CalendarDiv},
  data(){
        return{
            links:[
                {
                    links:[
                        {
                            img: ask1,
                            name:'Available during the working hours',
                            description:'+7 727 307 95 65 (Int. 457)',
                        },
                        {
                            img: ask2,
                            name:'Library Collection Development Policy',
                            description:'Research Consultations',
                            link:'research_consultations'
                        }
                    ]
                },
                {
                    links:[
                        {
                            img: ask3,
                            name:'Get help via email within a few hours',
                            description:'library@sdu.edu.kz'
                        },
                        {
                            img: ask4,
                            name:'Meet with the Librarian ',
                            link:'https://sdu-kz.libguides.com/sl_profiles/page',
                            description:'Unavailable at the moment'
                        }
                    ]
                }
            ],
            events:[]
        }
    },
    methods:{
        getEvents(){
            this.$http.get('/events/index').then(response=>{
                this.events=response.data.res;
            })
        },
    },
    created(){
        this.getEvents();
    }
}
</script>
<style scoped>
.backgroundd{
    background-color: #F4F4F4;
}
</style>
