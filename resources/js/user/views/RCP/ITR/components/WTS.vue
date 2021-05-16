<template>
    <div class="mt-5">
        <div class="text_title text-uppercase">WHERE TO SEARCH?</div>
        <div class="padding my-5">
            <div class="wts row justify-content-between">
                <div class="col-md-6">
                    <div class="red_box my-3">The Best Place to Search</div>
                    <div class="card" >
                        <div class="card-body">
                            <p class="card-text">The Library catalog is the most safe place to search for an academic materials and peer-reviewed articles, as Library provides access to different databases and platforms.
                                Try searching for the materials using the topic keywords and subject words.
                                For accessing the databases, use the following credentials:</p>
                            <div class="row">
                                <div class="col-md-6 card-text">
                                    <p class="pt-5">User ID: ehostsdu
                                        Password: SDUKZaccess2019!</p>
                                </div>
                                <div class="col-md-6 pt-2">
                                    <img class="img-fluid" v-bind:src="imageK">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="red_box my-3">Available Open Access Search Engines</div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Try searching scholarly articles in open access through Google Scholar</p>
                            <form action="https://scholar.google.com/scholar" id="form_google_33421761" class="form-horizontal" target="_blank" >
                                <img v-bind:src="google" style="width:125px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input name="q" id="searchText33421761" class="form-control s-lg-google-search-field" aria-label="Google Scholar Search"
                                               type="text" value="Research Data">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="submit" id="btn_patent_search33421761" class="btn btn-default btn-sm" value="Search">
                                    </div>
                                </div>
                            </form>
                            <p class="card-text pt-1">Try searching the Patents on Google Patents</p>
                            <form action="https://www.google.com/search" id="form_google_33421763" class="form-horizontal" target="_blank" >
                                <img v-bind:src="google2" style="width:125px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input name="q" id="searchText33421763" class="form-control s-lg-google-search-field" aria-label="Google Patent Search" type="text" value="Research Data">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="btn_patent_search33421763" class="btn btn-default btn-sm" type="submit" value="Search">
                                    </div>
                                </div>
                            </form>
                            <p class="card-text pt-1">Try Searching Open Access Books on Google Books</p>
                            <form action="https://www.google.com/search" id="form_google_33421762" class="form-horizontal" target="_blank" >
                                <img v-bind:src="google3" style="width:125px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input name="q" id="searchText33421762" class="form-control s-lg-google-search-field" aria-label="Google Book Search" type="text" value="Research writing">                                    </div>
                                    <div class="col-md-6">
                                        <input id="btn_patent_search33421762" class="btn btn-default btn-sm" type="submit" value="Search">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script type="text/javascript">
import imageK from '../../../../assets/images/imageK.jpg'
import google from '../../../../assets/images/google.png'
import google2 from '../../../../assets/images/pat.png'
import google3 from '../../../../assets/images/books.png'
export default{
    data(){
        return{
            imageK,
            google,
            google2,
            google3
        }
    }
}
</script>
<style scoped>
.card{
    background-color: white;
    border: 1px solid black;
    border-radius: 1%;
}
.form-control {
    width: 20%;
}
</style>
