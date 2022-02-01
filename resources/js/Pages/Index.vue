<template>
    <div v-for="(project, i) in projects" :key="project.id">
        <hr v-if="i == 0">

        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-2/5 p-4">
                <Link :href="route('projects.show', project.id)">
                    <img src="https://via.placeholder.com/1440x1080" alt="">
                </Link>
            </div>
            <div class="w-full md:w-3/5 p-4">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full md:w-3/4 px-4">
                        <div class="mb-4">
                            {{ String(project.id).padStart(2, '0') }} <Link :href="route('projects.show', project.id)" class="uppercase">{{ project.name }}</Link>
                        </div>
                        {{ project.summary }}

                        <br><br>
                        <Link :href="route('projects.show', project.id)">Read more</Link>
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
