<script setup>
defineProps({
    name: {
        type: String,
        required: true
    },
    uclass: {
        type: String,
    }

});

</script>


<template>
    <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle link-light" 
            role="button" 
            data-bs-toggle="dropdown" 
            aria-expanded="false">
            {{name}}
        </a>
        <ul class="dropdown-menu bg-dark">
            <slot />
        </ul>
    </li>
</template>