import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import DefaultLayout from './Layouts/Default'
import SamrapHead from './Components/Head'
import SamrapImg from './Components/Img'
import SamrapContainer from './Components/Container'
import SvgVue from 'svg-vue3'

createInertiaApp({
    resolve: name => {
        const page = require(`./Pages/${name}`).default
        page.layout = page.layout || DefaultLayout
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
        .use(plugin)
        .use(SvgVue)
        .component('Link', Link)
        .component('samrap-head', SamrapHead)
        .component('samrap-container', SamrapContainer)
        .component('samrap-img', SamrapImg)
        .mixin({ methods: { route: window.route } })
        .mount(el)
    },
})

InertiaProgress.init({
    color: '#fff944',
})
