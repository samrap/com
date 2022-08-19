<template>
    <samrap-head />

    <div class="flex items-center justify-center w-full h-screen">
        <header class="fixed top-0 right-0 left-0 w-full py-8 px-6">
            <svg-vue icon="signature" class="mx-auto w-60 fill-white"></svg-vue>
        </header>

        <main>
            <slot></slot>
        </main>

        <footer class="fixed right-0 bottom-0 left-0 w-full py-8 px-6 text-xs text-center uppercase">
            Sam Rapaport &copy; {{ new Date().getFullYear() }}
        </footer>
    </div>
</template>
