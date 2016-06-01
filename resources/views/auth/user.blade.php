@extends('_layouts.app')

@section('content_wrapper')
<!-- PAGE CONTENT WRAPPER -->
<div id="user_app" class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
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
				            <td>@{{ user.user_name }}</td>
				            <td>@{{ user.full_name }}</td>
				            <td>@{{ user.email }}</td>
				            <td>@{{ user.role.name }}</td>
				            <td>@{{ user.status }}</td>
				        </tr>
				      </tbody>
						</table>
						<div class="dataTables_info">
							Showing @{{ pagination.from }} to @{{ pagination.to }} of @{{ pagination.total }} @{{ pagination.total |  pluralize 'record' }}
						</div>
						<div class="dataTables_paginate paging_simple_numbers">
							<a v-on:click.stop.prevent="previous" class="paginate_button previous" v-bind:class="{ 'paginate_button_disabled': pagination.current_page === 1}">Previous</a>
							<span v-for="page in pagination.last_page">
								<a v-on:click.stop.prevent="goTo(page + 1)" class="paginate_button" v-bind:class="{ 'current': pagination.current_page === page + 1}">@{{ page + 1 }}</a>
							</span>
							<a v-on:click.stop.prevent="next" class="paginate_button next" v-bind:class="{ 'paginate_button_disabled': pagination.current_page === pagination.last_page}">Next</a>
						</div>
          </div>
				</div>
			</div>
		</div>
	</div>
</div>      
<!-- END PAGE CONTENT WRAPPER --> 
@stop
