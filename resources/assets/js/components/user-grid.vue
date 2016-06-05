<template>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="dataTables_wrapper no-footer">
				<div class="dataTables_length">
					<label>Show 
						<select class="form-control">
							<option value="10">10</option>
							<option value="25">25</option>
							<option value="50">50</option>
							<option value="100">100</option>
						</select> 
						entries
					</label>
				</div>
				<div class="dataTables_filter">
					<label>Search:<input class="form-control " type="search"></label>
				</div>
				<table class="table datatable dataTable no-footer">
			    <thead>
			      <tr>
			      	<th style="width: 200px;" class="sorting_desc">User Account</th>
			      	<th style="width: 200px;" class="sorting">Full Name</th>
			      	<th style="width: 250px;" class="sorting">Email</th>
			      	<th style="width: 69px;" class="sorting">Role</th>
			      	<th style="width: 69px;" class="sorting">Status</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr v-for="user in users">
			          <td>{{ user.user_name }}</td>
			          <td>{{ user.full_name }}</td>
			          <td>{{ user.email }}</td>
			          <td>{{ user.role.name }}</td>
			          <td>{{ user.status }}</td>
			      </tr>
			    </tbody>
				</table>
				<div class="dataTables_info">
					Showing {{ pagination.from }} to {{ pagination.to }} of {{ pagination.total }} {{ pagination.total |  pluralize 'record' }}
				</div>
				<div class="dataTables_paginate paging_simple_numbers">
					<a v-on:click.stop.prevent="previous" class="paginate_button previous" v-bind:class="{ 'paginate_button_disabled': pagination.current_page === 1}">Previous</a>
					<span v-for="page in pagination.last_page">
						<a v-on:click.stop.prevent="goTo(page + 1)" class="paginate_button" v-bind:class="{ 'current': pagination.current_page === page + 1}">{{ page + 1 }}</a>
					</span>
					<a v-on:click.stop.prevent="next" class="paginate_button next" v-bind:class="{ 'paginate_button_disabled': pagination.current_page === pagination.last_page}">Next</a>
				</div>
				<button class="btn btn-primary" v-on:click="showForm">New</button>
			</div>
		</div>
	</div>
</template>

<script>
export default{
	data: function () {
		return {
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
  	},

  	showForm: function(){
  		this.$dispatch('show-form-msg');
  	}
	}
}
</script>

<style>
</style>