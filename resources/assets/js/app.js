require('./bootstrap');
window.Vue = require('vue');
import App from './components/App'

new Vue({
	el: '#app',
	template: '<App/>',
	components: { App }
});
