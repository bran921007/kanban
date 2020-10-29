<template>
<div  class="flex overflow-x-auto overflow-y-auto h-screen  pt-4 mt-2 items-start border-t border-gray-200">
<draggable element="div"  v-model="lists"  :options="dragOptions" group="lists">
<transition-group class="flex">                            
<div v-for="(list,index) in lists" class="rounded bg-grey-light  flex-no-shrink w-64  mr-4" :key="list.id" :id="list.id">
              
    <div class="flex justify-between py-1">
        <h3 class="text-sm uppercase font-bold text-gray-500">{{ list.title }}</h3>
        <svg class="h-4 fill-current text-gray-500 cursor-pointer origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z"></path>
        </svg>
    </div>
        <div class="text-sm mt-2">
            <draggable element="div" v-model="list.cards" :options="dragOptions"  group="cards" >
               <transition-group :id="list.id" > 
                <div v-for="(card, index) in list.cards" :key="card.id"  @click="alert('putas')"> 
                    <card :card="card" >
                    </card>  
                </div>
               </transition-group> 
            </draggable>  
        </div>         
</div>
</transition-group>
</draggable>
</div> 

</template>

<script>
window.draggable = require('vuedraggable');
export default {
    name: 'Lists',
    components: { draggable, },
    props: ['cardlists'],
    data(){
        return{
            lists: this.cardlists
        }
    },
    mounted(){
        
    },
    computed: {
            dragOptions () {
              return  {
                animation: 200,
                group: 'description',
                ghostClass: 'ghost'
              };
            },
        },
}
</script>

<style>

</style>