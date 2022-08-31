<template>
    <samrap-head />

    <div class="flex items-center justify-center w-full h-screen">
        <header class="fixed top-0 right-0 left-0 w-full py-8 px-6">
            <div class="mx-auto w-80 text-md md:text-lg text-center uppercase font-bold">
                <svg-vue icon="signature" class="fill-white"></svg-vue>
                &copy; {{ new Date().getFullYear() }}
            </div>
        </header>

        <main>
            <slot></slot>
        </main>

        <footer class="fixed right-0 bottom-0 left-0 w-full py-8 px-6 -scale-y-[1]">
            <div class="mx-auto w-80 text-md md:text-lg text-center uppercase font-bold">
                <svg-vue icon="signature" class="fill-white"></svg-vue>
                &copy; {{ new Date().getFullYear() }}
            </div>
        </footer>
    </div>
</template>
