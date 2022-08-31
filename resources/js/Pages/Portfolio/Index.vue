<template>
    <samrap-head title="PORTFOLIO"></samrap-head>

    <section>
        <header class="mb-16 px-4 lg:px-8 text-right">
            <h1 class="relative z-10 font-bold text-4xl lg:text-7xl leading-tight uppercase">Portfolio</h1>
        </header>
    </section>

    <div class="mx-auto max-w-[1680px]">
        <div class="flex flex-wrap">
            <div v-for="project in projects" :key="project.id" class="w-1/2 px-4 lg:px-8 [&:nth-child(2n)]:pt-36">
                <Link :href="route('project.show', {'id': project.id, 'slug': project.slug})" class="group block text-white">
                    <samrap-img
                        :alt="project.name"
                        :src="project.featured_image_resolutions._1x"
                        :retina="project.featured_image_resolutions._2x"
                        class="relative z-0 transition-all duration-1000 ease-in-out group-hover:scale-105 group-hover:opacity-80">
                    </samrap-img>

                    <h3 class="relative z-10 font-bold text-2xl lg:text-6xl leading-tight uppercase">
                        {{ project.name }}
                    </h3>
                </Link>
            </div>
        </div>
    </div>

    <!-- <div class="flex flex-wrap -mx-6">
        <div v-for="project in projects" :key="project.id" class="w-1/2 p-6">
            <samrap-img
                :src="project.featured_image_resolutions._1x"
                :retina="project.featured_image_resolutions._2x">
            </samrap-img>
        </div>
    </div> -->
</template>

<script>
export default {
    props: {
        projects: Object,
    }
}
</script>
