<template>
<div>
    <div class="bg-gray-100 px-3 py-2  rounded mt-3  cursor-pointer   hover:bg-gray-200">
    <div class="flex justify-between mb-1">
        <p class="text-gray-600 text-sm">Add tag</p>
        <p class="text-gray-600 text-sm flex items-center">
        <svg class="feather feather-clock w-4 h-4 mr-1 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  viewBox="0 0 24 24">
        <defs/>
        <circle cx="12" cy="12" r="10"/>
        <path d="M12 6v6l4 2"/>
        </svg>    
            Aug 18
        </p>
    </div>
    <div class="text-black font-semibold mb-4">{{ card.title }}</div>
    <div class="flex justify-between items-center">
        <div class="flex ">
            <p class="text-gray-600 text-sm flex items-center mr-3">
                <svg class="feather feather-paperclip w-4 h-4 mr-1 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  viewBox="0 0 24 24">
                <defs/>
                <path d="M21.44 11.05l-9.19 9.19a6 6 0 01-8.49-8.49l9.19-9.19a4 4 0 015.66 5.66l-9.2 9.19a2 2 0 01-2.83-2.83l8.49-8.48"/>
                </svg>
                1
            </p>
            <p class="text-gray-600 text-sm flex items-center">
                <svg class="feather feather-message-square w-4 h-4 mr-1 text-gray-600"  xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                <defs/>
                <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                </svg>
                12
            </p>
        </div>
        <div class="flex">
            <img class="w-6 h-6 rounded-full" src="https://tailwindcss.com/img/jonathan.jpg" alt="">
        </div>
    </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'Card',
    props: ['card'],
    data(){
        return{
        }
    }
    
}
</script>

<style>

</style>