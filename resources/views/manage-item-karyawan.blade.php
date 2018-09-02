<!DOCTYPE html>
<html>
<head>
	<title>Laravel Sentinel</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/4.0.0/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome-4.7.0/css/font-awesome.min.css')}}">
</head>
<body>
<br>
	<div class="container">

		<div class="row">
		    <div class="col-lg-12 margin-tb">					
		        <div class="pull-left">
		            <h2>Laravel Sentinel CRUD</h2>
		            @if( Sentinel::getUser()->roles()->first()->slug == 'admin')
		           		<p>Anda Masuk Sebagai <span style="font-size:20px"><strong style="color:green;">{{ Sentinel::getUser()->roles()->first()->slug }}</strong></span></p>
		            @else
		            	<p>Anda Masuk Sebagai <span style="font-size:20px"><strong style="color:red;">{{ Sentinel::getUser()->roles()->first()->slug }}</strong></span></p>
		            @endif
		        </div>

		        	<form action="/logout" method="post" id="logout-form">
       					 {{ csrf_field() }}
       					 <button class="btn btn-warning pull-right" onclick="document.getElementById('logout-form').submit()">Logout <i class="fa fa-sign-out"></i></button>
   					</form>
   					@if( Sentinel::getUser()->roles()->first()->slug == 'admin')
					<button style="margin-right: 1.2em" type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#create-item">Tambah Data <i class="fa fa-user-plus"></i></button>
				 @endif
		    </div>
		</div>
   


		<table class="table table-bordered">
			<thead>
			    <tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No Telepon</th>
				<th width="220px">Action</th>
			    </tr>
			</thead>
			<tbody>
			</tbody>
		</table>

		<ul id="pagination" class="pagination-sm"></ul>

	@if( Sentinel::getUser()->roles()->first()->slug == 'admin')
		    <!-- Create Item Modal -->
			<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			        <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
			      </div>
			      <div class="modal-body">

			      		<form data-toggle="validator" action="{{ route('item-karyawan.store') }}" method="POST">
			      			<div class="form-group">
								<label class="control-label" for="title">Nama :</label>
								<input type="text" name="nama" class="form-control" data-error="Masukan Nama." required />
								<div class="help-block with-errors"></div>
								<label class="control-label" for="title">Alamat :</label>
								<input type="text" name="alamat" class="form-control" data-error="Masukan Alamat" required />
								<div class="help-block with-errors"></div>
								<label class="control-label" for="title">No Telepon (Optional) :</label>
								<input name="phone" class="form-control"></input>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn crud-submit btn-success">Submit</button>
							</div>
			      		</form>
			      </div>
			    </div>
			  </div>
			</div>
		 @endif	

		<!-- Edit Item Modal -->
		<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
		      </div>
		      <div class="modal-body">

		      		<form data-toggle="validator" action="/item-karyawan/14" method="put">
		      			<div class="form-group">
							<label class="control-label" for="title">Nama :</label>
							<input type="text" name="nama" class="form-control" data-error="Masukan Nama." required />
						<div class="help-block with-errors"></div>
							<label class="control-label" for="title">Alamat :</label>
							<input type="text" name="alamat" class="form-control" />
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="control-label" for="title">No Telepon (Optional) :</label>
							<input type="text" name="phone" class="form-control"></input>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-success crud-submit-edit">Submit</button>
						</div>
		      		</form>

		      </div>
		    </div>
		  </div>
		</div>
	</div>

	<script type="text/javascript" src="{{ asset('/jquery/3.1.0/jquery.js')}}"></script>
	<script type="text/javascript" src="{{ asset('/4.0.0/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('/jquery/jquery.twbsPagination.min.js')}}"></script>
	<script src="{{ asset('/ajax/js/validator.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/ajax/js/toastr.min.js') }}"></script>
    <link href="{{ asset('/ajax/css/toastr.min.css') }}" rel="stylesheet">
    <script type="text/javascript">
       var url = "{{route('item-karyawan.index')}}"
    </script>
    <script src="/js/item-karyawan.js"></script> 
</body>
</html>