@extends('_layouts.app')

@section('content_wrapper')


@include('_templates.user_grid')

<!-- PAGE CONTENT WRAPPER -->
<div id="user_app" class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<!-- <user-grid
						:users="users"
						:pagination="pagination"
					></user-grid> -->
					
					<form class="form-horizontal">
						<div class="form-group">
                <label class="col-md-3 col-xs-12 control-label">User Account</label>
                <div class="col-md-6 col-xs-12">                                            
                    <div>
                        <input type="text" class="form-control"/>
                    </div>                                            
                    <span class="help-block">This is sample of text field</span>
                </div>
            </div>
            <div class="form-group">                                        
              <label class="col-md-3 col-xs-12 control-label">Password</label>
              <div class="col-md-6 col-xs-12">
                  <div>
                      <input type="password" class="form-control"/>
                  </div>            
                  <span class="help-block">Password field sample</span>
              </div>
          	</div>
            <div class="form-group">
                <label class="col-md-3 col-xs-12 control-label">Full Name</label>
                <div class="col-md-6 col-xs-12">                                            
                    <div>
                        <input type="text" class="form-control"/>
                    </div>                                            
                    <span class="help-block">This is sample of text field</span>
                </div>
            </div>
            <div class="form-group">
	            <label class="col-md-3 col-xs-12 control-label">Role</label>
	            <div class="col-md-6 col-xs-12">                                                                                            
	                <select class="form-control select">
	                    <option value="1">Adminstrator</option>
	                    <option value="2">Accountant</option>
	                </select>
	                <span class="help-block">Select box example</span>
	            </div>
	        	</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>      
<!-- END PAGE CONTENT WRAPPER --> 
@stop
