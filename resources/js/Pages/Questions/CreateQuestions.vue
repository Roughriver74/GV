<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import TextArea from "@/Components/TextArea.vue";
const props = defineProps({
    question: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({
    question: "",
    answer: "",
});

const submit = () => {
    form.post(route("question.store"));
};
</script>

<template>
    <Head title="Create" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Создать вопрос
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                            <div class="mb-6">
                                <div>
                                    <InputLabel for="question" value="Вопрос" />

                                    <TextArea
                                        id="question"
                                        type="textarea"
                                        class="mt-1 block w-full"
                                        v-model="form.question"
                                        required
                                        autofocus
                                        autocomplete=""
                                    ></TextArea>

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.question"
                                    />
                                </div>
                            </div>
                            <div class="mb-6">
                                <div>
                                    <InputLabel for="answer" value="Ответ" />

                                    <TextInput
                                        id="answer"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.answer"
                                        required
                                        autofocus
                                        autocomplete=""
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.answer"
                                    />
                                </div>
                            </div>

                            <button
                                type="submit"
                                class="text-white bg-blue-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5"
                                :disabled="form.processing"
                                :class="{ 'opacity-25': form.processing }"
                            >
                                Создать
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
