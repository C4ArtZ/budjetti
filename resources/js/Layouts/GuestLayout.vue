<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-tr from-blue-600 to-sky-700">
        <div class="w-full min-h-screen flex flex-col sm:justify-center items-center bg-topography">
            <div>
                <Link href="/">
                    <h1 class="text-gray-100 w-full text-center font-bold text-2xl select-none">BUDJETTi</h1>
                    <!--                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />-->
                </Link>
            </div>

            <div
                class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
            >
                <slot />
            </div>
        </div>

    </div>
</template>

<style>

</style>
