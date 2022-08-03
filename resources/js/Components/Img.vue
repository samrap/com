<template>
    <img :src="src" :srcset="getResolutions()">
</template>

<script>
export default {
    props: {
        src: {
            type: String,
            required: true,
        },
        retina: {
            type: String,
            required: false,
        },
    },
    methods: {
        getResolutions() {
            return this.retina != null
                ? [this.src, this.retina.concat(' 2x')].join(', ')
                : null
        }
    }
}
</script>
