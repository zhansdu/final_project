<template>
    <div class="padding py-5">
        <div class="text_title">
            {{$t('instructor.info')}}
        </div>
        <div class="pt-5">
            <div class="red_box font-weight-bold">Requesting Unavailable Materials
            </div>
            <div class="row p-4 pl-5 font-weight-bold">
                <p>Interlibrary Loan Document Delivery is an outstanding service which allows accessing materials of another library, unavailable at SDU Scientific Library.<br><br>
                To request unavailable materials please, fill in the form below.<br><br>
                The SDU Scientific Library is honored to announce about partnership with the Library of Congress.<br><br>The Library of Congress does have more than 144 million items, which include more than 33 million cataloged books and other print materials in 460 languages; more than 63 million manuscripts; the largest rare book collection in North America; and the world's largest collection of legal materials, films, maps, sheet music and sound recordings.<br><br>
                source: &nbsp;<a href="https://www.loc.gov">https://www.loc.gov</a>

                </p>
            </div>
            <div class="row pl-4"><a href="https://docs.google.com/forms/d/e/1FAIpQLSeBdEPfvhh1kg8gPQ_C7pfNvshj2WGgNUtBGoqXZUxz1PeGCw/viewform">Interlibrary Loan Request Form</a></div>
        </div>
        <div class="col mt-5">
            <div class="red_box font-weight-bold">Moodle
            </div>
            <div class="row border m-3 mt--5">
                <div class="row justify-content-center font-weight-bold p-4">
                    <p class="text-uppercase">SDU Library developed a course for the SDU Community to provide relevant information about the services and facilities. </p>
                    <div class="row">
                        <div class="col"><img v-bind:src="moodlescreen" alt=""></div>
                        <div class="col pt-5"><img v-bind:src="moodleicon" alt=""></div>
                    </div>
                </div>
                <div class="row justify-content-center font-weight-bold p-4"><a href="https://moodle.sdu.edu.kz/login/" class="text-uppercase cursor-pointer">Access the course</a></div>
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
                showmore: add
			}
		},
	}
</script>

<style scoped>
.mt--5{
    margin-top: 0 !important;
    border-top: transparent i !important;
}
</style>