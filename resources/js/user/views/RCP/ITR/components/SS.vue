<template>
    <div class="mt-5">
        <div class="text_title text-uppercase">SEARCH STRATEGY</div>
        <div class="padding my-5">
            <div class="pyr row justify-content-between">
                <div class="col-md-7">
                    <div class="red_box row">Main Concepts of Search Strategy</div>
                    <img class="img-fluid pt-5" v-bind:src="imagePYR5">
                </div>
                <div class="col-md-5">
                    <div class="red_box row">Keywords</div>
                    <p class="pt-3">Can't find enough materials for your research topic? Try applying the subject terms and synonyms:</p>
                    <img class="img-fluid" v-bind:src="imagePYR6">
                    <div class="red_box row">Boolean Operators</div>
                    <img class="img-fluid" v-bind:src="imagePYR7">

                </div>
            </div>
        </div>
        <div class="padding my-5">
            <div class="pyr row justify-content-between">
                <div class="col-md-8">
                    <div class="red_box row">Search Tips</div>
                    <p class="pt-3">Use an asterisk (*) to find different words with the same root word</p>
                    <img class="img-fluid" v-bind:src="imageF1">
                    <p>The results will be: govern / governed / governing / governs <br>
                        Find American and British variations</p>
                    <img class="img-fluid" v-bind:src="imageF2">
                    <p>The results will be: Colour/Color <br>
                        Correct Spelling</p>
                    <img class="img-fluid" v-bind:src="imageF3">
                    <p>The results will be: Rowling /Rouling / Rokling / Robling <br>
                        When searching a definition of a word, use "def:"
                    </p>
                    <img class="img-fluid" v-bind:src="imageF4">
                    <p>When searching for a specific word combinations use "" quotation marks</p>
                    <img class="img-fluid" v-bind:src="imageF5">
                </div>
                <div class="col-md-4">
                    <div class="red_box row">Guidelines on Search Strategy</div>
                    <ul class="p-3">
                        <li>Identify the keywords</li>
                        <li>Select appropriate resources</li>
                        <li>Apply searching tips</li>
                        <li>Refine results</li>
                    </ul>
                    <div class="red_box">Selected Library Books</div>

                </div>
            </div>
        </div>
    </div>
</template>
<script type="text/javascript">
import imagePYR5 from '../../../../assets/images/pyr5.png'
import imagePYR6 from '../../../../assets/images/pyr6.png'
import imagePYR7 from '../../../../assets/images/pyr7.png'
import imageF1 from '../../../../assets/images/f1.png'
import imageF2 from '../../../../assets/images/f2.png'
import imageF3 from '../../../../assets/images/f3.png'
import imageF4 from '../../../../assets/images/f4.png'
import imageF5 from '../../../../assets/images/f5.png'
export default{
    data(){
        return{
            imagePYR5,
            imagePYR6,
            imagePYR7,
            imageF1,
            imageF2,
            imageF3,
            imageF4,
            imageF5,

        }
    }
}
</script>
