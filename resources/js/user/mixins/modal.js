export default{
	methods:{
		showModal( component,props ){
            let width=props ? props.width ?? '66.5%' : '66.5%';
			this.$modal.show(component,props,{
                width:width,
                height:'auto',
                classes:['rounded'],
                styles:'padding:0.9375em;max-height:700px;overflow-y:auto;',
                shiftY:0.3
            },{});
		}
	}
}