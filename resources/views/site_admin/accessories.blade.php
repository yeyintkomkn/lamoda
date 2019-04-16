@extends('layouts.site_admin_app')
@section('title','Site admin')
<style>
span.type{
  font-family: 'Frank Ruhl Libre', serif;
  font-size : 25px;
}
</style>
@section('content')
            <div class="content" id="accessory_top">
              <div class="container-fluid">
            	    <div class="row">
                    <div class="col-md-4">
                       <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title">Add New Accessory</h4>
                            {{--<p class="card-category">Complete Data</p>--}}
                          </div>
                          <div class="card-body accessory_create">
                            <form enctype="multipart/form-data" id="accessory_store">
                              {{csrf_field()}}

                                <input type="hidden" name="id" class="accessory_hidden">

                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Name</label>
                                    <input type="text" name="name" class="form-control accessory_name">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Detail</label>
                                    <textarea class="form-control accessory_detail" name="detail" rows="10" required></textarea>
                                  </div>
                                </div>
                              </div>
                                <div class="accessory_create_button">
                                  <button type="submit" class="btn btn-success btn-sm pull-right">Add</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <!-- start accessory pagination -->
                        <div class="card">
                          <div class="card-header tour_header card-header-primary">
                            <h4 class="card-title">Accessory</h4>
                            <!-- /<p class="card-category">New employees on 15th September, 2016</p> -->
                          </div>
                          <div class="card-body table-responsive">
                            <table class="table table-hover" id="accessory_paginate">
                              <thead class="text-warning">
                                <th style="width:10%">No</th>
                                <th style="width:10%">Name</th>
                                <th style="width: 50%">Detail</th>
                                <th>Action</th>
                              </thead>
                              <tbody class="accessory_data">
                               
                              </tbody>
                            </table>
                          </div>
                        </div>
                    <!-- end accessory pagination -->
                    </div>
            	    </div>
              </div>
            </div>

            <!-- start suit type -->
            <div class="row">
              <div class="col-md-6 offset-md-3 text-center" style="border : 1px solid skyblue;border-radius : 20px;">
                <span class="type">Suit Type</span>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-2"></div>
                <!-- start suit type 1 -->
                <div class="col-sm-4" id="suit_type_text_1">
                  <div class="card mb-3">
                  <div class="card-header bg-secondary text-white">
                    <span class="suit_type_name_1">
                      
                    </span>
                    <button class="pull-right btn btn-sm btn-info edit_suit_type" data-id="1">Edit</button>
                  </div>
                  <div class="card-body">
                    <p class="card-text suit_type_detail_1">

                    </p>
                  </div>
                </div>
                </div>

                <div class="col-sm-4" style="display: none;" id="suit_type_form_1">
                  <div class="card">
                  <div class="card-body">
                    <form class="form-group" id="suit_type_update" data-id="1">
                      {{csrf_field()}}
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <!-- <label class="bmd-label-floating">Name</label> -->
                              <input type="text" name="name" class="form-control suit_type_name_1" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <!-- <label class="bmd-label-floating">Detail</label> -->
                            <textarea name="detail" class="form-control suit_type_detail_1" rows="12" required></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="suit_type_create_button">
                          <button type="button" class="btn btn-info cancle btn-sm" data-id="1">Cancle</button>
                          <button type="submit" class="btn btn-success btn-sm pull-right suit_type_update_1">Save</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                  </div>
                </div>
              </div>
                <!-- end suit type 1 -->
                <!-- start suit type 2 -->
                <div class="col-sm-4" id="suit_type_text_2">
                  <div class="card mb-3">
                  <div class="card-header bg-secondary text-white">
                    <span class="suit_type_name_2">

                    </span>
                    <button class="pull-right btn btn-sm btn-info edit_suit_type" data-id="2">Edit</button>
                  </div>
                  <div class="card-body">
                    <p class="card-text suit_type_detail_2">

                    </p>
                  </div>
                </div>
                </div>

                <div class="col-sm-4" style="display: none;" id="suit_type_form_2">
                  <div class="card">
                  <div class="card-body">
                    <form class="form-group" id="suit_type_update" data-id="2">
                      {{csrf_field()}}
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <!-- <label class="bmd-label-floating">Name</label> -->
                              <input type="text" name="name" class="form-control suit_type_name_2" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <!-- <label class="bmd-label-floating">Detail</label> -->
                            <textarea name="detail" class="form-control suit_type_detail_2" rows="12" required></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="suit_type_create_button">
                          <button type="button" class="btn btn-info cancle btn-sm" data-id="2">Cancle</button>
                          <button type="submit" class="btn btn-success btn-sm pull-right suit_type_update_2">Save</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                  </div>
                </div>
              </div>
                <!-- end suit type 2 -->
              <div class="col-sm-2"></div>
            </div>
              <div class="row mt-2">
                <div class="col-sm-2"></div>
                <!-- start suit type 3 -->
                <div class="col-sm-4" id="suit_type_text_3">
                  <div class="card mb-3">
                  <div class="card-header bg-secondary text-white">
                    <span class="suit_type_name_3">
                      
                    </span>
                    <button class="pull-right btn btn-sm btn-info edit_suit_type" data-id="3">Edit</button>
                  </div>
                  <div class="card-body">
                    <p class="card-text suit_type_detail_3">

                    </p>
                  </div>
                </div>
                </div>

                <div class="col-sm-4" style="display: none;" id="suit_type_form_3">
                  <div class="card">
                  <div class="card-body">
                    <form class="form-group" id="suit_type_update" data-id="3">
                      {{csrf_field()}}
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <!-- <label class="bmd-label-floating">Name</label> -->
                              <input type="text" name="name" class="form-control suit_type_name_3" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <!-- <label class="bmd-label-floating">Detail</label> -->
                            <textarea name="detail" class="form-control suit_type_detail_3" rows="12" required></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="suit_type_create_button">
                          <button type="button" class="btn btn-info cancle btn-sm" data-id="3">Cancle</button>
                          <button type="submit" class="btn btn-success btn-sm pull-right suit_type_update_3">Save</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                  </div>
                </div>
              </div>
                <!-- end suit type 3 -->
                  <!-- start suit type 4 -->
                <div class="col-sm-4" id="suit_type_text_4">
                  <div class="card mb-3">
                  <div class="card-header bg-secondary text-white">
                    <span class="suit_type_name_4">
                      
                    </span>
                    <button class="pull-right btn btn-sm btn-info edit_suit_type" data-id="4">Edit</button>
                  </div>
                  <div class="card-body">
                    <p class="card-text suit_type_detail_4">

                    </p>
                  </div>
                </div>
                </div>

                <div class="col-sm-4" style="display: none;" id="suit_type_form_4">
                  <div class="card">
                  <div class="card-body">
                    <form class="form-group" id="suit_type_update" data-id="4">
                      {{csrf_field()}}
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <!-- <label class="bmd-label-floating">Name</label> -->
                              <input type="text" name="name" class="form-control suit_type_name_4" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <!-- <label class="bmd-label-floating">Detail</label> -->
                            <textarea name="detail" class="form-control suit_type_detail_4" rows="12" required></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="suit_type_create_button">
                          <button type="button" class="btn btn-info cancle btn-sm" data-id="4">Cancle</button>
                          <button type="submit" class="btn btn-success btn-sm pull-right suit_type_update_4">Save</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                  </div>
                </div>
              </div>
                <!-- end suit type 4 -->
              <div class="col-sm-2"></div>
            </div>

            <!-- end suit type -->

