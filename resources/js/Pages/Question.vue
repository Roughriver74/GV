<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

const props = defineProps({
    question: {
        type: Object,
        default: () => ({}),
    },
});
</script>

<template>
    <Head title="Вопрос" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Вопрос
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div id="quest" class="container px-10 py-10"></div>
                        <h1>{{ question.question }}</h1>
                    </div>
                    <div class="p-6 text-gray-900">
                        <div id="answer" class="container px-10 py-10"></div>
                        <h1>{{ question.answer }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
