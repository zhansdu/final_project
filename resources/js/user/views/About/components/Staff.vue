<template>
    <div class="bg-lightgrey padding py-5">
        <div class="text_title">
            Staff
        </div>
        <div class="pt-3">
            <carousel-3d :controlsVisible="true" height="560" width="430" @after-slide-change="(num)=>{current_slide=num}">
                <slide class="transition" :class="{'bg-white':current_slide==index}" v-for="(member,index) in staff" :key="index" :index="index">
                    <div class="d-flex flex-column align-items-center">
                        <div class="my-3 font-weight-bold">
                            {{member.position}}
                        </div>
                        <div class="image">
                            <img :src="'./images/'+member.image+'.jpg'" />
                        </div>
                        <div class="my-2 text-blue">
                            {{member.name}}
                        </div>
                        <div class="align-self-start pl-4">
                            <div class="font-weight-bold my-1">
                                Contact :
                            </div>
                            <div class="font-size-14">  
                                {{member.mail}}
                                <br />
                                {{member.phone}}
                            </div>
                            <div class="font-weight-bold my-1">
                                Venue :
                            </div>
                            <div class="font-size-14">
                                {{member.venue}}
                            </div>
                        </div>
                    </div>
                </slide>
            </carousel-3d>
        </div>
    </div>
</template>
<script>
import { Carousel3d, Slide } from 'vue-carousel-3d';
export default{
    components:{Carousel3d, Slide},
    data(){
        return{
            current_slide:0,
            staff:[
                {
                    position:'Director of Scientific Library',
                    name:'Akbope Sikinbayeva',
                    image:'Akbope',
                    mail:'akbope.sikinbayeva@sdu.edu.kz',
                    phone:'+7 702 347 77 14',
                    venue:'Room B 204'
                },
                {
                    position:'Reference & Research Services Devision Head',
                    name:'Yelizaveta Kamilova',
                    image:'Yelizaveta',
                    mail:'yelizaveta.kamilova@sdu.edu.kz',
                    phone:'+7 775 931 31 35',
                    venue:'Room B 204'
                },
                {
                    position:'Specialist',
                    name:'Kumissay Hamitova',
                    image:'Kumissay',
                    mail:'kumissay.hamitova@sdu.edu.kz',
                    phone:'+7 747 672 84 17 (Int.457) ha ha eto moi nomer (#Zhan)',
                    venue:'Reading Room'
                },
                {
                    position:'Expert',
                    name:'Aray Tlekeyeva',
                    image:'Aray',
                    mail:'aray.tlekeyeva@sdu.edu.kz',
                    phone:'+7 747 672 84 17 (Int.115) ha ha eto moi nomer prikin (#Zhan)',
                    venue:'Reading Room'
                },
                {
                    position:'Expert',
                    name:'Togzhan Gabidinova',
                    image:'Togzhan',
                    mail:'togzhan.gabidinova@sdu.edu.kz ',
                    phone:'+7 (727) 307 9565 (Int. 115)',
                    venue:'Reading Room'
                }, 
            ]
        }
    }
}
</script>
<style scoped>
.image{
    width:60%;
}
.transition{
    transition:background-color .3s, transform 500ms ease 0s, opacity 500ms ease 0s, visibility 500ms ease 0s !important;
}
</style>
<style>
.carousel-3d-slide{
    border-radius: 5px !important;
}
</style>