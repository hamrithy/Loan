<template>
	<component :is="currentView"></component>
</template>

<script>
import user_grid from './user-grid.vue'
import user_form from './user-form.vue'

export default{
	data: function () {
		return {	
			currentView: 'user_grid'	
		}
	},

	components: {
		user_grid,
		user_form
	},

	events: {
		'show-form-msg': function(){
			this.currentView = 'user_form';
		},

		'show-grid-msg': function(){
			this.currentView = 'user_grid';
		},

		'add-new-user-msg': function(){
			console.log('parent');
		}
	}
}
</script>

<style>
</style>