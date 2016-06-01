import Vue from 'vue'
import user_grid from './components/user-grid'

Vue.use(require('vue-resource'))

Vue.component('user-grid', user_grid);

new Vue({
  el: '#user_app',

  data: {  
  	users: [],
		pagination: {
  		current_page: '',
  		from: '',
  		to: '',
  		per_page: '',
  		last_page: '',
  		total: '',
  		next_page_url: '',
  		prev_page_url: ''
  	},
  	message : ''
  },

  ready: function() {  	
  	this.fetchData('/api/user/');
  },

  methods: {
		fetchData: function(api_url){
  		var resource = this.$resource(api_url);

			resource.get().then(function(response){ 
				var result = response.data;
	  		
	  		// Get user data.
	  		this.users = result.data;

	  		// Get pagination data.
	  		this.pagination.current_page = result.current_page;
	  		this.pagination.from = result.from;
	  		this.pagination.to = result.to;
	  		this.pagination.per_page = result.per_page;
	  		this.pagination.total = result.total;
	  		this.pagination.last_page = result.last_page;
	  		this.pagination.next_page_url = result.next_page_url;
	  		this.pagination.prev_page_url = result.prev_page_url;

	  	});
  	}
  },

  events: {
    'child-msg': function (msg) {
      // `this` in event callbacks are automatically bound
      // to the instance that registered it
      this.message = msg;
    },

    'pg-previous': function(){
    	if(this.pagination.current_page === 1) return;

  		this.fetchData(this.pagination.prev_page_url);
    },

    'pg-next': function(){    	
  		if(this.pagination.current_page === this.pagination.last_page) return;

  		this.fetchData(this.pagination.next_page_url);
    },

    'pg-goTo': function(page){  
  		this.fetchData('/api/user/?page=' + page);
    }
  }
});

