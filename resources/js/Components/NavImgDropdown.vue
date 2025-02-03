<script setup>
import NavLink from './NavLink.vue';
defineProps({
    name:{
        type: String,
        required: true
    },
    uclass: {
        type: String,
    }

});
</script>

<template>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle link-light"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img  class="rounded img-fluid mx-auto" width="45"
            :src="$page.props.auth.user.avatar 
            ? ('storage/'+ $page.props.auth.user.avatar)
            : ('storage/avatars/default.png')" 
            alt="Avatar"
            />

        </a>
        <ul class="dropdown-menu bg-dark">
            <NavLink name="Profile"  :href="route('profile')" uclass="dropdown-item"/>
            <NavLink name="Logout"  :href="route('logout')" uclass="dropdown-item" method="post" as="button"/>
        </ul>
    </li>
</template>