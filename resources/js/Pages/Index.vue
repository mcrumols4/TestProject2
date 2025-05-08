<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    notes: Array,
});
</script>

<template>
    <div class="bg-gray-300 p-10">
        <form action="">
            <input type="text" name="search" id="searcher" aria-label="Searcher" class="rounded max-w-[80%]">
        </form>
    </div>
    <div>
        <div class="bg-gray-200 py-6" v-for="note in notes">
            <div class="w-[80%] border flex flex-row p-4">
                <div>
                    <h1>{{ note.title }}</h1>
                    <h2>{{ note.subtitle }}</h2>
                </div>
                <div class="top-0">
                    <p>{{ note.category.name }}</p>
                </div>
            </div>
        </div>
        <div>
            <div>
                <form action="">
                    <label for="title">Titol</label>
                    <input type="text" name="title" id="title">
                    <label for="subtitle">Subtitol</label>
                    <input type="text" name="subtitle" id="subtitle">
                </form>
            </div>
        </div>
    </div>
</template>