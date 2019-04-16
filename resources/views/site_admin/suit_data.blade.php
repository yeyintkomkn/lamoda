@extends('layouts.site_admin_app')
@section('title','Site admin')
@section('content')
<div class="row mt-5">
	<div class="col-md-8 offset-md-2">
		<!-- start suit pagination -->
                    <div class="row mt-3" id="move_to">
                      <div class="col-md-10 offset-md-1">
                        <div class="card">
                          <div class="card-header_header card-header-primary">
                            <h4 class="card-title">Suit Type Data</h4>
                            <!-- <p class="card-category">New employees on 15th September, 2016</p> -->
                          </div>
                          <div class="card-body table-responsive">
                            <table class="table table-hover" id="suit_paginate">
                              <thead class="text-warning">
                                <th style="width: 10%">No</th>
                                <th>Name</th>
                                <th>Detail</th>
                              </thead>
                            </table>
                          </div>
                        </div>
                    </div>
                  </div>  
<!-- end suit pagination -->
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
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
                let no=index+1;
                let suit_type_name=suit_type.name;
                let detail= suit_type.detail.length > 40 ?  suit_type.detail.substring(0,40)+'.....' :  suit.detail;
                let table=$('#suit_paginate').DataTable();
                table.row.add([no,suit_type_name,detail]).draw();
             });
         	}
          }).fail(function(){
            console.log('failture');
        });
	}
</script>
<script type="text/javascript">
	$(function(){
		suit_type_data_load();
	});
</script>
@endsection
