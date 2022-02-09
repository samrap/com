<template>
    <Head />

    <section class="mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:fixed md:top-0 md:right-0 md:w-1/3 md:order-last px-4">
                <hr>
                <div class="flex -mx-4">
                    <div class="w-full md:w-3/4 px-4">
                        <Link class="uppercase" href="/">Sam Rapaport</Link>
                    </div>
                    <div class="w-full md:w-1/4 px-4">
                        <Link class="uppercase" href="/">[INDEX]</Link>
                        <Link class="uppercase" href="https://blog.samrapaport.com">[BLOG]</Link>
                    </div>
                </div>

                <div class="pt-8">
                    <p class="mb-4">
                        Since 2015 I have helped brands break marketing barriers online and
                        built complex infrastructure at a massive scale in big tech.
                    </p>
                    <p class="mb-4">
                        I am now on a mission to utilize my vast network of creatives and expertise in
                        modern technology to bring impossible visions into reality.
                    </p>
                    <p class="mb-4">
                        I do it for my own business as founder and creative director of
                        <a class="uppercase" href="https://fiveninesclo.com" target="_blank">Five Nines</a>.
                    </p>
                    <p class="mb-6">
                        Looking to create The Next Big Thing&trade;? Let's talk.
                    </p>
                    <a class="mt-6" href="mailto:me@samrapaport.com">Email</a>
                    <br />
                    <a href="https://instagram.com/samrapaport" target="_blank">Instagram</a>
                    <hr>

                    <div class="mt-6 uppercase text-xs text-right">
                        &copy; {{ new Date().getFullYear() }} Sam Rapaport
                    </div>
                </div>
            </div>

            <div class="w-full md:w-2/3 px-4">
                <slot />
            </div>
        </div>
    </section>

    <footer class="p-6">
        <hr>
        <div>
            <Link href="/" class="uppercase">Index</Link>
            <Link v-if="nextLink" :href="nextLink" class="ml-6 uppercase">Next &rarr;</Link>
        </div>
    </footer>
</template>

<script>
export default {
    props: {
        nextLink: String,
    }
}
</script>
