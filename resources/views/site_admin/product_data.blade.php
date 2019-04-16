@extends('layouts.site_admin_app')
@section('title','Site admin')
@section('content')
	<div class="row mt-5">
		<div class="col-md-8 offset-md-2">
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
                    <th style="width: 30%">Name</th>
                    <th>Product type</th>
                    <th>Price</th>
                  </thead>
                  
                </table>
              </div>
            </div>
            <!-- end product pagination -->
		</div>
	</div>
@endsection
@section('script')
<script type="text/javascript">
function product_data_load(){
    $.ajax({
            url : "{{ url('product/data') }}",
            type : "get",
            dataType : "json"
          }).done(function(response){
          if(response.length == 0){
              let table=$('#product_paginate').DataTable();
              table.clear().draw();
            }else{
             $.each(response,function(index,product){
                let no=index+1;
                let id=product.id;
                let photo=product.photo_url;
                let image='<img src="'+photo+'" style="width:70px;height:70px" class="img-thumbnail">';
                let price=product.price;
                let product_type=product.product_type;
                let name=product.type.name;
                let table=$('#product_paginate').DataTable();
                table.row.add([no,image,name,product_type,price]).draw();
             });
          }
          }).fail(function(){
            console.log('failture');
        });
  }
  $(function(){
  	product_data_load();
  });

</script>
@endsection