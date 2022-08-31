<template>
    <samrap-head :title="project.name.toUpperCase() + ' PROJECT'"></samrap-head>

    <section>
        <header class="mb-4 lg:mb-16 px-4 lg:px-8 text-left">
            <h1 class="relative z-10 font-bold text-7xl uppercase leading-none">
                {{ project.name }}
            </h1>
        </header>

        <div class="mx-auto max-w-[1680px]">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 px-4 lg:px-8">
                    <samrap-img
                        :src="project.featured_image_resolutions._1x"
                        :retina="project.featured_image_resolutions._2x">
                    </samrap-img>
                </div>

                <div class="w-full md:w-1/2 px-4 pt-16 md:pt-36 lg:px-8">
                    <div class="rte" v-html="project.description"></div>
                </div>
            </div>

            <div class="py-12 px-4 lg:px-8 lg:py-36 xl:text-2xl">
                <div>
                    <strong>URL:</strong> <a v-if="project.url" :href="project.url">{{ project.url }}</a> <span v-else>N/A</span>
                </div>
                <div>
                    <strong>INSTAGRAM:</strong> <a v-if="project.instagram" :href="`https://instagram.com/${project.instagram}`">{{ project.instagram }}</a> <span v-else>N/A</span>
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-[1680px]">
            <div class="flex flex-wrap">
                <div v-for="(image, i) in project.images" :key="i" class="w-1/2 px-4 lg:px-8 [&:nth-child(2n)]:pt-12 cursor-pointer">
                    <a
                        :href="image.resolutions._1x"
                        class="glightbox"
                        data-type="image"
                        :data-srcset="getSrcSet(image.resolutions._1x, image.resolutions._2x)">
                        <img :src="image.resolutions._1x" :alt="image.alt" class="relative z-0 transition-all duration-1000 ease-in-out hover:scale-105">
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import GLightbox from 'glightbox';
export default {
    props: {
        project: Object,
    },
    methods: {
        getSrcSet(src, retina) {
            return retina != null
                ? [src, retina.concat(' 2x')].join(', ')
                : null
        },
    },
    mounted() {
        const gallery = GLightbox({
            selector: '.glightbox',
        })
    }
}
</script>
