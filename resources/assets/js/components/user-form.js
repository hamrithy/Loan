// export default {
// 	template: '#user-form-template',

// 	data: function () {
// 		return {
// 			message: 'Hello'
// 		}
// 	}
// }

export default {
	template: '#user-form-template',

	data: function () {
		return {
			
		}
	},

	methods: {
		saveUser: function(){
			
			this.$dispatch('show-form', false);
		},

		close: function(){
			this.$dispatch('show-form', false);
		}
	}  
}