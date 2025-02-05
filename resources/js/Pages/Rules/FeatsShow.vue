<script setup>
import Feat from '../../Components/Character/Feat.vue';

</script>

<template>
    <div class="container text-light mt-5">
        <div class="container-fluid">
            <Feat :feat="$page.props.feat"></Feat>
        </div>
    </div>
    
</template>