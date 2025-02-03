<script setup>
const model = defineModel({
    type: null,
    required: true
});


defineProps({
    name: {
        type: String,
        required: true
    },
    type: {
        type: String,
        default: 'text'
    },
    message: {
        type: String
    },
    placeholder: {
        type: String
    }

});

</script>

<template>
    <!-- :class="{'is-invalid' : message !== null }" -->
    <div class="form-floating mb-4 pt-1 text-dark">
        <input :type="type" class="form-control" :class="{'is-invalid' : message }" id="name" placeholder="placeholder" v-model="model">
        <label for="name">{{name}}</label>
        <small class="text-danger" v-if="message">{{ message }}</small>
    </div>
</template>