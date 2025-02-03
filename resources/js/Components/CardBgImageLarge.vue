<script setup>
defineProps({
    name: {
        type: String,
        required: true
    },
    src: {
        type: String,
        required: true
    },
    href: {
        type: String,
    },
    uclass: {
        type: String,
    },
    alt: {
        type: String,
    },


})

</script>

<template>
    <div class="card text-bg-dark h-100 ms-5" :id="name">
        <img :src="('public/storage/' + src)" 
            class="card-img h-100 rounded " 
            :alt="alt">
        <div class="card-img-overlay">
            <p class="card-text text-center fs-1 fw-bold">
                Create a character.
            </p>
        </div>
    </div>

</template>