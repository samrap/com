<template>
    <div v-for="(project, i) in projects" :key="project.id">
        <hr v-if="i == 0">

        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-2/5 p-4">
                <Link :href="route('projects.show', {'id': project.id, 'slug': project.slug})">
                    <samrap-img
                        :src="project.featured_image_resolutions._1x"
                        :retina="project.featured_image_resolutions._2x">
                    </samrap-img>
                </Link>
            </div>
            <div class="w-full md:w-3/5 p-4">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full md:w-3/4 px-4">
                        <div class="mb-4">
                            {{ String(project.id).padStart(2, '0') }} <Link :href="route('projects.show', {'id': project.id, 'slug': project.slug})" class="uppercase">{{ project.name }}</Link>
                        </div>
                        <span v-html="project.summary"></span>

                        <br><br>
                        <Link :href="route('projects.show', {'id': project.id, 'slug': project.slug})">Read more</Link>
                    </div>
                    <div class="w-full md:w-1/4 px-4">
                        SJR-PROJ-{{ String(project.id).padStart(2, '0') }} <br />
                        DOC-2022
                    </div>
                </div>
            </div>
        </div>

        <hr v-if="i < (projects.length - 1)">
    </div>
</template>

<script>
export default {
    props: {
        projects: Object,
    }
}
</script>
