<template>
    <samrap-container>
        <div class="flex flex-wrap -mx-6">
            <div v-for="project in projects" :key="project.id" class="w-1/2 p-6">
                <samrap-img
                    :src="project.featured_image_resolutions._1x"
                    :retina="project.featured_image_resolutions._2x">
                </samrap-img>
            </div>
        </div>
    </samrap-container>
</template>

<script>
export default {
    props: {
        projects: Object,
    }
}
</script>
