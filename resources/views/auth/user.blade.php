@extends('_layouts.app')

@section('content_wrapper')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="dataTables_wrapper no-footer" id="DataTables_Table_0_wrapper">
						<div id="DataTables_Table_0_length" class="dataTables_length">
							<label>Show 
								<select class="form-control" aria-controls="DataTables_Table_0" name="DataTables_Table_0_length">
									<option value="10">10</option>
									<option value="25">25</option>
									<option value="50">50</option>
									<option value="100">100</option>
								</select> 
								entries
							</label>
						</div>
						<div class="dataTables_filter" id="DataTables_Table_0_filter">
							<label>Search:<input aria-controls="DataTables_Table_0" placeholder="" class="form-control " type="search"></label>
						</div>
						<table aria-describedby="DataTables_Table_0_info" role="grid" id="DataTables_Table_0" class="table datatable dataTable no-footer">
              <thead>
                <tr role="row">
                	<th aria-sort="descending" aria-label="Name: activate to sort column ascending" style="width: 198px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" class="sorting_desc">User Account</th>
                	<th aria-label="Position: activate to sort column ascending" style="width: 311px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" class="sorting">Full Name</th>
                	<th aria-label="Office: activate to sort column ascending" style="width: 149px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" class="sorting">Email</th>
                	<th aria-label="Age: activate to sort column ascending" style="width: 69px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" class="sorting">Status</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($users as $user)
                <tr role="row">
				            <td class="sorting_1">{{ $user->user_name }}</td>
				            <td>{{ $user->full_name }}</td>
				            <td>{{ $user->email }}</td>
				            <td>{{ $user->status }}</td>
				        </tr>
				        @endforeach
				      </tbody>
						</table>
						<div aria-live="polite" role="status" id="DataTables_Table_0_info" class="dataTables_info">
							Showing 1 to 10 of 57 entries
						</div>
						<div id="DataTables_Table_0_paginate" class="dataTables_paginate paging_simple_numbers">
							<a id="DataTables_Table_0_previous" tabindex="0" data-dt-idx="0" aria-controls="DataTables_Table_0" class="paginate_button previous disabled">Previous</a>
							<span>
								<a tabindex="0" data-dt-idx="1" aria-controls="DataTables_Table_0" class="paginate_button current">1</a>
								<a tabindex="0" data-dt-idx="2" aria-controls="DataTables_Table_0" class="paginate_button ">2</a>
								<a tabindex="0" data-dt-idx="3" aria-controls="DataTables_Table_0" class="paginate_button ">3</a>
								<a tabindex="0" data-dt-idx="4" aria-controls="DataTables_Table_0" class="paginate_button ">4</a>
								<a tabindex="0" data-dt-idx="5" aria-controls="DataTables_Table_0" class="paginate_button ">5</a>
								<a tabindex="0" data-dt-idx="6" aria-controls="DataTables_Table_0" class="paginate_button ">6</a>
							</span>
							<a id="DataTables_Table_0_next" tabindex="0" data-dt-idx="7" aria-controls="DataTables_Table_0" class="paginate_button next">Next</a>
						</div>
          </div>
				</div>
			</div>
		</div>
	</div>
</div>      
<!-- END PAGE CONTENT WRAPPER --> 
@stop