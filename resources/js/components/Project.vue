<template>
<main class="flex-1 overflow-x-hidden overflow-y-auto ">
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ title }}</h3>
        <lists :lists="lists">
        </lists>                          
    </div>
</main>
</template>

<script>
export default {
    name: 'Project',
    props: ['title', 'cards'],
    data(){
        return{
            lists: [
                {title: 'To Do',
                cards: this.cards
                }
            ]
        }
    }
    }
</script>

<style>

</style>