{{--<!-- start waist coat  -->--}}
{{--<div class="row mt-4">--}}
    {{--<div class="col-md-6 offset-md-3 text-center" style="border : 1px solid skyblue;border-radius : 20px;">--}}
    {{--<span class="type">Waist Coat</span>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="row mt-2">--}}
  {{--<div class="col-sm-2"></div>--}}
  {{--<!-- start waist coat 1 -->--}}
    {{--<div class="col-sm-4" id="waist_coat_text_1">--}}
      {{--<div class="card mb-3">--}}
      {{--<div class="card-header bg-secondary text-white">--}}
        {{--<span class="waist_coat_name_1">--}}
          {{----}}
        {{--</span>--}}
        {{--<button class="pull-right btn btn-sm btn-info edit_waist_coat" data-id="1">Edit</button>--}}
      {{--</div>--}}
      {{--<div class="card-body">--}}
        {{--<p class="card-text waist_coat_detail_1">--}}

        {{--</p>--}}
      {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-sm-4" style="display: none;" id="waist_coat_form_1">--}}
      {{--<div class="card">--}}
      {{--<div class="card-body">--}}
        {{--<form class="form-group" id="waist_coat_update" data-id="1">--}}
          {{--{{csrf_field()}}--}}
          {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
              {{--<div class="form-group">--}}
                {{--<!-- <label class="bmd-label-floating">Name</label> -->--}}
                  {{--<input type="text" name="name" class="form-control waist_coat_name_1" required>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
              {{--<div class="form-group">--}}
                {{--<!-- <label class="bmd-label-floating">Detail</label> -->--}}
                 {{--<textarea  name="detail" class="form-control waist_coat_detail_1" rows="12" required></textarea>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="waist_coat_create_button">--}}
              {{--<button type="button" class="btn btn-info cancle btn-sm" data-id="1">Cancle</button>--}}
              {{--<button type="submit" class="btn btn-success btn-sm pull-right waist_coat_update_1">Save</button>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</form>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
  {{--<!-- end waist coat 1 -->--}}
    {{--<!-- start waist coat 2 -->--}}
    {{--<div class="col-sm-4" id="waist_coat_text_2">--}}
      {{--<div class="card mb-3">--}}
      {{--<div class="card-header bg-secondary text-white">--}}
        {{--<span class="waist_coat_name_2">--}}
          {{----}}
        {{--</span>--}}
        {{--<button class="pull-right btn btn-sm btn-info edit_waist_coat" data-id="2">Edit</button>--}}
      {{--</div>--}}
      {{--<div class="card-body">--}}
        {{--<p class="card-text waist_coat_detail_2">--}}

        {{--</p>--}}
      {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-sm-4" style="display: none;" id="waist_coat_form_2">--}}
      {{--<div class="card">--}}
      {{--<div class="card-body">--}}
        {{--<form class="form-group" id="waist_coat_update" data-id="2">--}}
          {{--{{csrf_field()}}--}}
          {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
              {{--<div class="form-group">--}}
                {{--<!-- <label class="bmd-label-floating">Name</label> -->--}}
                  {{--<input type="text" name="name" class="form-control waist_coat_name_2" required>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
              {{--<div class="form-group">--}}
                {{--<!-- <label class="bmd-label-floating">Detail</label> -->--}}
                 {{--<textarea name="detail" class="form-control waist_coat_detail_2" rows="12" required></textarea>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="waist_coat_create_button">--}}
              {{--<button type="button" class="btn btn-info cancle btn-sm" data-id="2">Cancle</button>--}}
              {{--<button type="submit" class="btn btn-success btn-sm pull-right waist_coat_update_2">Save</button>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</form>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
  {{--<!-- end waist coat 2 -->--}}
  {{--<div class="col-sm-2"></div>--}}
{{--</div>--}}
            {{--<!-- end waist coat -->--}}
@endsection
@section('script')
<script type="text/javascript">
  function oringinal_form(){
      $('.accessory_name').val('');
      $('.accessory_detail').val('');
      $('.accessory_create form').attr('id','accessory_store');
      $('.accessory_create_button').html('<button type="submit" class="btn btn-success btn-sm pull-right btn-sm">ADD</button>');
  }

	function accessory_data_load(){
		$.ajax({
            url : "{{ url('accessorys/data') }}",
            type : "get",
            dataType : "json"
          }).done(function(response){
          	if(response.data.length == 0){
          		let table=$('#accessory_paginate').DataTable();
				      table.clear().draw();
          	}else{
            $.each(response.data,function(index,accessory){
             	  let no=index+1;
                let id=accessory.id;
                let name=accessory.name;
                let detail=accessory.detail.length > 40 ? accessory.detail.substring(0,40)+'.....' : accessory.detail;
                let td_generate='<a href="" data-id="'+id+'" class="btn btn-sm btn-info edit_accessory">Update</a><button class="btn btn-sm btn-danger accessory_delete" data-id="'+id+'">Delete</button>';
                let table=$('#accessory_paginate').DataTable();
          		table.row.add([no,name,detail,td_generate]).draw();
             });
         	}
          }).fail(function(){
            console.log('failture');
        });
	}

	$(function(){

		accessory_data_load(); // load accessory data

		// store accessory
		$(document).on('submit',"#accessory_store",function(event){
			let table=$('#accessory_paginate').DataTable();
			table.clear();
			event.preventDefault();
			let accessory=new FormData(this);
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				url : "{{url('accessory')}}",
				type : "post",
				data : accessory,
				dataType : "json",
				contentType : false,
				processData : false
			}).done(function(response){
				if(response){
					$('.accessory_name').val('');
          $('.accessory_detail').val('');
					accessory_data_load();
					let message="accessory store successful";
					toastr_success(message);
				}
			}).fail(function(){
				console.log("failture");
			});
		});

    // edit accessory
    $(document).on('click','.edit_accessory',function(event){
      event.preventDefault();
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      let id=$(this).data('id');
      $.ajax({
        url : "{{ url('accessory/edit') }}/"+id,
        type : "get",
        dataType : "json",
      }).done(function(response){
        let name=response.data.name;
        let detail=response.data.detail;
        $('.accessory_name').val(name);
        $('.accessory_detail').val(detail);
        $('.accessory_create form').attr('id','accessory_update');
        $('.accessory_hidden').val(id);
        $('.accessory_create_button').html("<button type='button' class='btn cancle btn-info btn-sm'>CANCLE</button><button type='submit' id='accessory_update' class='btn btn-info btn-sm pull-right'>UPDATE</button>");
      }).fail(function(){
        console.log('failture');
      });
    });

    // update accessory
    $(document).on('submit','#accessory_update',function(event){
      let table=$('#accessory_paginate').DataTable();
      table.clear();
      event.preventDefault();
      let accessory_update=new FormData(this);
      if(confirm("Are you sure")){
        $.ajax({
        url : "{{ url('accessorys/update') }}",
        type : "post",
        data : accessory_update,
        contentType : false,
        processData : false
        }).done(function(response){ 
          if(response){

            accessory_data_load();
            let message="accessory update successful";
            toastr_success(message);
          } 
        }).fail(function(){
          console.log('failture');
        });
      }
    });

    // accessory delete
    $(document).on('click','.accessory_delete',function(event){
      oringinal_form(); // change oringinal form
      var accessory=$('#accessory_paginate').DataTable();
      accessory.clear();
      event.preventDefault();
      let id=$(this).data('id');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      if(confirm("Are you sure?")){
        $.ajax({
          url : "{{url('accessory/delete')}}/"+id,
          type : "post",
          data : {"_method" : "delete"},
        }).done(function(response){
        if(response){
          accessory_data_load();
          let message="accessory delete successful";
          toastr_success(message);
        }
        }).fail(function(){
          console.log("Failture");
        });
        }
    });

    $(document).on('click','.cancle',function(){
      oringinal_form();
    });
	});
</script>

<!-- start suit type -->
<script type="text/javascript">
  // function oringinal_form(){
  //     $('#suit_type_add').attr('class','col-md-2');
  //     $('.suit_type_name').val('');
  //     $('.suit_type_create form').attr('id','suit_type_store');
  //     $('.suit_type_create_button').html('<button type="submit" class="btn btn-success btn-sm pull-right btn-sm">ADD</button>');
  // }

	function suit_type_data_load(){
		$.ajax({
            url : "{{ url('suit_types/data') }}",
            type : "get",
            dataType : "json"
          }).done(function(response){
          	if(response.data.length == 0){
          		let table=$('#suit_type_paginate').DataTable();
				      table.clear().draw();
          	}else{
            $.each(response.data,function(index,suit_type){
                let id=suit_type.id;
                let name=suit_type.name;
                let detail=suit_type.detail;
                $(".suit_type_name_"+id).val(name);
                $(".suit_type_name_"+id).text(name);
                $(".suit_type_detail_"+id).text(detail);
             });
         	}
          }).fail(function(){
            console.log('failture');
        });
	}

	$(function(){

		suit_type_data_load(); // load suit_type data

		// store suit_type
		// $(document).on('submit',"#suit_type_store",function(event){
		// 	let table=$('#suit_type_paginate').DataTable();
		// 	table.clear();
		// 	event.preventDefault();
		// 	let suit_type=new FormData(this);
		// 	$.ajaxSetup({
		// 	    headers: {
		// 	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		// 	    }
		// 	});
		// 	$.ajax({
		// 		url : "{{url('suit_type')}}",
		// 		type : "post",
		// 		data : suit_type,
		// 		dataType : "json",
		// 		contentType : false,
		// 		processData : false
		// 	}).done(function(response){
		// 		if(response){
		// 			$('.suit_type_name').val('');
		// 			suit_type_data_load();
		// 			let message="suit_type store successful";
		// 			toastr_success(message);
		// 		}
		// 	}).fail(function(){
		// 		console.log("failture");
		// 	});
		// });

    //edit suit_type
    $(document).on('click','.edit_suit_type',function(){
     let id=$(this).data('id');
     $('#suit_type_text_'+id).hide();
     $('#suit_type_form_'+id).show();
    });

    // update suit_type
    $(document).on('submit','#suit_type_update',function(event){
      // let table=$('#suit_type_paginate').DataTable();
      // table.clear();
      event.preventDefault();
      let suit_type_update=new FormData(this);
      let id=$(this).data('id');
      if(confirm("Are you sure")){
        $.ajax({
        url : "{{ url('suit_types/update') }}/"+id,
        type : "post",
        data : suit_type_update,
        contentType : false,
        processData : false
        }).done(function(response){ 
          // console.log(response);
          if(response){
            suit_type_data_load();
            let message="Suit type update successful";
            toastr_success(message);
          } 
        }).fail(function(){
          console.log('failture');
        });
      }
    });

    // suit type delete
    // $(document).on('click','.suit_type_delete',function(event){
    //   oringinal_form(); // change oringinal form
    //   var suit_type=$('#suit_type_paginate').DataTable();
    //   suit_type.clear();
    //   event.preventDefault();
    //   let id=$(this).data('id');
    //   $.ajaxSetup({
    //       headers: {
    //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //       }
    //   });

    //   $.ajax({
    //     url : "{{url('suit_use_count')}}/"+id,
    //     type : "get"
    //   }).done(function(response){
    //     if(confirm("Are you sure?This is use "+response+" suit.")){
    //     $.ajax({
    //       url : "{{url('suit_type/delete')}}/"+id,
    //       type : "post",
    //       data : {"_method" : "delete"},
    //     }).done(function(response){
    //     if(response){
    //       suit_type_data_load();
    //       let message="Suit type delete successful";
    //       toastr_success(message);
    //     }
    //     }).fail(function(){
    //       console.log("Failture");
    //     });
    //     }
    //   }).fail(function(){
    //       console.log("Failture");
    //   });
    // });

    $(document).on('click','.cancle',function(){
        let id=$(this).data('id');
        $('#suit_type_text_'+id).show();
        $('#suit_type_form_'+id).hide();
    });
	});
</script>
<!-- end suit type -->
<!-- start waist coat -->
<script type="text/javascript">
	function waist_coat_data_load(){
		$.ajax({
            url : "{{ url('waist_coat/data') }}",
            type : "get",
            dataType : "json"
          }).done(function(response){
          	if(response.length== 0){
          		let table=$('#waist_coat_paginate').DataTable();
				      table.clear().draw();
          	}else{
            $.each(response,function(index,waist_coat){
             	  let no=index+1;
                let id=waist_coat.id;
                let name=waist_coat.name;
                let detail=waist_coat.detail;
                $(".waist_coat_name_"+id).val(name);
                $(".waist_coat_name_"+id).text(name);
                $(".waist_coat_detail_"+id).text(detail);
             });
         	}
          }).fail(function(){
            console.log('failture');
        });
	}

	$(function(){

		waist_coat_data_load(); // load waist_coat data

    // edit waist_coat
    $(document).on('click','.edit_waist_coat',function(){
     let id=$(this).data('id');
     $('#waist_coat_text_'+id).hide();
     $('#waist_coat_form_'+id).show();
    });

    // update waist_coat
    $(document).on('submit','#waist_coat_update',function(event){
      event.preventDefault();
      let waist_coat_update=new FormData(this);
      let id=$(this).data('id');
      if(confirm("Are you sure")){
        $.ajax({
        url : "{{ url('waist_coat/update') }}/"+id,
        type : "post",
        data : waist_coat_update,
        contentType : false,
        processData : false
        }).done(function(response){ 
          // console.log(response);
          if(response){
            waist_coat_data_load();
            let message="Waist coat update successful";
            toastr_success(message);
          } 
        }).fail(function(){
          console.log('failture');
        });
      }
    });

    // cancle waist coat
    $(document).on('click','.cancle',function(){
        let id=$(this).data('id');
        $('#waist_coat_text_'+id).show();
        $('#waist_coat_form_'+id).hide();
    });
	});
</script>
<!-- end waist coat -->
@endsection