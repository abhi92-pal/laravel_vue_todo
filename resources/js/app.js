// import './bootstrap';

// import Vue from 'vue'
// import App from './vue/app'

// const app = new Vue({
    //     el: '#app',
    //     components: { App }
    // });
    
    
import {createApp} from 'vue'
// import Vue from 'vue'

import App from './vue/app.vue'


import { library } from '@fortawesome/fontawesome-svg-core'
import { faPlusSquare, faTrash } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faPlusSquare, faTrash)

// Vue.component('font-awesome-icon', FontAwesomeIcon)

createApp(App).mount("#app")
// const app = new Vue({
//     el: '#app',
//     components: { App }
// });