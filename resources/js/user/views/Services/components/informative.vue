<template>
    <div class="padding py-5">
        <div class="text_title">
            INFORMATIVE
        </div>
        <div class="col mt-5">
            <div class="informative cursor-pointer  row mb-1" @click="show1()">
                <p class="font-weight-bold pl-3 pt-2">Moodle</p>
                <div class="col align-items-right" v-show="!showFlag1">
                    <a class="btn float-right"><img class="showmore" v-bind:src="add"></a>
                </div>
                <div class="col align-items-right" v-show="showFlag1">
                    <a class="btn float-right"><img class="showmore" v-bind:src="minus"></a>
                </div>
            </div>
            <div class="row transition hidden" :class="{'shown':showFlag1}">
                <div class="row justify-content-center font-weight-bold p-4">
                    <p class="text-uppercase">SDU Library developed a course for the SDU Community to provide relevant information about the services and facilities. </p>
                    <div class="row">
                        <div class="col"><img v-bind:src="moodlescreen" alt=""></div>
                        <div class="col pt-5"><img v-bind:src="moodleicon" alt=""></div>
                    </div>
                </div>
                <div class="row justify-content-center font-weight-bold p-4"><a href="https://moodle.sdu.edu.kz/login/" class="text-uppercase cursor-pointer">Access the course</a></div>
            </div>
            <div class="informative cursor-pointer row" @click="show2()">
                <p class="font-weight-bold pl-3 pt-2">Print / Scan / Copy</p>
                <div class="col align-items-right" v-show="!showFlag2">
                    <a class="btn float-right" ><img class="showmore" v-bind:src="add"></a>
                </div>
                <div class="col align-items-right" v-show="showFlag2">
                    <a class="btn float-right" ><img class="showmore" v-bind:src="minus"></a>
                </div>
            </div>
            <div class="row transition hidden" :class="{'shown':showFlag2}">
                <div class="row justify-content-center font-weight-bold p-4">
                    <p class="text-uppercase">There are 2 scanners on the 2nd floor of the library for users for photocopying and scanning purposes.<br><br> No printers are available in the library. </p>
                    <div class="row">
                        <div class="col print"><img v-bind:src="print2" alt=""></div>
                        <div class="col print pt-5"><img v-bind:src="print1" alt=""></div>
                    </div>
                </div>
                <div class="row justify-content-center font-weight-bold p-4"><p>Source: <a href="https://www.epson.eu/en/" class="text-uppercase cursor-pointer">https://www.epson.eu/en/</a></p></div>
            </div>
        </div>
    </div>
</template>
<script>
import add from '../../../assets/images/add.png'
import minus from '../../../assets/images/minus.png'
import moodleicon from '../../../assets/images/moodleicon.png'
import moodlescreen from '../../../assets/images/moodlescreen.png'
import print1 from '../../../assets/images/pcs1.png'
import print2 from '../../../assets/images/pcs2.png'
 
export default{
		data: function(){
			return{
                add: add,
                minus: minus,
                print1: print1,
                print2: print2,
                moodleicon: moodleicon,
                moodlescreen: moodlescreen,
                showFlag1: true,
                showFlag2: false,
                showmore: add
			}
		},
        methods:{
            show1(){
                this.showFlag1=!this.showFlag1
            },
            show2(){
                this.showFlag2=!this.showFlag2
            }
        }
	}
</script>

<style scoped>
.informative{
    background-color: #9F3428;
    color: white;
    border-radius: 5px;
}
.hidden{
    max-height:0px;
    overflow:hidden;
}
.shown{
    max-height:1000px;
}
</style>
