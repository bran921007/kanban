<template>
<main class="flex-1 overflow-x-hidden overflow-y-auto ">
    <div class="container mx-auto px-6 py-8">
        <h3 class=" text-2xl font-semibold text-black">{{ title }}</h3>
        <lists :cardlists="this.cardlists">
        </lists>                          
    </div>
</main>
</template>

<script>
export default {
    name: 'Project',
    props: ['title', 'cardlists'],
    data(){
        return{
           
        }
    },
    mounted(){
        // console.log(this.cardlists);
    }
    }
</script>

<style>

</style>