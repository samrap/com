<template>
    <nav>
        <ul class="text-center">
            <li>
                <a href="https://thatsrdd.com" class="block w-full px-4 py-4 bg-blue text-white font-bold text-xl text-center">That's <em>Really</em> Dope &rarr;</a>
            </li>
        </ul>
    </nav>
</template>

<script>
import HomeLayout from '../Layouts/Home'

export default {
    layout: HomeLayout,
    components: {
        HomeLayout: HomeLayout,
    }
}
</script>
