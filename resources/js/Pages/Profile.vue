<script setup>

</script>

<template>
    <Head :title="`| ${$page.component}`" />
    <div class="container text-light mt-4">
        <div class="container-fluid">
            <h2 class="text-center">Hello {{ $page.props.auth.user.first_name }}</h2>
        </div>
    </div>
</template>