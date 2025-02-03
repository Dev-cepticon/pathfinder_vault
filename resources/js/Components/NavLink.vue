<script setup>
defineProps({
    name:{
        type: String,
        required: true
    },
    href: {
        type: String,
        required: true
    },
    current: {
        type: String,
    },
    uclass: {
        type: String,
    },
    method: {
        type: String,
        default: 'get'
    },
    as: {
        type: String,
        default: 'a'
    }

})
</script>

<template>
    <li class="nav-item">
        <Link class="nav-link link-light" 
        :class="uclass,{ 'text-warning': $page.component === current }" 
        :aria-current="$page.component === current" 
        :href="href" 
        :method="method"
        :as="as" >
        {{ name }}
    </Link>
    </li>
</template>