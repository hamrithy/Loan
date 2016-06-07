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
  	}
	}
}