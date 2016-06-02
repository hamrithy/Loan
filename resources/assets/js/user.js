import Vue from 'vue'
import user_grid from './components/user-grid'
import user_form from './components/user-form'

Vue.use(require('vue-resource'))

Vue.component('user-grid', user_grid);
Vue.component('user-form', user_form);

new Vue({
  el: '#user_app',

  data: {    	
  	form_show: false,
  	currentView: 'user_grid'
  },

  components: {
  	user_grid: user_grid,
  	user_form: user_form
  },

  events: {
    'show-form':  function(value){
    	this.form_show = value;
    }
  }
});

