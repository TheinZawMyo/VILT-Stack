<template>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
        <h1 class="text-4xl font-bold mb-6">Create Product</h1>
        <div class="w-full max-w-2xl">
            <form class="bg-white shadow-lg rounded-lg overflow-hidden p-4" @submit.prevent="submit">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" v-model="form.name" id="name"
                        class="w-full border border-gray-300 rounded py-2 px-3"
                        placeholder="Enter product name">
                    <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                    <textarea name="description" v-model="form.description" id="description"
                        class="w-full border border-gray-300 rounded py-2 px-3" placeholder="Enter product description">
                    </textarea>
                    <div v-if="errors.description" class="text-red-500">{{ errors.description }}</div>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
                    <input type="number" id="price" v-model="form.price"
                        class="w-full border border-gray-300 rounded py-2 px-3" placeholder="Enter product price">
                    <div v-if="errors.price" class="text-red-500">{{ errors.price }}</div>
                </div>
                <div class="mb-4">
                    <label for="quantity" class="block text-gray-700 font-bold mb-2">Qty</label>
                    <input type="number" id="quantity" v-model="form.quantity"
                        class="w-full border border-gray-300 rounded py-2 px-3" placeholder="Enter product quantity">
                    <div v-if="errors.quantity" class="text-red-500">{{ errors.quantity }}</div>
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold w-full py-2 rounded transition">Create</button>
            </form>
        </div>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

defineProps({ errors: Object })

const form = useForm({
    name: '',
    description: '',
    price: '',
    quantity: '',
})

const submit = () => {
    form.post('/store')
}

</script>