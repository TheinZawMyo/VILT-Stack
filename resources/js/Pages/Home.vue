<template>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
        <div v-if="message" class="bg-green-500 text-white p-4 rounded mb-4 w-full max-w-5xl">
            {{ message }}
        </div>
        <div class="w-full max-w-5xl flex justify-between items-center mb-4">
            <h1 class="text-4xl font-bold mb-6">Welcome to VILT Stack</h1>
            <Link href="/create"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 my-1 px-4 rounded transition">
            New Product
            </Link>
        </div>
        <div class="w-full max-w-5xl bg-white shadow-lg rounded-lg overflow-hidden p-4">
            <table class="w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Description</th>
                        <th class="px-4 py-2 border">Price</th>
                        <th class="px-4 py-2 border">Qty</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product in products" :key="product.id"
                        class="text-center bg-white hover:bg-gray-100 transition">
                        <td class="px-4 py-3 border">{{ product.id }}</td>
                        <td class="px-4 py-3 border">{{ product.name }}</td>
                        <td class="px-4 py-3 border">{{ product.description }}</td>
                        <td class="px-4 py-3 border text-green-600 font-bold">${{product.price}}</td>
                        <td class="px-4 py-3 border">{{product.quantity}}</td>
                        <td class="px-4 py-3 border">
                            <Link :href="`/edit/${product.id}`"
                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-[7px] px-4 rounded transition">Edit</Link>
                            <button @click="deleteProduct(product.id)"
                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-[5px] ml-2 px-4 rounded transition">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>


<script setup>
import { Link, router, usePage } from "@inertiajs/vue3"
import { computed } from "vue"

const page = usePage();

defineProps({
    products: Array
})

const message = computed(() => {
    return page.props.flash?.success
});

const deleteProduct = (id) => {
    if (confirm("Are you sure you want to delete this product?")) {
        router.delete(`/destroy/${id}`)
    }
}
    
</script>