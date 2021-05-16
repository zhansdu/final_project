<template>
    <div class="padding bg-lightgrey py-5">
        <div class="text_title">
            MORE SERVICES
        </div>
        <div class="bg-white mt-5 p-5">
            <h4 >{{title1}}</h4>
            <div class="font-weight-bold">
                <div class="mt-5">
                    <p>INTERLIBRARY LOAN DOCUMENT DELIVERY IS AN OUTSTANDING SERVICE WHICH ALLOWS ACCESSING MATERIALS OF ANOTHER LIBRARY, UNAVAILABLE AT SDU SCIENTIFIC LIBRARY.<br><br></p>
                </div>
                <div class="transition hidden" :class="{'shown':showFlag1}">
                    <p>To request unavailable materials please, fill in the form below. <br><br>
                    The SDU Scientific Library is honored to announce about partnership with the Library of Congress. <br><br>
                    The Library of Congress does have more than 144 million items, which include more than 33 million cataloged books and other print materials in 460 languages; more than 63 million manuscripts; the largest rare book collection in North America; and the world's largest collection of legal materials, films, maps, sheet music and sound recordings. <br><br>source: <a href="https://www.loc.gov" class="cursor-pointer">https://www.loc.gov <br><br><br></a></p>
                    <a href="" class="cursor-pointer">Interlibrary Loan Request Form</a>
                </div>
                <div class="cursor-pointer row justify-content-center"  @click="show1()">
                    <a class="btn"><p class="text-blue">Show {{showFlag1?'less' : 'more'}}<br><img class="transition" :class="{rotate:showFlag1}" v-bind:src="showmore"></p></a>
                </div>
            </div>
        </div>
        <div class="bg-white mt-5 p-5">
            <h4 class="">{{title2}}</h4>
            <div class="font-weight-bold">
                <div class="mt-5">
                    <p>THIS SECTION ALLOWS STUDENTS AND STAFF TO RECOMMEND A TITLE ( A BOOK, JOURNAL OR OTHER MEDIA).<br><br></p>
                    
                </div>
                <div class="transition hidden" :class="{'shown':showFlag2}">
                    <p>If you would like to recommend any items to the library to purchase please fill in the form below.The Service is available to:<br><br>
                    <ul class="list-inline">
                        <li>&nbsp;&nbsp;  -Teaching staff</li>
                        <li>&nbsp;&nbsp; -Students</li>
                        <li>&nbsp;&nbsp; -University admin staff</li>
                        <li>&nbsp;&nbsp; -University staff</li>
                    </ul><br>The request will be processed by the library staff and you will be notified according to the decision on purchase.<br>
                    Before filling out this form, please double check that the library does not have access to the materials you are requesting at <a href="https://library.sdu.edu.kz/">https://library.sdu.edu.kz/</a><br>
                    The following items can be ordered:<br><br>
                    <ul class="list-inline">
                        <li>&nbsp;&nbsp; -Books</li>
                        <li>&nbsp;&nbsp; -Online Journals</li>
                        <li>&nbsp;&nbsp; -Online Databases</li>
                        <li>&nbsp;&nbsp; -Media</li>
                        <li>&nbsp;&nbsp; -Other library items</li>
                    </ul><br>For any assistance or questions, send email to library@sdu.edu.kz
                    Your email address will be recorded when you submit this form.
                    </p>
                    <a href="" class="cursor-pointer">FILL IN THE FORM</a>
                </div>
                <div class="cursor-pointer row justify-content-center"  @click="show2()">
                    <a class="btn"><p class="text-blue">Show {{showFlag2?'less' : 'more'}}<br><img class="transition" :class="{rotate:showFlag2}" v-bind:src="showmore"></p></a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import showmore from '../../../assets/images/showmore.png'
export default{
		data: function(){
			return{
                showmore: showmore,
                title1: 'INTERLIBRARY LOAN',
                title2: 'RECOMMEND A TITLE',
                showFlag1: false,
                showFlag2: false,
                img: showmore
			}
		},
        methods:{
            show1(){
                this.showFlag1=!this.showFlag1;
            },
            show2(){
                this.showFlag2=!this.showFlag2;
            }
        }
	}
</script>
<style scoped>
.hidden{
    max-height:0px;
    overflow:hidden;
}
.shown{
    max-height:1000px;
}
</style>