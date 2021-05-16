<template>
    <main-body/>
</template>
<script>
import MainBody from './views/__main__'
import setLocale from './mixins/setLocale'
export default {
    components:{
        MainBody
    },
    mixins:[setLocale],
    methods:{
        setGlobalLocale(){
            this.setLocale(JSON.parse(localStorage.getItem('lang')));
        }
    },
    created () {
        this.setGlobalLocale();
    }
}
</script>
<style scoped>
@import './assets/styles/style.css';
</style>
