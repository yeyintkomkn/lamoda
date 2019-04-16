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
                            <h4 class="card-title">Accessory Type Data</h4>
                            <!-- <p class="card-category">New employees on 15th September, 2016</p> -->
                          </div>
                          <div class="card-body table-responsive">
                            <table class="table table-hover" id="accessory_paginate">
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
                let table=$('#accessory_paginate').DataTable();
              table.row.add([no,name,detail]).draw();
             });
          }
          }).fail(function(){
            console.log('failture');
        });
  }
</script>
<script type="text/javascript">
	$(function(){
		accessory_data_load();
	});
</script>
@endsection
