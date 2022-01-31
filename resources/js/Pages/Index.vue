<template>
    <div v-for="project in projects" :key="project.id">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-2/5 p-4">
                <img src="https://via.placeholder.com/1440x1080" alt="">
            </div>
            <div class="w-full md:w-3/5 p-4">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full md:w-3/4 px-4">
                        <div class="mb-4">
                            01 <a href="#" class="uppercase">{{ project.name }}</a>
                        </div>
                        {{ project.summary }}
                    </div>
                    <div class="w-full md:w-1/4 px-4">FN-003-TFW</div>
                </div>
            </div>
        </div>

        <hr>
    </div>
</template>

<script>
export default {
    props: {
        projects: Object,
    }
}
</script>
