import './bootstrap';
import routes from './routes';
import VueRouter from 'vue-router';


let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});
