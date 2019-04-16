@extends('layouts.site_admin_app')
@section('title','Site admin')
@section('content')
            <div class="top" style="margin-top: 50px" id="product_top">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-4">
                        <!-- start product form -->
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title">Add New Products</h4>
                            {{--<p class="card-category">Complete Data</p>--}}
                          </div>
                          <div class="card-body product_create">
                            <form enctype="multipart/form-data" id="product_store">
                              {{csrf_field()}}
                              <input type="hidden" name="id" class="product_hidden">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="photo"> <img src="{{asset('img/default.jpg')}}"  class="img-thumbnail" id="image_id" style="width: 100%;height: 250px;"></label>
                                    <label class="btn btn-sm btn-primary container-fluid" for="photo">Upload</label>
                                    <input type="file" id="photo" name="photo" required class="form-control product_photo" onchange="displaySelectedPhoto('photo','image_id')">
                                  </div>
                                </div>
                              </div>
                              <strong class="error_prod_photo" style="color:red">

                              </strong>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Choose product type</label>
                                    <select class="form-control product_type_option pl-3" name="suit_type" id="type">
                                        {{--<optgroup label="Suits">--}}
                                            {{--@foreach($product_type['suit_type'] as $data)--}}
                                                {{--<option value="{{$data['id']}}">{{$data['name']}}</option>--}}
                                            {{--@endforeach--}}
                                        {{--</optgroup>--}}



                                        {{--<optgroup label="Accessories">--}}
                                            {{--@foreach($product_type['accessories_type'] as $data)--}}
                                                {{--@if($data['level']==0)--}}
                                                    {{--<option value="{{$data['id']}}">{{$data['name']}}</option>--}}
                                                {{--@endif--}}
                                            {{--@endforeach--}}
                                        {{--</optgroup>--}}

                                        {{--<optgroup label="Waistcoats">--}}
                                            {{--@foreach($product_type['waistcoat_type'] as $data)--}}
                                                {{--<option value="{{$data['id']}}">{{$data['name']}}</option>--}}
                                            {{--@endforeach--}}
                                        {{--</optgroup>--}}
                                        {{--<optgroup label="Other">--}}
                                            {{--@foreach($product_type['accessories_type'] as $data)--}}
                                                {{--@if($data['level']==1)--}}
                                                    {{--<option value="{{$data['id']}}">{{$data['name']}}</option>--}}
                                                {{--@endif--}}
                                            {{--@endforeach--}}
                                        {{--</optgroup>--}}
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Price</label>
                                    <input type="text" autocomplete="off" name="price" class="form-control product_price" required>
                                  </div>
                                </div>
                              </div>
                                <div class="product_create_button">
                                  <button type="submit" class="btn btn-success btn-sm pull-right">Add</button>
                                </div>
                              <div class="clearfix"></div>
                            </form>
                          </div>
                        </div>
                        <!-- end product form -->
                      </div>
                      <div class="col-md-8">
                        <!-- start product pagination -->
                        <div class="card">
                          <div class="card-header_header card-header-primary">
                            <h4 class="card-title">Product Data</h4>
                            <!-- <p class="card-category">New employees on 15th September, 2016</p> -->
                          </div>
                          <div class="card-body table-responsive">
                            <table class="table table-hover" id="product_paginate">
                              <thead class="text-warning">
                                <th>No</th>
                                <th>Photo</th>
                                <th style="width: 30%">Product Type</th>
                                {{--<th>Product type</th>--}}
                                <th>Price</th>
                                <th>Action</th>
                              </thead>
                                {{--<tbody>--}}
                                {{--<tr>--}}
                                    {{--<h2>Loading....</h2>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            </table>
                          </div>
                        </div>
                        <!-- end product pagination -->
                      </div>
                    </div>
                  </div>
            </div>
@endsection
@section('script')
<script type="text/javascript">
	function all_data_load(){
		$.ajax({
            url : "{{ url('all_type/data') }}",
            type : "get",
            dataType : "json"
          }).done(function(response){
            $.each(response.suit_type,function(index,suit_type){
              let id=suit_type.id;
              let selected=suit_type.id=='1' ? "selected" : "";
              let name=suit_type.name;
              $('.product_type_option').append('<option data-type="suit" class="suit_'+id+'" '+selected+' value="'+id+'">'+name+'</option>');
            });
            $.each(response.acc_type,function(index,acc_type){
              let id=acc_type.id;
              let name=acc_type.name;
              $('.product_type_option').append('<option data-type="accessory" class="accessory_'+id+'" value="'+id+'">'+name+'</option>');
            });
            $.each(response.waist_coat,function(index,waist_coat){
              let id=waist_coat.id;
              let name=waist_coat.name;
              $('.product_type_option').append('<option data-type="waist_coat" class="waist_coat_'+id+'" value="'+id+'">'+name+'</option>');
            });
          }).fail(function(){
            console.log('failture');
        });
	}

  function product_data_load(){
      let table=$('#product_paginate').DataTable();
    $.ajax({
            url : "{{ url('product/data') }}",
            type : "get",
            dataType : "json"
          }).done(function(response){
          if(response.length == 0){
              let table=$('#product_paginate').DataTable();
              table.clear().draw();
            }else{
              console.log(response.length);
             $.each(response,function(index,product){
                let no=index+1;
                let id=product.id;
                let photo=product.photo_url;
                let image='<img src="'+photo+'" style="width:70px;height:70px" class="img-thumbnail">';
                let price=product.price;
//                let product_type=product.product_type;
                let product_type=product.type.name;
                let td_generate='<a href="#product_top" data-id="'+id+'" class="btn btn-sm btn-info edit_product">Update</a><button class="btn btn-sm btn-danger product_delete" data-id="'+id+'">Delete</button>';
//                let table=$('#product_paginate').DataTable();
                table.row.add([no,image,product_type,price,td_generate]).draw();
             });
          }
          }).fail(function(){
            console.log('failture');
        });
  }


	$(function(){

		all_data_load(); // load product_type data
    product_data_load(); // load product data

		// store product
		$(document).on('submit',"#product_store",function(event){
            $('.error_prod_photo').empty();
            let type=$("#type option:selected").data('type');
			let table=$('#product_paginate').DataTable();
			table.clear();
			event.preventDefault();
			let product=new FormData(this);
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				url : "{{url('product')}}/"+type,
				type : "post",
				data : product,
				dataType : "json",
				contentType : false,
				processData : false
			}).done(function(response){
        console.log(response);
				if(response){
				  $(".product_price").val('60000');
          $("#image_id").attr("src","{{asset('img/default.jpg')}}");
          product_data_load();
					let message="product store successful";
					toastr_success(message);
				}
			}).fail(function(error){
                if(error.responseText){
                    $(".error_prod_photo").text(JSON.parse(error.responseText).errors.photo[0]);
                }
			});
		});

    // edit product
    $(document).on('click','.edit_product',function(){
      $('.product_type_option option:selected').attr('selected',false);
      $('.product_photo').attr('required',false);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      let id=$(this).data('id');
      $.ajax({
        url : "{{ url('product_data/edit') }}/"+id,
        type : "get",
        dataType : "json",
      }).done(function(response){
        console.log(response);
        response.product_type=='suit' ? $('.suit_'+response.data_id).attr("selected",true) : '';
        response.product_type=='accessory' ? $('.accessory_'+response.data_id).attr("selected",true) : '';
        response.product_type=='waist_coat' ?$('.waist_coat_'+response.data_id).attr("selected",true) : '';
        let photo=response.photo_url;
        let product_type_id=response.data_id;
        let price=response.price;
        $('.product_price').val(price);
        $('.product_create form').attr('id','product_update');
        $('.product_hidden').val(id);
        $('#image_id').attr('src',photo);
        $('.product_create_button').html('<button class="btn btn-info btn-sm cancle">CANCLE</button> <button type="submit" id="product_update" class="btn btn-info btn-sm pull-right">UPDATE</button>');
      }).fail(function(error){
        console.log(error);
        console.log('failture');
      });
    });

    // update product
    $(document).on('submit','#product_update',function(event){
      let type=$("#type option:selected").data('type');
      let table=$('#product_paginate').DataTable();
      table.clear();
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      event.preventDefault();
      let product_update=new FormData(this);
      if(confirm("Are you sure")){
        $.ajax({
        url : "{{ url('product/update') }}/"+type,
        type : "post",
        data : product_update,
        contentType : false,
        processData : false
        }).done(function(response){ 
          if(response){
            // window.location.href='#move_to';
            product_data_load();
            let message="product update successful";
            toastr_success(message);
          } 
        }).fail(function(){
          console.log('failture');
        });
      }
    });

    // product delete
    $(document).on('click','.product_delete',function(event){
      var product=$('#product_paginate').DataTable();
      product.clear();
      event.preventDefault();
      let id=$(this).data('id');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      if(confirm("Are you sure?")){
      $.ajax({
        url : "{{url('product/delete')}}/"+id,
        type : "post",
        data : {"_method" : "delete"},
      }).done(function(response){
        if(response){
          product_data_load();
          let message="product delete successful";
          toastr_success(message);
        }
      }).fail(function(){
        console.log("Failture");
      });
      }
    });

    /*cancle */
    $(document).on('click','.cancle',function(){
      $('.product_type_option').empty();
      $('.product_type_option').append('<option disabled selected></option>');
      all_data_load();
      $('.product_photo').attr('required',true);
      $('#product_update')[0].reset()
      $("#image_id").attr("src","{{asset('img/default.jpg')}}");
      $('.product_create form').attr('id','product_store');
      $('.product_create_button').html('<button type="submit" class="btn btn-success btn-sm pull-right">Add</button>');
    });
	});
</script>
@endsection