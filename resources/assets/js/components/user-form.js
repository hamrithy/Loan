export default {
	template: '#user-form-template',

	data: function () {
		return {	
			user: {		
				user_name : '',
				email: '',
				full_name: '',
				role_id: ''
			}	
		}
	},

	methods: {
		saveUser: function(){			
			var resource = this.$resource('/api/user');

			resource.save(this.user).then(function(response){
				console.log(response);
			});


			//this.$dispatch('show-form', false);
		},

		close: function(){
			this.$dispatch('show-form', false);
		}
	}  
}