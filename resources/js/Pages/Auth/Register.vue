<script setup>
import { useForm } from '@inertiajs/vue3';
import FormInput from '@/Components/FormInput.vue';

const form = useForm({
    first_name: null,
    last_name: null,
    email: null,
    username: null,
    country: null,
    birthday: null,
    password: null,
    password_confirmation: null,
    avatar: null,
    preview: null
});

const change = (e) => {
    form.avatar = e.target.files[0];
    form.preview = URL.createObjectURL(e.target.files[0]);
};

const submit = () => {
    form.post(route('register'), {
        onError: () => {
            form.reset("password", "password_confirmation");
        }
    });
};

</script>

<template>

    <Head :title="`| Register`" />
    <div class="container text-light">
        <div class="container-fluid">
            <div class="forms mt-5 mx-auto">
                <h1>Register for an account.</h1>
                <p>*(required fields)</p>
                <form @submit.prevent="submit">
                    <div class="mb-3 row">
                        <div class="col-2 my-auto">
                            <img :src="form.preview ?? 'storage/avatars/default.png'" class="img-fluid" height="60"
                                width="60" />
                        </div>
                        <div class="col-md my-auto">
                            <label for="avatar" class="form-label">Avatar</label>
                            <input class="form-control" type="file" id="avatar" @change="change" />
                            <small class="text-danger" v-if="form.errors.avatar">{{ form.errors.avatar }}</small>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <FormInput name="First Name*" placeholder="" v-model="form.first_name"
                                :message="form.errors.first_name" />
                        </div>
                        <div class="col-md">
                            <FormInput name="Last Name*" placeholder="" v-model="form.last_name"
                                :message="form.errors.last_name" />
                        </div>
                    </div>
                    <FormInput name="Email*" placeholder="" type="email" v-model="form.email"
                        :message="form.errors.email" />
                    <FormInput name="Username*" placeholder="" v-model="form.username" :message="form.errors.username" />
                    <FormInput name="Country*" placeholder="" v-model="form.country" :message="form.errors.country" />

                    <FormInput name="Birthday*" placeholder="" type="date" v-model="form.birthday"
                        :message="form.errors.birthday" />
                    <FormInput name="Password*" placeholder="" type="password" v-model="form.password"
                        :message="form.errors.password" />
                    <FormInput name="Confirm Password*" placeholder="" type="password"
                        v-model="form.password_confirmation" />

                    <div class="contianer-fluid">
                        <p>Already a user?
                            <Link :href="route('login')">Login</Link>
                        </p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" :disabled="form.processing" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>