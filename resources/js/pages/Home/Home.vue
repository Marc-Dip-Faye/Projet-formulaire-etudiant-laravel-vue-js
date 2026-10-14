<template>
    <div>
        <h1>Bonjour : {{ props.nom }}</h1>
    </div>
</template>

<script setup>
    const props = defineProps({
        nom : String,

    })
</script>

<style>

</style>