@extends('_layouts.app')

@section('content_wrapper')


@include('_templates.user_grid')

<!-- PAGE CONTENT WRAPPER -->
<div id="user_app" class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<user-grid
						:users="users"
						:pagination="pagination"
					></user-grid>
					@{{ message }}
				</div>
			</div>
		</div>
	</div>
</div>      
<!-- END PAGE CONTENT WRAPPER --> 
@stop
