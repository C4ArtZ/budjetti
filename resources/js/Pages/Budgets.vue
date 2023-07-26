<script setup>
import {Head} from '@inertiajs/vue3';
import BaseLayout from "@/Layouts/BaseLayout.vue";
import HeaderStack from "@/Components/HeaderStack.vue";
import StatsCard from "@/Components/StatsCard.vue";
import TableStriped from "@/Components/TableStriped.vue";

defineOptions({ layout: BaseLayout })
const props = defineProps(['budgets'])

const headers = ['Budget', 'Gesamt', 'Verbleibend'];



</script>

<template>
    <Head title="Budgets"/>

        <header-stack title="Budgets">
            <stats-card></stats-card>
            <table-striped title="Alle Budgets" :has-button="true" button-text="Budget anlegen" :headers="headers" :rows="props?.budgets"></table-striped>
        </header-stack>

</template>

<style scoped>

</style>
