<template>
    <div class="mt-5">
        <div class="text_title text-uppercase">INTRODUCTION TO RESEARCH</div>
        <div class="padding my-5">
            <div class="itr row justify-content-between">
                <iframe width="1400" height="700" src="https://www.youtube.com/embed/EEuul8hBip8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="col-md-6 pt-5">
                    <div class="red_box row">Research Terms Definition</div>
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
export default{
    data(){
        return{
            Lib
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

</style>
