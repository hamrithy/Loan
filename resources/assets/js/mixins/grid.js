export default {
	data: function(){
		return {
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
			check_all: false,
			checked_list: []
		}
	},

	methods: {
		onSelectAll: function(data_set){
  		if(this.check_all === true){
  			data_set.forEach(function(data){
  				this.checked_list.push(data.id + '');
  			}.bind(this));
  		}
  		else{
  			this.checked_list.splice(0);
  		}
  		
  	},

  	onSelectItems: function(){
  		this.check_all = false;
  	},

  	setPagination: function(pagination){
  		this.pagination.current_page = pagination.current_page;
  		this.pagination.from = pagination.from;
  		this.pagination.to = pagination.to;
  		this.pagination.per_page = pagination.per_page;
  		this.pagination.total = pagination.total;
  		this.pagination.last_page = pagination.last_page;
  		this.pagination.next_page_url = pagination.next_page_url;
  		this.pagination.prev_page_url = pagination.prev_page_url;
  	}
	}
}