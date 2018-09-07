<!DOCTYPE html>
<html>
<head>
	<title>Laravel Ajax Crud</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/4.0.0/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/loading.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/ajax/css/toastr.min.css') }}">
</head>
<body>
<br>

	<div class="container" id="create-item">
		<h2 class="text-muted">Input Data</h2>
  		<form id="form_submit" data-toggle="validator" action="{{ route('cruds.store') }}" method="POST">
  			{{ csrf_field() }}
  			<div class="form-group">
				<label class="control-label" for="title">Nama :</label>
				<input type="text" name="nama" class="form-control" data-error="Masukan Nama." required />
				<div class="help-block with-errors"></div>
				<br>
				<label class="control-label" for="title">Judul</label>
				<input type="text" name="judul" class="form-control" data-error="Masukan Judul" required />
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn crud-submit btn-success form-control">Submit</button>
				<br>
				<div id="loading" style="display: none;" class="bubblingG">
					<span id="bubblingG_1">
					</span>
					<span id="bubblingG_2">
					</span>
					<span id="bubblingG_3">
					</span>
				</div>
			</div>
  		</form>
	</div>
   
	<br>
	<div class="container">
		<h2 class="text-muted"> Daftar User </h2>
		<table class="table table-bordered">
			<thead>
			    <tr>
				<th>Nama</th>
				<th>Judul</th>
				<th width="19%">Action</th>
			    </tr>
			</thead>
			<tbody>
				@foreach ( $cruds as $value )
				<tr>
					<td>{{$value->nama}}</td>
					<td>{{$value->judul}}</td>
					<td data-id="{{$value->id}}">
						<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item"><i class="fa fa-edit"></i> Edit</button>
						<button class="btn btn-danger remove-item" >Delete <i class="fa fa-trash"></i></button>
						<span id="loading2" style="display: none;" class="loading2"><img width="15%" src="{{ asset('gif/smooth.gif') }}"></span>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<h2 align="center">Pagination</h2>
		<!-- <ul id="pagination" class="pagination-sm"></ul> -->

		<!-- Snackbar Delete
		<div id="snackbar_del">Proses Menghapus....</div>
		 Snackbar Edit
		<div id="snackbar_edit">Proses Editing....</div>
		 Snackbar Create 
		<div id="snackbar_add">Proses Register....</div -->

		<!-- Edit Item Modal -->
		<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			 <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			        <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
			      </div>
			      <div class="modal-body">
			      		<form data-toggle="validator" id="edit_form" action="/cruds/14" method="put">
			      			{{ csrf_field() }}
			      			<div class="form-group">
								<label class="control-label" for="title">Nama :</label>
								<input type="text" name="nama" class="form-control" data-error="Masukan Nama." required />
							<div class="help-block with-errors"></div>
								<label class="control-label" for="title">Judul:</label>
								<input type="text" name="judul" class="form-control" />
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

</body>

	<script type="text/javascript" src="{{ asset('/jquery/3.1.0/jquery.js')}}"></script>
	<script type="text/javascript" src="{{ asset('/4.0.0/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('/ajax/js/toastr.min.js') }}"></script>


<script type="text/javascript">
       var url = "{{route('cruds.index')}}"
</script>


<script type="text/javascript">
// $(document).ready(function(){
// 	$('.loading2').hide();
// })
	
$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});



/* Add new Item table row */
// function manageRow(data) {
// 	var	rows = '';
// 	$.each( data, function( data, value) {
// 	  	rows = rows + '<tr>';
// 	  	rows = rows + '<td>'+value.nama+'</td>';
//         rows = rows + '<td>'+value.judul+'</td>';
// 	  	rows = rows + '<center><td data-id="'+value.id+'">';
//         rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item"><i class="fa fa-edit"></i> Edit</button> ';
//         rows = rows + '<button class="btn btn-danger remove-item" >Delete <i class="fa fa-trash"></i></button>';
//         rows = rows + '</td></center>';
// 	  	rows = rows + '</tr>';
// 	});


// 	$("tbody").html(rows);
// }



/* Create new Item */
$(".crud-submit").click(function(){
	// event.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    var submit = $("#form_submit").serialize();
    $('#loading').fadeIn(500);
    return false;
    // var valnama = $("#create-item").find("input[name='nama']").val();
    // var valjudul = $("#create-item").find("input[name='judul']").val();
    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:submit,
    	error: function() {
    		toastr.error('Kesalahan terjadi, silahkan coba lagi!',{timeOut: 2000});
    		$('#loading').fadeOut(500);
    	},
    	success : function() {
	        toastr.success('Berhasil ditambah.', {timeOut: 2000});
	        $('#form_submit').trigger('reset');
	        $('#loading').fadeOut(500);
		// console.log(data);
        },
    }); 


}); 


/* Remove Item */
 $("body").on("click",".remove-item",function(event){
 	event.preventDefault();
    var vid = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");
    $('.loading2').fadeIn(500);
    // return false;

    $.ajax({
        dataType: 'json',
        type:'DELETE',
        url: url + '/' + vid,
    	error : function(){
    		toastr.error('Kesalahan terjadi, silahkan coba lagi!',{timeOut: 2000});
    		$('.loading2').fadeOut(500);
   		 },
   		 success : function(){
            c_obj.remove();
            // console.log(data);
            toastr.success('Berhasil di Delete.',{timeOut: 2000});
            $('.loading2').fadeOut(500);
            
 		},
	});
});
     


/* Edit Item */
$("body").on("click",".edit-item",function(){
    var id = $(this).parent("td").data('id');
    var valnama = $(this).parent("td").prev("td").prev("td").text();
    var valjudul = $(this).parent("td").prev("td").text();

    $("#edit-item").find("input[name='nama']").val(valnama);
    $("#edit-item").find("input[name='judul']").val(valjudul);
    $("#edit-item").find("form").attr("action",url + '/' + id);
    $('.loading2').fadeIn(500)
});


/* Updated new Item */
$(".crud-submit-edit").click(function(event){
    event.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var Esubmit = $('#edit_form').serialize();
    // var valnama = $("#edit-item").find("input[name='nama']").val();
    // var valjudul = $("#edit-item").find("input[name='judul']").val();


    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data: Esubmit,			//{nama:valnama, judul:valjudul}
    	error: function(){
    		toastr.error('Kesalahan Terjadi, silahkan coba lagi', {timeOut: 2000});
    		$('.modal'),modal('hide');
    		$('.loading2').fadeOut(500);
    	},
    	success: function(){
	        $(".modal").modal('hide');
	        $('.loading2').fadeOut(500);
	        toastr.success('Berhasil di update.', {timeOut: 2000});
    	},
    });
});
</script>


<!-- <script>
function snackbar_del() {
    var bar = document.getElementById("snackbar_del");
    bar.className = "show";
    setTimeout(function(){ bar.className = bar.className.replace("show", ""); }, 3000);
}
</script> -->


<!-- <script type="text/javascript">
	function snackbar_edit (){
		var bar = document.getElementById("snackbar_edit");
		bar.className = "show";
		setTimeout(function(){
			bar.className = bar.className.replace("show","");
		}, 3000);
	}
</script>


<script type="text/javascript">
	function snackbar_add (){
		var bar = document.getElementById("snackbar_add");
		bar.className = "show";
		setTimeout(function(){
			bar.className = bar.className.replace("show","");
		}, 3000);
	}
</script> -->
</html>