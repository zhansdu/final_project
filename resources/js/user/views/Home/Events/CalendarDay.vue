<template>
	<div class="content">
		<!--~~~~~HEADER~~~~~~-->
		<div class="content-header">
			<div class="container-fluid"><br>
				<div class="row">
					<div class="col-md-12" v-for="(info,index) in data" :key="index">
						<div class="card">
							<h1 class="title0 text-center">{{info.name}}</h1>
						</div>
						<div class="card1" id="#app">
							<div>Place: {{info.place}}</div>
							<div>Date: {{info.date}}</div>
							<div>Time: {{info.time}}</div>
							<div>Description:</div>
							<div v-html="info.description"></div>
						</div>
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
			data:Array
		}
	}
</script>
<style scoped>
.title0{
	margin: 1%;
}
.card{
	background-color: #EBEFF8;
	border: 1px solid #EBEFF8;
	border-radius: 0px;
	height: 150px !important;
	margin: 0.1%;
}
.card1{
	background-color: #ffffff;
	border: 1px solid #0a306a;
	border-radius: 0px;
}
.question{
	font-size: 20px;
}
</style>