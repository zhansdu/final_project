<template>
    <div>
        <main-body/>
        <!-- fixed stuff -->
        <chat v-if="!$mobileCheck()" />
    </div>
</template>
<script type="text/javascript">
    import MainBody from './views/__main__'
	import Chat from './views/Home/Chat/'

    import langs from './mixins/langs'
    export default{
        mixins:[langs],
        components:{
            MainBody,
            Chat
        },
        methods:{
            setLanguage(){
                this.$i18n.locale=JSON.parse(localStorage.getItem('lang')) || 'en';
            }
        },
        created(){
            this.setLanguage();
        }
    }
</script>
<style>
@import './assets/styles/style.css'
</style>