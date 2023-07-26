<script setup>
import {Link} from '@inertiajs/vue3';
import Sidebar from "@/Components/Sidebar.vue";
import CustomFooter from "@/Components/CustomFooter.vue";

function url() {
    return location.pathname.substr(1);
}
</script>

<template>

    <div class="h-screen w-screen bg-gray-200">
        <div class="w-full h-full grid grid-cols-home">
            <sidebar :key="url()"></sidebar>
            <slot/>
            <custom-footer/>
        </div>



    </div>

</template>

<style scoped>

</style>
