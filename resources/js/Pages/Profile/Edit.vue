<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import {Head} from '@inertiajs/vue3';
import BaseLayout from "@/Layouts/BaseLayout.vue";
import HeaderStack from "@/Components/HeaderStack.vue";
import StatsCard from "@/Components/StatsCard.vue";
import TableStriped from "@/Components/TableStriped.vue";

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <Head title="Mein Profil"/>

    <base-layout>

        <div class="overflow-y-auto">

            <header-stack title="Mein Profil">
                <div class="py-12 flex flex-col items-center justify-center">


                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-x-6 gap-y-12">
                        <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
                            <UpdateProfileInformationForm
                                :must-verify-email="mustVerifyEmail"
                                :status="status"
                                class="max-w-xl"
                            />
                        </div>

                        <div class="p-4 sm:p-8 bg-white  shadow-md sm:rounded-lg">
                            <UpdatePasswordForm class="max-w-xl"/>
                        </div>

                        <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-lg col-span-2">
                            <DeleteUserForm class="max-w-xl"/>
                        </div>
                    </div>
                </div>
            </header-stack>
        </div>

    </base-layout>
</template>

<style>

</style>
