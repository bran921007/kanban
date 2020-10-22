<template>
<div  class="flex px-4 pb-8 pt-3 mt-2 items-start overflow-x-auto border-t border-gray-200">
                            
<div v-for="(list, index) in lists" class="rounded bg-grey-light  flex-no-shrink w-64 p-2 mr-4">
              
    <div class="flex justify-between py-1">
        <h3 class="text-sm uppercase font-bold text-gray-500">{{ list.title }}</h3>
        <svg class="h-4 fill-current text-gray-500 cursor-pointer origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z"></path>
        </svg>
    </div>
        <div class="text-sm mt-2">
            <draggable v-model="list.cards"  group="tasks" :animation="200">
            <div v-for="(card, key) in list.cards"> 
                <card :card="card" >
                </card>  
            </div>
            </draggable>  
        </div>         
</div>

</div> 

</template>

<script>
window.draggable = require('vuedraggable');
export default {
    name: 'Lists',
    components: { draggable, },
    props: ['lists'],
    data(){
        return{
        }
    }
}
</script>

<style>

</style>