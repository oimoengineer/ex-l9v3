<script setup>
import Layout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';

const {posts} = defineProps ({
  posts: Array,
});
</script>
<template>
  <Head title="Blog" />

  <Layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Index
            </h2>
        </template>

        <div class="py-12" v-for="post in posts" :key="post.id">
            <h2>title</h2>
            <p>{{post.title}}</p>
            <h2>body</h2>
            <p>{{post.body}}</p>
            <h2>image</h2>
            <img src="{{post.image}}" alt="">
        </div>
    </Layout>

</template>