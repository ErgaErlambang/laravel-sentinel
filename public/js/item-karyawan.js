var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;


manageData();


/* manage data list */
function manageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){


    	total_page = data.last_page;
    	current_page = data.current_page;


    	$('#pagination').twbsPagination({
	        totalPages: total_page,
	        visiblePages: current_page,
	        onPageClick: function (event, pageL) {
	        	page = pageL;
                if(is_ajax_fire != 0){
	        	  getPageData();
                }
	        }
	    });


    	manageRow(data.data);
        is_ajax_fire = 1;
    });
}


$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});


/* Get Page Data*/
function getPageData() {
	$.ajax({
    	dataType: 'json',
    	url: url,
    	data: {page:page}
	}).done(function(data){
		manageRow(data.data);
	});
}


/* Add new Item table row */
function manageRow(data) {
	var	rows = '';
	$.each( data, function( key, value ) {
	  	rows = rows + '<tr>';
	  	rows = rows + '<td>'+value.nama+'</td>';
        rows = rows + '<td>'+value.alamat+'</td>';
        rows = rows + '<td>'+value.phone+'</td>';
	  	rows = rows + '<center><td data-id="'+value.id+'">';
        rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item"><i class="fa fa-edit"></i> Edit</button> ';
        rows = rows + '<button class="btn btn-danger remove-item">Delete <i class="fa fa-trash"></i></button>';
        rows = rows + '</td></center>';
	  	rows = rows + '</tr>';
	});


	$("tbody").html(rows);
}



/* Create new Item */
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    var nama = $("#create-item").find("input[name='nama']").val();
    var alamat = $("#create-item").find("input[name='alamat']").val();
    var phone = $("#create-item").find("input[name='phone']").val();


    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:{nama:nama, alamat:alamat, phone:phone}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 1000});
    });


});


/* Remove Item */
$("body").on("click",".remove-item",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");
    $.ajax({
        dataType: 'json',
        type:'delete',
        url: url + '/' + id,
    }).done(function(data){
        c_obj.remove();
        toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 1000});
        getPageData();
    });
});


/* Edit Item */
$("body").on("click",".edit-item",function(){
    var id = $(this).parent("td").data('id');
    var nama = $(this).parent("td").prev("td").prev("td").prev("td").text();
    var alamat = $(this).parent("td").prev("td").prev("td").text();
    var phone = $(this).parent("td").prev("td").text();

 
    $("#edit-item").find("input[name='nama']").val(nama);
    $("#edit-item").find("input[name='alamat']").val(alamat);
    $("#edit-item").find("input[name='phone']").val(phone);
    $("#edit-item").find("form").attr("action",url + '/' + id);
});


/* Updated new Item */
$(".crud-submit-edit").click(function(e){
    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var nama = $("#edit-item").find("input[name='nama']").val();
    var alamat = $("#edit-item").find("input[name='alamat']").val();
    var phone = $("#edit-item").find("input[name='phone']").val();


    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{nama:nama, alamat:alamat, phone:phone}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 1000});
    });
});