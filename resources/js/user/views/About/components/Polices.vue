<template>
    <div class="bg-lightgrey py-3">
        <div class="text_title pt-5">
			POLICIES
		</div>
        <div class="padding mb-5 mt-3">
            <div class="row" v-for="(link,index) in links" :key="index">
                <div class="col py-5" v-for="(link,index) in link.links" :key="index">
                    <div class="row">
                        <div class="col-md-2"><img v-bind:src="pdf"></div>
                        <div class="col-md-8">
                            <div class="row"><a class="cursor-pointer" :href="link.link" target="_blank">{{link.name}}</a></div>
                            <div class="row">{{link.description}}</div>
                        </div>
                    </div>
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
				pdf,
                links:[
                    {
                        links:[
                            {
                                name:'Library Policy',
                                description:'General Policy on Scientific Library',
                                link:'https://sdu-kz.libguides.com/ld.php?content_id=33411374'
                            },
                            {
                                name:'Library Collection Development Policy',
                                description:'Guidance on Library Collection Development and Structure',
                                link:'https://sdu-kz.libguides.com/ld.php?content_id=33411380'
                            }
                        ]
                    },
                    {
                        links:[
                            {
                                name:'Library Use Policy',
                                description:'Main Guides on Library Usage',
                                link:'https://sdu-kz.libguides.com/ld.php?content_id=33411375'
                            },
                            {
                                name:'Library Committee Policy',
                                description:'Library Committee Structure and General Rules',
                                link:'https://sdu-kz.libguides.com/ld.php?content_id=33411382'
                            }
                        ]
                    }
                ]
			}
		}
	}
</script>