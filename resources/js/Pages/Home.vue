<template>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-6">
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
                    <tr class="text-center bg-white hover:bg-gray-100 transition">
                        <td class="px-4 py-3 border">1</td>
                        <td class="px-4 py-3 border">iPhone</td>
                        <td class="px-4 py-3 border">Brand New iPhone</td>
                        <td class="px-4 py-3 border text-green-600 font-bold">$1200</td>
                        <td class="px-4 py-3 border">10</td>
                        <td class="px-4 py-3 border">
                            <button
                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-4 rounded transition">Edit</button>
                            <button
                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 ml-2 px-4 rounded transition">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr class="text-center bg-white hover:bg-gray-100 transition">
                        <td class="px-4 py-3 border">1</td>
                        <td class="px-4 py-3 border">iPhone</td>
                        <td class="px-4 py-3 border">Brand New iPhone</td>
                        <td class="px-4 py-3 border text-green-600 font-bold">$1200</td>
                        <td class="px-4 py-3 border">10</td>
                        <td class="px-4 py-3 border">
                            <button
                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-4 rounded transition">Edit</button>
                            <button
                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 ml-2 px-4 rounded transition">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr class="text-center bg-white hover:bg-gray-100 transition">
                        <td class="px-4 py-3 border">1</td>
                        <td class="px-4 py-3 border">iPhone</td>
                        <td class="px-4 py-3 border">Brand New iPhone</td>
                        <td class="px-4 py-3 border text-green-600 font-bold">$1200</td>
                        <td class="px-4 py-3 border">10</td>
                        <td class="px-4 py-3 border">
                            <button
                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-4 rounded transition">Edit</button>
                            <button
                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 ml-2 px-4 rounded transition">
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
import { Link, router } from "@inertiajs/vue3"
    
</script>