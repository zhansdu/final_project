export default{
	methods:{
		showModal( component,props ){
            let width=props ? props.width ?? '66.5%' : '66.5%';
			this.$modal.show(component,props,{
                width:width,
                classes:['bigger-rounded-lg'],
                styles:'padding:1.5em;max-height:800px;overflow-y:auto;',
                shiftY:0.3
            },{});
		}
	}
}
