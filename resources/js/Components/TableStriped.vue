<template>
    <div class="px-4 sm:px-6 lg:px-8 mt-8 pb-6 pt-6 bg-gray-50 rounded-lg shadow-md">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-lg font-semibold leading-6 text-gray-900">{{title}}</h1>
            </div>
            <div v-if="hasButton" class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <button type="button" class="block rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-sky-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    {{ buttonText }}</button>
            </div>
        </div>
        <div class="mt-6 flow-root">
            <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full pb-2 align-middle h-80 overflow-y-auto scroll">
                    <table class="min-w-full border-separate border-spacing-0">
                        <thead>
                        <tr>

                            <th v-for="(header, index) in headers" scope="col" :class="[index === 0 ? 'sm:pl-6 lg:pl-8' : '']" class="sticky top-0 z-10  border-b border-gray-300 bg-gray-200 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter" >{{ header }}</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(row, index) in rows" :key="index" class="even:bg-gray-100">
<!--                            TODO Change <td> to v-for-->
                            <td v-for="(cell, index) in row" :class="[index !== rows.length - 1 ? 'border-b border-gray-200' : '', [index === 0 ? 'sm:pl-6 lg:pl-8' : ''] , 'whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 ']">{{ cell }}</td>
<!--                            <td :class="[index !== rows.length - 1 ? 'border-b border-gray-200' : '', 'whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8']">{{ row.cells[0] }}</td>-->
<!--                            <td :class="[index !== rows.length - 1 ? 'border-b border-gray-200' : '', 'whitespace-nowrap hidden px-3 py-4 text-sm text-gray-500 sm:table-cell']">{{ row.cells[1] }}</td>-->
<!--                            <td :class="[index !== rows.length - 1 ? 'border-b border-gray-200' : '', 'whitespace-nowrap hidden px-3 py-4 text-sm text-gray-500 lg:table-cell']">{{ row.cells[2] }}</td>-->

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

const props = defineProps(['title', 'headers', 'rows', 'hasButton', 'buttonText'])
// const projects = [
//     { id:1, name: 'IYS Anbindung', contractor: 'IS4IT', cost: '3000€'},
//     { id:2, name: 'ZENworks Patchmanagement', contractor: 'L@nworks', cost: '4500€'},
//     { id:3, name: 'ACDI PoC', contractor: 'IS4IT', cost: '2000€'},
//     { id:4, name: 'eDirectory Schulung', contractor: 'IS4IT', cost: '7000€'},
//     { id:5, name: 'ZENworks Umstellung auf neue Patchbundles', contractor: 'L@nworks', cost: '4000€'},
//     { id:6, name: 'Lindsay Walton', contractor: 'Front-end Developer', cost: 'lindsay.walton@example.com'},
//     { id:7, name: 'Lindsay Walton', contractor: 'Front-end Developer', cost: 'lindsay.walton@example.com'},
//     { id:8, name: 'Lindsay Walton', contractor: 'Front-end Developer', cost: 'lindsay.walton@example.com'},
//     { id:9, name: 'Lindsay Walton', contractor: 'Front-end Developer', cost: 'lindsay.walton@example.com'},
//     { id:10, name: 'Lindsay Walton', contractor: 'Front-end Developer', cost: 'lindsay.walton@example.com'},
//     { id:11, name: 'Lindsay Walton', contractor: 'Front-end Developer', cost: 'lindsay.walton@example.com'},
//     { id:12, name: 'Lindsay Walton', contractor: 'Front-end Developer', cost: 'lindsay.walton@example.com'},
//     { id:13, name: 'Lindsay Walton', contractor: 'Front-end Developer', cost: 'lindsay.walton@example.com'},
//     { id:14, name: 'Lindsay Walton', contractor: 'Front-end Developer', cost: 'lindsay.walton@example.com'},
//     // More projects...
// ]
</script>

<style>

.scroll::-webkit-scrollbar {
    width: 0.65rem;
}

.scroll::-webkit-scrollbar-track {
}

.scroll::-webkit-scrollbar-thumb {
    border-radius: 0.5rem;
    background-color: #9ca3af;
}

.scroll::-webkit-scrollbar-thumb:hover {
    border-radius: 0.5rem;
    background-color: #6b7280;
}
</style>
