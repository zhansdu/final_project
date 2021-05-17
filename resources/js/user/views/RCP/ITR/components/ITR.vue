<template>
    <div class="mt-5">
        <div class="text_title text-uppercase">INTRODUCTION TO RESEARCH</div>
        <div class="padding my-5">
            <div class="itr row justify-content-between">
                <iframe width="1400" height="700" src="https://www.youtube.com/embed/EEuul8hBip8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="w-50 d-flex flex-column pt-5">
                    <div class="red_box">Research Terms Definition</div>
                    <div id="demo" class="carousel slide h-100" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner h-100 px-2">
                            <div class="carousel-item p-3 border border-top-0 h-100" :class="{'active':index==0}" v-for="(item,index) in info" :key="index">
                                <div class="text-center p-3">{{item.name}}</div>
                                <div>{{item.text}}</div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
                <div class="col-md-6 pt-5">
                    <div class="card" >
                        <div class="card-body">
                            <div class="card-title text-center">Librarian</div>
                            <img  class="photo mx-auto d-block" v-bind:src="Lib">
                            <h6 class="card-text text-center">Yelizaveta Kamilova</h6>
                            <p class="card-text pl-5 pt-5" align="justify"><b>Contact :</b></p>
                            <p class="card-text pl-5 pb-5" align="justify">1/1 Abylaikhan Street, Kaskelen <br>
                                040900 Almaty, Kazakhstan <br>
                                yelizaveta.kamilova.sdu.edu.kz <br>
                                +7 (775) 9318135
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script type="text/javascript">
import Lib from '../../../../assets/images/te.jpg'
const info=[
    {
        name:'Abstract',
        text:'A brief summary of a research project and its findings. A summary of a study that describes its most important aspects, including major results and conclusions.'
    },
    {
        name:'Action plan',
        text:'A plan to implement change as a result of an action research study.'
    },
    {
        name:'Axiom',
        text:'A statement widely accepted as truth. '
    },
    {
        name:'Bias',
        text:'It can appear in research via the sampling frame, random sampling, or non-response. It can also occur at other stages in research, such as while interviewing, in the design of questions, or in the way data are analyzed and presented. Bias means that the research findings will not be representative of, or generalizable to, a wider population.'
    },
    {
        name:'Bibliography',
        text:'A list of the books referred to in a research project. It usually appears at the end, or as a separate section, known as an appendix.'
    }
]
export default{
    data(){
        return{
            Lib
            ,info
        }
    }
}
</script>
<style scoped>
.photo{
    padding: 4px;
    max-width: 50%;
}
h6{
    color: #4763AB;
}
.card{
    border: 1px solid black;
    border-radius: 1%;
    background-color: white;
}
.carousel-inner img {
    width: 100%;
    height: 100%;
  }
</style>
