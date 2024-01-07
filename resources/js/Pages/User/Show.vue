<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps(['user']);
</script>

<template>
    <Head title="User Show" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">User Show</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="join join-vertical w-full">
                            <div class="collapse collapse-arrow join-item border border-base-300">
                                <input type="radio" name="my-accordion-4" checked="checked" />
                                <div class="collapse-title text-xl font-medium">
                                    Information
                                </div>
                                <div class="collapse-content">
                                    <p>
                                        Id: <span>{{ user.id }}</span>
                                    </p>
                                    <p>
                                        Name: <span>{{ user.name }}</span>
                                    </p>
                                    <p>
                                        Email: <span>{{ user.email }}</span>
                                    </p>
                                    <p>
                                        Email verified at: <span>{{ user.email_verified_at }}</span>
                                    </p>
                                    <p>
                                        Created at: <span>{{ user.created_at }}</span>
                                    </p>
                                    <p>
                                        Updated at: <span>{{ user.updated_at }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="collapse collapse-arrow join-item border border-base-300">
                                <input type="radio" name="my-accordion-4"/>
                                <div class="collapse-title text-xl font-medium">
                                    More
                                </div>
                                <div class="collapse-content">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style scoped>

</style>

