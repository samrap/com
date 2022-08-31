<template>
    <nav>
        <ul class="text-center">
            <li class="my-4">
                <a href="https://fiveninesclo.com" target="_blank" class="inline-block py-2 font-bold text-2xl text-white uppercase">Shop</a>
            </li>
            <li class="my-4">
                <Link href="/portfolio" class="inline-block py-2 font-bold text-2xl text-white uppercase">Portfolio</Link>
            </li>
            <li class="my-4">
                <a href="https://mag.samrapaport.com" class="inline-block py-2 font-bold text-2xl text-white uppercase">Mag</a>
            </li>
            <li class="my-4">
                <Link href="/about" class="inline-block py-2 font-bold text-2xl text-white uppercase">About</Link>
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
