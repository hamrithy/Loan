export default {
	data: function(){
		return {
			check_all: false,
			checked_list: []
		}
	},

	methods: {
		onSelectAll: function(data_set){
  		if(this.check_all === true){
  			this.users.forEach(function(data_set){
  				this.checked_list.push(data_set.id + '');
  			}.bind(this));
  		}
  		else{
  			this.checked_list.splice(0);
  		}
  		
  	},

  	onSelectItems: function(){
  		this.check_all = false;
  	}
	}
}