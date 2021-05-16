<template>
    <div class="padding">
        <div class="text_title pt-5">
            ABOUT OERS
        </div>
        <div class="container-fluid py-5">
            <div class="row backgroundd p-2 pl-4">
                <h6>WHAT OER MEANS?</h6>
            </div>
            <div class="row p-5">
                <p class="text-uppercase">Open Educational Resources (OER) are teaching, learning and research materials in any medium – digital or otherwise – that reside in the public domain or have been released under an open license that permits no-cost access, use, adaptation and redistribution by others with no or limited restrictions.<br> OER form part of ‘Open Solutions’, alongside Free and Open Source software (FOSS), Open Access (OA), Open Data (OD) and crowd sourcing platforms.<br><br>Source: 
                <a class="cursor-pointer" href="https://en.unesco.org/">https://en.unesco.org/</a></p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 borderr">
                        <div class="text-center pt-2">
                            <p class="font-weight-bold">Librarian</p>
                            <img class="img-fluid" v-bind:src="t2">
                            <p>Yelizaveta Kamilova</p>
                        </div>
                        <div class="p-5">
                            <p class="font-weight-bold">Contact</p>
                            <pre>1/1 Abylaikhan Street, Kaskelen
040900 Almaty, Kazakhstan
yelizaveta.kamilova.sdu.edu.kz

   +7 (775) 9318135</pre>
                            <p class="font-weight-bold">Subjects:</p>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <h6 class="backgroundd p-2 pl-4">COPYRIGHT</h6>
                            <p class="text-uppercase text-center">OERs are subject to Creative Commons Licensing. </p>
                        </div>
                        <div class="col">
                            <div class="row" v-for="(link,index) in links" :key="index">
                                <div class="col m-2" v-for="(link,index) in link.links" :key="index">
                                    <div class="h-100 w-100 col font-weight-bold">
                                        <div class="col align-items-center p-2">
                                            <div class="row p-2 borderr bg-grey">
                                                <img v-bind:src="link.img">
                                            </div>
                                            <div class="row p-2 borderr">
                                                <p>{{link.text}}</p>
                                            </div>                                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-uppercase text-center">Attribution: Text a derivative of Creative Commons License web page.<br>Source: <a href="https://creativecommons.org/">https://creativecommons.org/</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col text-center">
                    <h6 class="text-left backgroundd p-2 pl-4 text-uppercase">Permissions on OERs use</h6>
                    <img class="img-fluid" v-bind:src="t4">
                </div>
                <div class="col text-center">
                    <img class="img-fluid" v-bind:src="t3">
                    <p class="text-uppercase font-weight-bold">Attribution: [Georgia State University] (n.d) Quick Guide to Open Educational Resources (OERs) infographic (CC_BY_NC license).</p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import t2 from '../../../../assets/images/t2.png'
import copy1 from '../../../../assets/images/copy1.png'
import copy2 from '../../../../assets/images/copy2.png'
import copy3 from '../../../../assets/images/copy3.png'
import copy4 from '../../../../assets/images/copy4.png'
import copy5 from '../../../../assets/images/copy5.png'
import copy6 from '../../../../assets/images/copy6.png'
import t3 from '../../../../assets/images/oer_guide.png'
import t4 from '../../../../assets/images/oer-infographic.png'
export default{
		data(){
			return{
				t2, t3, t4,
                links:[
                    {
                        links:[
                            {
                                img: copy1,
                                text:  'Attribution (BY): Allow to copy, adapt, modify, share the work as long as the original creators are credited for any  purposes. ',
                            },
                            {
                                img: copy2,
                                text:  'Attribution (BY) - Share Alike (SA): All rights as Attribution (BY) license and new creations have to be licensed under same terms as the original work. ',
                            },
                            {
                                img: copy3,
                                text:  'Attribution (BY) - No Derives (ND): Allow to copy, share but keep the work unchanged and in whole for any purposes.​',
                            },
                            {
                                img: copy4,
                                text:  'Attribution (BY) - Non-commercial (NC): Allow  to copy, adapt, modify, share the work for non-commercial purposes only.',
                            },
                            {
                                img: copy5,
                                text:  'Attribution (BY) - Non-commercial (NC) - Share Alike (SA): All rights as Attribution (BY)-Share Alike (SA) license but for non-commercial purposes only.',
                            },
                            {
                                img: copy6,
                                text:  'Attribution (BY) - Non-commercial (NC) - No Derives (ND): All rights as Attribution (BY) - No Derives (ND) license but for non-commercial purposes only.',
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
    background-color: #9F3428;
    color: white;
    border-radius: 5px;
    }
    .borderr{
        border: 1px solid black;
    }
</style>