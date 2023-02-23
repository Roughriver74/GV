<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import StarRating from "@/Components/StarRaiting.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
    questions: {
        type: Object,
        default: () => ({}),
    },
});
</script>

<template>
    <Head title="List" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Список вопросов
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="py-12">
                        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <!-- <div
                                v-if="$page.props.flash.message"
                                class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                                role="alert"
                            >
                                <span class="font-medium">
                                    {{ $page.props.flash.message }}
                                </span>
                            </div> -->
                            <div
                                class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                            >
                                <div
                                    class="p-6 bg-white border-b border-gray-200"
                                >
                                    <div class="mb-2">
                                        <Link :href="route('question.create')">
                                            <PrimaryButton class="ml-4 mb-5"
                                                >Добавить Вопрос</PrimaryButton
                                            ></Link
                                        >
                                    </div>
                                    <div
                                        class="relative overflow-x-auto shadow-md sm:rounded-lg"
                                    >
                                        <table
                                            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                                        >
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                                            >
                                                <tr>
                                                    <th
                                                        scope="col"
                                                        class="px-6 py-3"
                                                    >
                                                        #
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="px-6 py-3"
                                                    >
                                                        Вопрос
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="px-6 py-3"
                                                    >
                                                        Ответ
                                                    </th>

                                                    <th
                                                        scope="col"
                                                        class="px-6 py-3"
                                                    >
                                                        Edit
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="px-6 py-3"
                                                    >
                                                        Delete
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="px-6 py-3"
                                                    >
                                                        Рейтинг
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr
                                                    v-for="question in questions"
                                                    :key="question.id"
                                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                                >
                                                    <th
                                                        scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                                                    >
                                                        {{ question.id }}
                                                    </th>
                                                    <th
                                                        scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                                                    >
                                                        {{ question.question }}
                                                    </th>
                                                    <td class="px-6 py-4">
                                                        {{ question.answer }}
                                                    </td>

                                                    <td class="px-6 py-4">
                                                        <Link
                                                            :href="
                                                                route(
                                                                    'question.edit',
                                                                    question.id
                                                                )
                                                            "
                                                            class="px-4 py-2 text-white bg-blue-600 rounded-lg"
                                                            >Edit</Link
                                                        >
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <PrimaryButton
                                                            class="bg-red-700"
                                                            @click="
                                                                destroy(
                                                                    question.id
                                                                )
                                                            "
                                                        >
                                                            Delete
                                                        </PrimaryButton>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div
                                                            class="flex justify-center items-center"
                                                        >
                                                            <StarRating
                                                                v-bind:value="
                                                                    question.raiting
                                                                "
                                                            />
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
