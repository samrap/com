<template>
    <section class="mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:fixed md:top-0 md:right-0 md:w-1/3 md:order-last px-4">
                <hr>
                <div class="flex -mx-4">
                    <div class="w-full md:w-3/4 px-4">
                        <a class="uppercase" href="/">Sam Rapaport</a>
                    </div>
                    <div class="w-full md:w-1/4 px-4">
                        <span class="text-gray">LA/GMT</span>
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
                    <a class="mt-6" href="#">Email</a>
                    <br />
                    <a href="#">Instagram</a>
                    <hr>
                </div>
            </div>

            <div class="w-full md:w-2/3 px-4">
                <hr>
                <slot />
                <hr>
            </div>
        </div>
    </section>
</template>

<script>
export default {

}
</script>
