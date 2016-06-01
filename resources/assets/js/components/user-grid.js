export default {
	template: '#user-table-template',

	props: {
		users: Array,
		pagination: Object
	},

	data: function () {
		return {
			
		}
	},

	methods: {
		previous: function(){
			this.$dispatch('pg-previous');  		
  	},

  	next: function(){
			this.$dispatch('pg-next');
  	},

  	goTo: function(page){
  		this.$dispatch('pg-goTo', page);
  	},

  	notify: function () {
      this.$dispatch('child-msg', 'Call from child');
    }
	}
}