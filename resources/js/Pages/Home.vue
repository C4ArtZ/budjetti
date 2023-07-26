<script setup>
import {Head} from '@inertiajs/vue3';
import BaseLayout from "@/Layouts/BaseLayout.vue";
import HeaderStack from "@/Components/HeaderStack.vue";
import StatsCard from "@/Components/StatsCard.vue";
import TableStriped from "@/Components/TableStriped.vue";

defineOptions({ layout: BaseLayout })
const props = defineProps(['projects','totalActiveBudget', 'totalActiveRemainingBudget', 'numOfActiveContractors', 'numOfActiveProjects']);

const headers = ['Projekt', 'Dienstleister', 'Kosten'];

const stats =  [['Gesamt Budget',props.totalActiveBudget], ['Verbleibendes Budget', props.totalActiveRemainingBudget], ['Aktive Dienstleister', props.numOfActiveContractors], ['Aktive Projekte', props.numOfActiveProjects]];



</script>

<template>
    <Head>
        <title>Dashboard</title>

    </Head>

    <head>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
    </head>

        <div class="overflow-y-auto">
            <header-stack title="Dashboard">
                <stats-card :stats="stats"></stats-card>
                <table-striped title="Alle aktive Projekte" :headers="headers" :rows="props?.projects"></table-striped>
            </header-stack>
        </div>

</template>

<style scoped>

</style>
