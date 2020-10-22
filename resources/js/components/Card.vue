<template>
<div>
    <div class="bg-gray-100 p-2 h-16 rounded mt-3  cursor-pointer hover:bg-gray-200">
    {{ card.task }}
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