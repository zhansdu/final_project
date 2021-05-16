<template>
    <div class="mt-5">
        <div class="text_title text-uppercase">PLANING YOUR RESEARCH</div>
        <div class="padding my-5">
            <div class="pyr row justify-content-between">
                <div class="red_box row">Choosing a Topic</div>
                <div class="col-md-6 p-5">
                    <ul>
                        <li>Understand the assignment requirements! Read it carefully!</li>
                        <li>Make sure that you are interested in your topic.</li>
                        <li>Keep in mind that research topic may change.</li>
                        <li>Think of possible topics.</li>
                        <li>What was already written about your topic?</li>
                        <li>Narrow down or Broaden your topic.</li>
                        <li>Use the graph as a sample to test your topic.</li>
                        <li>Use the worksheet to strength your topic.</li>
                    </ul>
                </div>
                <div class="col-md-6 p-5">
                    <img class="img-fluid" v-bind:src="imagePYR">
                </div>
            </div>
        </div>
        <div class="padding my-5">
            <div class="pyr row justify-content-between">
                <div class="col-md-6">
                    <div class="red_box row">Develop a Research Question</div>
                    <img class="img-fluid" v-bind:src="imagePYR2">
                </div>
                <div class="col-md-6">
                    <div class="red_box row">Steps to Follow</div>
                    <ul class="p-5">
                        <li>Understand the assignment requirements! Read it carefully!</li>
                        <li>Make sure that you are interested in your topic.</li>
                        <li>Keep in mind that research topic may change.</li>
                        <li>Think of possible topics.</li>
                        <li>What was already written about your topic?</li>
                        <li>Narrow down or Broaden your topic.</li>
                        <li>Use the graph as a sample to test your topic.</li>
                        <li>Use the worksheet to strength your topic.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="padding my-5">
            <div class="pyr row justify-content-between">
                <div class="col-md-8">
                    <div class="red_box row">Create a Mind-Map</div>
                    <img class="img-fluid p-5" v-bind:src="imagePYR3">
                    <p align="justify" class="p-5">Mind-Map Free Tool <br>
                        Use the mind-map tool to create your own strategy and as a starting point of your research project</p>
                </div>
                <div class="col-md-4">
                    <div class="red_box row">Research Pathway</div>
                    <img class="img-fluid p-5" v-bind:src="imagePYR4">
                </div>
            </div>
        </div>
    </div>
</template>
<script type="text/javascript">
import imagePYR from '../../../../assets/images/topic.png'
import imagePYR2 from '../../../../assets/images/pyr.png'
import imagePYR3 from '../../../../assets/images/pyr3.png'
import imagePYR4 from '../../../../assets/images/pyr4.png'
export default{
    data(){
        return{
            imagePYR,
            imagePYR2,
            imagePYR3,
            imagePYR4
        }
    }
}
</script>
