<template>
    <div>
        <hr>
        <div class="mb-4">
            <h1 class="uppercase">01 {{ project.name }}</h1>
        </div>
        <div>
            <img src="https://via.placeholder.com/1440x1080" alt="">
        </div>
        <div class="flex flex-wrap my-3">
            <div class="my-3 w-full lg:w-1/3">
                <span class="block my-3">
                    DEUS:<br>
                    REX-13:<br>
                </span>
                <span class="block my-3">
                    URL:<br>
                    IG:<br>
                </span>
            </div>
            <div class="mt-3 w-full lg:w-2/3">
                {{ project.description }}
            </div>
        </div>

        <div class="flex flex-wrap w-full -mx-2">
            <div v-for="(image, i) in images" :key="i" class="w-1/4 p-2 cursor-pointer">
                <img :src="image" alt="" class="glightbox" data-type="image">
            </div>
        </div>
    </div>

    <hr>
</template>

<script>
import GLightbox from 'glightbox';

export default {
    props: {
        project: Object,
    },
    data() {
        return {
            images: [
                'https://via.placeholder.com/1440x1080',
                'https://via.placeholder.com/1440x1080',
                'https://via.placeholder.com/1440x1080',
                'https://via.placeholder.com/1440x1080',
                'https://via.placeholder.com/1440x1080',
                'https://via.placeholder.com/1440x1080',
            ],
        }
    },
    mounted() {
        const gallery = GLightbox({
            selector: '.glightbox',
        })
    }
}
</script>
