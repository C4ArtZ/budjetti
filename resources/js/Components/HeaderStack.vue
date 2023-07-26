<template>
    <div class="min-h-full">
        <div class="bg-gradient-to-tr from-blue-600 to-sky-700 pb-24">
            <header class="pt-5 pb-10">
                <div class="mx-auto px-4 sm:px-6 lg:px-16">
                    <h1 class="text-3xl font-bold tracking-tight text-white">{{ props.title }}</h1>
                </div>
            </header>
        </div>

        <main class="-mt-24">
            <div class="mx-auto px-4 pb-12 sm:px-6 lg:px-16">
                <slot/>
            </div>
        </main>
    </div>
</template>

<script setup>
const props = defineProps(['title'])
</script>
