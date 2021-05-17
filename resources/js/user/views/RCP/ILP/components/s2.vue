<template>
    <div class="padding">
        <div class="text_title pt-5">
            SESSION 2: EVALUATING THE SOURCES
        </div>
        <section id="s1" class="pt-5">
            <div class="p-5 container-fluid backgroundd font-weight-bold text-uppercase">
                <p>Before you use or share any kind of information it is crucial to verify it. Apply and check all the information using the following models and tests.<br>Objectives</p>
            <ul>
                    <li>Stimulate users to seek for authoritative sources</li>
                    <li>Train to use research tools and indicators of authority to determine the credibility of sources</li>
                    <li>Develop awareness of the importance of assessing and critical thinking</li>
                </ul>
            </div>
        </section>
        <section id="s2">
            <div class="mb-5 mt-3">
                <div class="row" v-for="(link,index) in links" :key="index">
                    <div class="col py-5" v-for="(link,index) in link.links" :key="index">
                        <div class="row p-4 text-center">
                            <div class="red_box">
                                {{link.name}}
                            </div>
                            <div class="pl-5">
                                <img class="img-fluid" v-bind:src="link.img">
                            </div>
                            <div class="p-4">
                                <a class="cursor-pointer" :href="link.link" target="_blank">{{link.text}}</a>
                                <p v-if="link.text2==null">{{link.text2}}</p>
                                <p v-else>{{link.text2}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="s3" class="py-5">
            <div class="red_box">
                Useful Links
            </div>
            <div class="p-5 text-uppercase font-weight-bold">
                <div class="col" v-for="(text,index) in texts" :key="index">
                    <div class="row" v-for="(text,index) in text.texts" :key="index">
                        <div class="col">
                            <ul>
                                <li><a class="cursor-pointer" :href="text.link" target="_blank">{{text.t1}}</a></li>
                            </ul>
                            <p class="pl-4">{{text.t2}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script type="text/javascript">
import g1 from '../../../../assets/images/g1.png'
import g2 from '../../../../assets/images/g2.png'
import g3 from '../../../../assets/images/g3.png'
	export default{
		data(){
			return{
                links:[
                    {
                        links:[
                            {
                                name:'Apply 5W Questions to Your Source',
                                img: g1,
                                text: 'Source: https://www.turnitin.com/',
                                text2: null,
                                link:'https://www.turnitin.com/'
                            },
                            {
                                name:'Check the Credibility of Your Source Using This Guide',
                                img: g2,
                                text: 'Source: https://www.turnitin.com/',
                                text2: null,
                                link:'https://www.turnitin.com/'
                            },
                            {
                                name:'Evaluate Your Sources Using CRAAP Test',
                                img: g3,
                                text: 'Use the CRAAP Test Worksheet',
                                text2: 'Download and check your resources by applying CRAAP test',
                                link:'https://sdu-kz.libguides.com/ld.php?content_id=33439264'
                            }
                        ]
                    }
                ],
                texts:[
                    {
                        texts:[
                            {
                                t1: 'Evaluating Source Credibility Teacher Guide',
                                t2: 'The Evaluating Source Credibility pack consists of several resources ready to use in the classroom. Available for downloading.',
                                link: 'https://drive.google.com/file/d/1T4UrdNpxs9_GXCqDKwrKmeDU-Nd8Lc1W/view?usp=sharing'
                            },
                            {
                                t1: 'How to Spot Fake News',
                                t2: 'Find out the key features on recognizing fake news',
                                link: 'https://www.factcheck.org/2016/11/how-to-spot-fake-news/'
                            },
                            {
                                t1: 'Tips and Tricks for Evaluating Web Sites',
                                t2: 'What is a Credible Source? How to Evaluate Web Resources',
                                link: 'https://www.whoishostingthis.com/resources/credible-sources/'
                            },
                            {
                                t1: 'Evaluating Internet Resources',
                                t2: 'Unlike similar information found in newspapers or television broadcasts, information available on the Internet is not regulated for quality or accuracy; therefore, it is particularly important for the individual Internet user to evaluate the resource or information.',
                                link: 'https://www.library.georgetown.edu/tutorials/research-guides/evaluating-internet-content'
                            },
                            {
                                t1: 'Harvard Guide to Using Sources',
                                t2: 'This guide introduces you to the fundamentals of using sources in academic papers.',
                                link: 'https://usingsources.fas.harvard.edu/'
                            },
                        ]
                    }
                ]
			}
		}
	}
</script>
<style scoped>
    .backgroundd{
        background-color: #F4F4F4;
    }
</style>