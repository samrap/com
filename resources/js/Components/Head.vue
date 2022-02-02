<template>
    <Head :title="title ? `${title} - SAM RAPAPORT` : 'SAM RAPAPORT'">
        <slot />
    </Head>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Head,
    },
    props: {
        title: String,
    },
}
</script>
