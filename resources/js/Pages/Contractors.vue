<script setup>
import {Head} from '@inertiajs/vue3';
import BaseLayout from "@/Layouts/BaseLayout.vue";
import HeaderStack from "@/Components/HeaderStack.vue";
import StatsCard from "@/Components/StatsCard.vue";
import TableStriped from "@/Components/TableStriped.vue";

const props = defineProps(['contractors'])

const headers = ['Name'];



</script>

<template>
    <Head title="Dienstleister"/>

    <base-layout>
        <header-stack title="Dienstleister">
            <stats-card></stats-card>
            <table-striped title="Alle Dienstleister" :has-button="true" button-text="Dienstleister anlegen" :headers="headers" :rows="props?.contractors"></table-striped>
        </header-stack>
    </base-layout>

</template>

<style scoped>

</style>
