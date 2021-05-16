<template>
    <div class="padding py-5">
        <div class="text_title mb-4">
            BORROW / RETURN
        </div>
        <div class="col">
            <div class="row" v-for="(link,index) in links" :key="index">
                <div class="col py-4" v-for="(link,index) in link.links" :key="index">
                    <div class="h-100 w-100 col bg-lightgrey font-weight-bold">
                        <div class="row bg-grey p-2 ">
                            <img v-bind:src="iconuniver" class="pr-4">
                            {{link.title}}
                        </div>
                        <div class="col align-items-center p-2">
                            <div class="row p-2">
                                <p>{{link.canborrow}}</p>
                            </div>
                            <div class="row p-2">
                                <p>{{link.loanperiod}}</p>
                            </div>
                            <div class="row p-2">
                                <p>{{link.prolonging}}</p>
                            </div> 
                            <div class="row p-2" v-if="link.canborrow==null">
                                <p>{{link.libraryuse}}</p>
                            </div>                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import iconuniver from '../../../assets/images/iconuniver.png'
export default{
		data(){
			return{
				iconuniver,
                links:[
                    {
                        links:[
                            {
                                title: 'TEACHERS',
                                canborrow:  'CAN BORROW:  10 ITEMS',
                                loanperiod: 'LOAN PERIOD: 30 DAYS',
                                prolonging: 'PROLONGING:  21 DAYS'
                            },
                            {
                                title: 'MASTERS & PHD STUDENTS',
                                canborrow: 'CAN BORROW:  5 ITEMS',
                                loanperiod:'LOAN PERIOD: 21 DAYS',
                                prolonging:'PROLONGING:  -'
                            },
                            {
                                title: 'UNIVERSITY STAFF',
                                canborrow: 'CAN BORROW:  5 ITEMS',
                                loanperiod:'LOAN PERIOD: 21 DAYS',
                                prolonging:'PROLONGING:  -'
                            }
                        ]
                    },
                    {
                        links:[
                            {
                                title: 'UNDERGRADUATE STUDENTS',
                                canborrow: 'CAN BORROW:  5 ITEMS',
                                loanperiod:'LOAN PERIOD: 21 DAYS',
                                prolonging:'PROLONGING:  -'
                            },
                            {
                                title: 'VISITORS',
                                canborrow:null,
                                libraryuse: 'IN LIBRARY USE ONLY'
                            },
                            {
                                title: 'ALUMNI',
                                canborrow: null,
                                libraryuse: 'IN LIBRARY USE ONLY'
                            }
                        ]
                    }
                ]
			}
		}
	}
</script>
