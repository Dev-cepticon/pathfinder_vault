<script setup>
defineProps({
    feat: {
        type: Object,
        required: true
    }
});

</script>


<template>
    <div class="mb-3 border-bottom">
        <div class="d-flex justify-content-between mb-2">
            <div><h5>{{ feat.name }}</h5></div>
            <div>Source
                <Link href="#">
                </Link>
            </div>
        </div>

        <div class="d-flex flex-row mb-2">
            <div v-for="tag in feat.tags" class="me-3">
                <span class="badge bg-primary">{{ tag }}</span>
            </div>
        </div>
        <p v-if="feat.prereq"><strong>Prerequisite(s)</strong>: {{ feat.prereq }}</p>
        <p v-if="feat.requirements"><strong>Requirements</strong>: {{ feat.requirements }}</p>
        <p>{{ feat.description }}</p>
    </div>
</template>