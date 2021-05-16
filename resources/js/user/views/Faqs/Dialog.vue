<template>
    <div class="content">
        <!--~~~~~HEADER~~~~~~-->
        <div class="content-header">
            <div class="container-fluid"><br>
                <div class="row">
                    <div class="col-md-12">
                        <form class="card">
                            <h1 class="title0 text-center">{{$t('faq1')}} 1</h1>
                        </form>
                        <ul class="card1">
                            <li>
                                <span class="text-blue cursor-pointer">
                                    <p class="question text-center">{{question.question}}</p>
                                    <p align="justify" class="question" v-html="question.answer"></p>
                                </span>
                                <br>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--~~~~~~END HEADER~~~~~~~-->
    </div>
</template>
<script type="text/javascript">
    export default{
        props:{
            question:Object
        }
    }
</script>

<style>
.title0{
    margin: 1%;
}
.card{
    background-color: #EBEFF8;
    border: 1px solid #EBEFF8;
    border-radius: 0px;
    height: 50vw;
    margin: 0.1%;
}
.card1{
    background-color: #ffffff;
    border: 1px solid #0a306a;
    border-radius: 0px;
}
.card1{
    list-style-type: none;
}
.question{
    font-size: 20px;
}
</style>














