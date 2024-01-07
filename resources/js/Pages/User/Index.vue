<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';

defineProps(['users'])
</script>
<template>
    <Head title="User List" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">User List</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="overflow-x-auto">
                            <div class="mb-4">
                                <Link :href="route('user.create')" class="btn btn-outline btn-success btn-sm">+ Create</Link>
                            </div>
                            <table class="table table-md">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Email verified at</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <th>{{ user.id }}</th>
                                    <td>{{ user.name }}</td>
                                    <td>{{ user.email }}</td>
                                    <td>{{ user.email_verified_at }}</td>
                                    <td>{{ user.created_at }}</td>
                                    <td>{{ user.updated_at }}</td>
                                    <td class="space-x-2">
                                        <Link class="btn btn-info btn-sm" :href="route('user.show', {user : user.id})">show</Link>
                                        <Link class="btn btn-warning btn-sm" :href="route('user.edit', {user : user.id})">edit</Link>
                                        <form class="inline" @submit.prevent="router.delete(route('user.destroy', {user: user.id}))">
                                            <button class="btn btn-error btn-sm">delete</button>
                                        </form>
                                    </td>
                                </tr>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Email verified at</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style scoped>

</style>

