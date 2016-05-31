import Vue from 'vue'

Vue.use(require('vue-resource'))

new Vue({
  el: '#user_app',

  data: {
  	// user: {
  	// 	user_name: '',
	  //   full_name: '',
	  //   email: '',
	  //   role: '',
	  //   status: ''
  	// }    
  	
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
  	}
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
  	},

  	previous: function(){
  		if(this.pagination.current_page === 1) return;

  		this.fetchData(this.pagination.prev_page_url);
  	},

  	next: function(){
  		if(this.pagination.current_page === this.pagination.last_page) return;

  		this.fetchData(this.pagination.next_page_url);
  	},

  	goTo: function(page){
  		this.fetchData('/api/user/?page=' + page);
  	}
  } 
});

