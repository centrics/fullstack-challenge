import Vue from 'vue'
import App from './App.vue'

// rotas
import VueRouter from 'vue-router';
import Routes from './routes';

// bootstrap
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// font awesome
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { library } from '@fortawesome/fontawesome-svg-core'

// icons
import { faCar, faUser, faMotorcycle, faBuilding, faDesktop, faHome } from '@fortawesome/free-solid-svg-icons'
import { faFacebookSquare, faYoutube, faTwitterSquare, faGooglePlusSquare} from '@fortawesome/fontawesome-free-brands';
library.add(faCar);
library.add(faUser);
library.add(faMotorcycle);
library.add(faBuilding);
library.add(faDesktop);
library.add(faHome);
library.add(faFacebookSquare);
library.add(faTwitterSquare);
library.add(faYoutube);
library.add(faGooglePlusSquare);



Vue.use(BootstrapVue);
Vue.use(VueRouter);
Vue.component('font-awesome-icon', FontAwesomeIcon);

Vue.config.productionTip = false

const router = new VueRouter({
  routes: Routes,
  mode: 'history'
});

new Vue({
  el: '#app',
  render: h => h(App),
  router: router
})
