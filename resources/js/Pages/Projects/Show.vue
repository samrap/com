<template>
    <div>
        <hr>
        <div class="mb-4">
            <h1 class="uppercase">{{ String(project.id).padStart(2, '0') }} {{ project.name }}</h1>
        </div>
        <div>
            <img :src="project.featured_image" alt="">
        </div>
        <div class="flex flex-wrap my-3">
            <div class="my-3 w-full lg:w-1/3">
                <span class="block my-3">
                    ID: SJR-PROJ-{{ String(project.id).padStart(2, '0') }}<br>
                    DOC: 2022<br>
                </span>
                <span class="block my-3">
                    <span v-if="project.url">URL: <a target="_blank" :href="project.url">{{ project.url }}</a><br></span>
                    <span v-if="project.instagram">IG: <a target="_blank" :href="'https://instagram.com/' + project.instagram">@{{ project.instagram }}</a><br></span>
                </span>
            </div>
            <div class="mt-3 w-full lg:w-2/3 p-margins" v-html="project.description"></div>
        </div>

        <div class="flex flex-wrap w-full">
            <div v-for="(image, i) in project.images" :key="i" class="w-1/2 sm:w-1/4 p-2 cursor-pointer">
                <a :href="image.src" class="glightbox" data-type="image">
                    <img :src="image.thumbnail" alt="">
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import GLightbox from 'glightbox';

export default {
    props: {
        project: Object,
    },
    mounted() {
        const gallery = GLightbox({
            selector: '.glightbox',
        })
    }
}
</script>
