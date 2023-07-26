<template>
    <div>
        <dl class="mt-5 flex gap-5">
            <div v-for="item in stats" :key="item.name" class="overflow-hidden w-full rounded-lg bg-white px-4 py-5 shadow-md sm:p-6">
                <dt class="truncate text-sm font-medium text-gray-500">{{ item[0] }}</dt>
                <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ item[1] }}</dd>
            </div>
        </dl>
    </div>
</template>

<script setup>

const props = defineProps(['stats']);


// const stats = [
//     { name: 'Gesamt Budget', stat: '100.000€' },
//     { name: 'Verbleibendes Budget', stat: '47.270€' },
//     { name: 'Dienstleister', stat: '2' },
//     { name: 'Aktive Projekte', stat: '6' },
// ]
</script>
