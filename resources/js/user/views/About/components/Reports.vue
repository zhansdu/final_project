<template>
    <div class="py-5">
        <div class="text_title">
			REPORTS
		</div>
        <div class="padding my-5 col-12">
            <div class="red_box row">A Year End Statistical Reports</div>
            <div class="row pt-5">
                <div class="col-md-1"><img v-bind:src="pdf"></div>
                <div class="col-md-10">
                    <div class="row"><a class="cursor-pointer" href="https://sdu-kz.libguides.com/ld.php?content_id=33416435" target="_blank">Library Digest</a></div>
                    <div class="row">Read and Find Interesting Facts about the Library</div>
                </div>
            </div>
        </div>
    </div>
</template>
<script type="text/javascript">
	import pdf from '../../../assets/images/pdf.png'
	export default{
		data(){
			return{
				pdf
			}
		}
	}
</script>