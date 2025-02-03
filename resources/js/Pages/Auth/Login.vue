<script setup>
import { useForm } from '@inertiajs/vue3';
import FormInput from '@/Components/FormInput.vue';

const form = useForm({
    email: null,
    password: null,
    remember: null,
});

const submit = () => {
    form.post(route('login'), {
        onError: () => {
            form.reset("password", "remember");
        }
    });
};

</script>

<template>

    <Head :title="`| Login`" />
    <div class="container text-light">
        <div class="container-fluid">
            <div class="forms mt-5 mx-auto">
                <h1>Login to your account.</h1>
                <form @submit.prevent="submit">
                    <FormInput name="Email" placeholder="" type="email" v-model="form.email"
                        :message="form.errors.email" />
                    <FormInput name="Password" placeholder="" type="password" v-model="form.password"
                        :message="form.errors.password" />
                    <div class="contianer-fluid">
                        <div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="remember" v-model="form.remember">
                                <label class="form-check-label mx-2" for="remember">
                                    Remember me?
                                </label>
                            </div>

                            <div class="d-grid gap-2">
                                <h5>Need an account?
                                    <Link :href="route('register')">Register</Link>
                                </h5>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary pt-3" :disabled="form.processing"
                                        type="submit"><h4>Login</h4></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</template>