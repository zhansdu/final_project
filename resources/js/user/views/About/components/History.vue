<template>
	<div>
		<div class="text_title">
			HISTORY
		</div>
		<div class="padding my-5">
			<div class="history row justify-content-between">
				<div class="col-md-3">
					<div class="row pt-2"><p>The mission of the Scientific Library of Suleyman Demirel University is to contribute to improve the quality of education and science in the SDU by providing reliable and effective information resources, as well as high-quality services to researchers, instructors, staff and students of the university.</p></div>
				</div>
				<div class="col-md-8">
					<img class="img-fluid" v-bind:src="image1">
				</div>
				<a class="row pt-5">
					<div class="col-md-2"><img v-bind:src="pdf"></div>
					<div class="col-md-10">
						<div class="row"><a class="cursor-pointer" href="https://sdu-kz.libguides.com/ld.php?content_id=33413866" target="_blank">Library digest</a></div>
						<div class="row">Read and Find Interesting Facts about the library</div>
					</div>
				</a>
				<div class="row pt-5">
					<p>The SDU scientific library was opened in 1996 and is one of the most important departments of the university. The SDU Library provides services to undergraduate, graduate and PhD students as well as university staff. It has a collection of books and e-books, subscriptions and trials to an online database. The book collections are updated annually in accordance with the requirements of university educational programs, with the increasing number of electronic publications. Materials are purchased from well-known local and international book-selling networks, publishing houses, information agencies and companies.</p>
				</div>
			</div>
		</div>
	</div>
</template>
<script type="text/javascript">
	import PDF from '../../../assets/icons/PDF'
	import image1 from '../../../assets/images/historyimage.png'
	import pdf from '../../../assets/images/pdf.png'
	export default{
		components:{PDF},
		data(){
			return{
				image1, pdf
			}
		}
	}
</script>