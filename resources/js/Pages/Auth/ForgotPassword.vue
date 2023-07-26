<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';
import SecondaryButton from "@/Components/SecondaryButton.vue";

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout>
        <Head title="Passwort vergessen"/>

        <div class="mb-4 text-sm text-gray-600">
            Du hast dein Passwort vergessen? Kein Problem. Teile uns einfach deine E-Mail Adresse mit und wir schicken dir einen Link,
            mit dem du ein neues Passwort vergeben kannst.
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="E-Mail"/>

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="ml-4"
                >
                    <SecondaryButton :disabled="form.processing">
                        Zurück zum Login
                    </SecondaryButton>

                </Link>
                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Link anfordern
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
