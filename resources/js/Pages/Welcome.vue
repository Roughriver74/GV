<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
    >
        <div
            v-if="canLogin"
            class="hidden fixed top-0 right-0 px-6 py-4 sm:block"
        >
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-sm text-gray-700 dark:text-gray-500 no-underline hover:underline mr-6"
                >Профиль</Link
            >

            <Link
                v-if="$page.props.auth.user"
                :href="route('question.show',1)"
                class="text-sm text-gray-700 dark:text-gray-500 no-underline hover:underline mr-6"
                >Игра</Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="text-sm text-gray-700 dark:text-gray-500 underline"
                    >Log in</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"
                    >Register</Link
                >
            </template>
        </div>
        <div>
            <div class="">
                <div class="mx-auto max-w-8xl py-24 sm:px-6 sm:py-10 lg:px-8">
                    <div
                        class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0"
                    >
                        <svg
                            viewBox="0 0 1024 1024"
                            class="absolute top-1/2 left-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:translate-y-0 lg:-translate-x-1/2"
                            aria-hidden="true"
                        >
                            <circle
                                cx="512"
                                cy="512"
                                r="512"
                                fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                                fill-opacity="0.7"
                            />
                            <defs>
                                <radialGradient
                                    id="759c1415-0410-454c-8f7c-9a820de03641"
                                >
                                    <stop stop-color="#7775D6" />
                                    <stop offset="1" stop-color="#E935C1" />
                                </radialGradient>
                            </defs>
                        </svg>
                        <div
                            class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left"
                        >
                            <h2
                                class="text-3xl font-bold tracking-tight text-white sm:text-4xl"
                            >
                                Это тестовый проект.<br />Служит только для
                                ознакомления.
                            </h2>
                            <p class="mt-6 text-lg leading-8 text-gray-300">
                                Не является коммерческим проектом, и делается
                                только в рамках обучения web програмированию.
                                 <p>Обязательно зарегистрируйтесь, чтобы  всё работало. </p>
                            </p>
                            <div
                                class="mt-10 flex items-center justify-center gap-x-6 lg:justify-center"
                            >
                            <div
                                        v-if="canLogin"
            class="hidden  px-15 py-4 sm:block"
        >
            <Link
                v-if="$page.props.auth.user"
                :href="route('game')"
                class="rounded-md bg-white px-3.5 py-1.5 text-base font-semibold leading-7 text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                >Приступить к игре</Link
            >


            <div v-else class="justify-items-center items-center space-x-5">
                <Link
                    :href="route('login')"
                    class="rounded-md bg-white px-3.5 py-1.5 text-base font-semibold leading-7 text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                    >Войти</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="rounded-md bg-white px-3.5 py-1.5 text-base font-semibold leading-7 text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                                    >Регистрация
                    </Link
                >
            </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
