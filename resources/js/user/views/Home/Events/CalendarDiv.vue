<template>
	<calendar-div
	:attributes="attributes"
	@dayclick="show"
	/>
</template>
<script type="text/javascript">
	import CalendarDiv from 'v-calendar/lib/components/calendar.umd'
	import CalendarDay from './CalendarDay'
	import modal from '../../../mixins/modal'
	export default{
		mixins:[modal],
		components:{CalendarDiv},
		props:{
			events:[Object,Array]
		},
		watch:{
			events(){
				this.setCalendar();
			}
		},
		data(){
			return{
				attributes: 
				[

				// today
				{
					highlight:
					{
						style:{
							backgroundColor: '#FF9D29', // orange
						},
						contentStyle:{
							color:'white'
						}
					},

					dates: [
					new Date()
					],
				},
		        // events
		        {
		        	dot:{
		        		style:{
							backgroundColor: '#FF9D29', // orange
						},
					},
					dates:[
					]
				}
				]
			}
		},
		methods:{
			show(day){
				let event=this.findDay(day.id);
				if(event){
					this.showModal(CalendarDay,{data:event});
				}
			},
			findDay(date){
				return this.events.filter(event=>event.date==date);
			},
			setCalendar(){
				let dates=[];
				let attributes=JSON.parse(JSON.stringify(this.attributes));
				this.events.forEach(event=>{
					dates.push(new Date(event.date));
				})
				attributes[1].dates=dates;
				this.attributes=attributes;
			}
		}
	}
</script>