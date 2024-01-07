<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import { reactive } from 'vue';


const form = reactive({
    name : '',
    email : '',
    email_verified_at : 0,
});

const submit = () => {
    router.post(route('user.store'), form);
}
</script>

<template>
    <Head title="Create User" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Create User</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form @submit.prevent="submit" class="flex flex-col gap-4">
                            <div class="form-control">
                                <label for="name" class="label">Name:</label>
                                <input id="name" type="text" v-model="form.name" class="input input-bordered w-full" />
                            </div>
                            <div class="form-control">
                                <label for="email" class="label">Email:</label>
                                <input id="email" type="email" v-model="form.email" class="input input-bordered w-full" />
                            </div>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <span>Email verify</span>
                                    <input type="checkbox" class="toggle" :checked="form.email_verified_at" />
                                </label>
                            </div>
                            <div class="self-end mt-8">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style scoped>

</style>

