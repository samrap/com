<template>
    <samrap-head />

    <header id="siteHeader" class="flex items-center justify-between mx-auto w-full max-w-7xl py-6 px-6 lg:py-10">
      <Link href="/" class="inline-block py-3 opacity-100 transition-all duration-200 hover:opacity-80">
        <div class="flex items-center justify-center w-12 h-12 bg-blue">
            <svg-vue icon="signature" class="fill-black w-8"></svg-vue>
        </div>
      </Link>

      <nav id="desktopNav" class="hidden lg:block">
        <ul>
          <li
            v-for="link, i in links" :key="i"
            class="inline-block mx-2">
            <a v-if="link.outbound" :href="link.href" class="inline-block p-1 text-white uppercase font-bold text-sm">
              {{ link.title }}
            </a>

            <Link v-else :href="link.href" class="inline-block p-1 text-white uppercase font-bold text-sm">
              {{ link.title }}
            </Link>
          </li>
        </ul>
      </nav>

      <div class="lg:hidden">
        <button @click="showMobileNav = !showMobileNav" type="button" class="p-4 -mr-4">
          <svg width="28" height="18" viewBox="0 0 28 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <title>Open mobile navigation</title>
            <rect width="28" height="2" rx="1" class="fill-white" />
            <rect y="16" width="28" height="2" rx="1" class="fill-white" />
            <rect x="6" y="8" width="22" height="2" rx="1" class="fill-white" />
          </svg>
        </button>
      </div>

      <transition enter-active-class="duration-150 ease-out" enter-from-class="opacity-0 scale-95" enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in" leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
        <div v-if="showMobileNav" class="fixed z-50 top-0 left-0 w-full h-screen py-10 px-6">
          <div class="flex items-center justify-center relative z-50 w-full h-full py-16 px-6 bg-black rounded shadow-xl shadow-white/50">
            <button @click="showMobileNav = false" type="button" class="absolute top-3 right-3">
              <svg width="40" height="40" viewBox="0 0 40 40">
                <title>Close mobile navigation</title>
                <path d="M25.6 14.3a1 1 0 0 1 0 1.4l-4.24 4.25 4.25 4.24a1 1 0 1 1-1.42 1.42l-4.24-4.25-4.24 4.25a1 1 0 0 1-1.42-1.42l4.25-4.24-4.25-4.24a1 1 0 0 1 1.42-1.42l4.24 4.25 4.24-4.25a1 1 0 0 1 1.42 0z" class="fill-white" fill-rule="evenodd"></path>
              </svg>
            </button>

            <nav>
              <ul class="text-center">
                <li v-for="link, i in links" :key="i" class="my-4">
                  <a
                    v-if="link.outbound"
                    @click="showMobileNav = false"
                    class="p-4 text-xl uppercase font-bold text-white transition-opacity duration-300 hover:opacity-75"
                    :href="link.href">
                    {{ link.title }}
                  </a>

                  <Link
                    v-else
                    @click="showMobileNav = false"
                    class="p-4 text-xl uppercase font-bold text-white transition-opacity duration-300 hover:opacity-75"
                    :href="link.href">
                    {{ link.title }}
                  </Link>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </transition>
    </header>

    <main :class="{ 'blur-lg': showMobileNav }">
        <slot></slot>
    </main>

    <footer class="mt-14 mx-auto py-8 px-10 max-w-sm text-md md:text-lg text-center uppercase font-bold">
        <svg-vue icon="signature" class="fill-white"></svg-vue>
        &copy; {{ new Date().getFullYear() }}
    </footer>
</template>

<script>
export default {
    data() {
        return {
            links: [
                { title: 'Shop', href: 'https://fiveninesclo.com', outbound: true },
                { title: 'Portfolio', href: '/portfolio', outbound: false },
                { title: 'Mag', href: 'https://mag.samrapaport.com', outbound: true },
                { title: 'About', href: '/about', outbound: false },
            ],
            showMobileNav: false,
        }
    }
}
</script>
