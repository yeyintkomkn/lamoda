@extends('layouts.site_admin_app')
@section('title','Site admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header_header card-header-primary">
                    <h4 class="card-title">Order List</h4>
                    <!-- <p class="card-category">New employees on 15th September, 2016</p> -->
                </div>
                <div class="card-body">
                    <table class="table table-responsive" id="datatable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th width="100px">Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>ProductType</th>
                            <th width="400px">Detail</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header_header card-header-primary">
                    <h4 class="card-title">Contact List</h4>
                    <!-- <p class="card-category">New employees on 15th September, 2016</p> -->
                </div>
                <div class="card-body">
                    <table class="table table-responsive" id="contact_table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th width="100px">Name</th>
                            <th>Email</th>
                            <th>Title</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('script')
	<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //        function ajax_set_admin_data()

        $(document).ready(function() {

            load_order_data();
            load_contact_data();
            var t=$("#datatable").DataTable({
                "ordering": false,
                // "paging": false,
                "bInfo" : false,
                // "bPaginate": false,
                "bLengthChange": false,
                // "bFilter": true,
                // "bAutoWidth": false
            });
            var contact_t=$("#contact_table").DataTable({
                "ordering": false,
                // "paging": false,
                "bInfo" : false,
                // "bPaginate": false,
                "bLengthChange": false,
                // "bFilter": true,
                // "bAutoWidth": false
            });
            var data_list;
            function load_order_data() {
                $.ajax({
                    type: 'post',
                    url: "{{url('api/all_order')}}",
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function(data_return) {
                        data_list=JSON.parse(data_return);
                        console.log(data_list);
                        set_data(data_list);

                    }
                });
            }
            function load_contact_data() {
                $.ajax({
                    type: 'post',
                    url: "{{url('api/all_contact')}}",
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function(data_return) {
                        data_list=JSON.parse(data_return);
                        console.log("contact="+data_list);
                        contact_t.clear();
                        var no=1;
                        for (var i=0;i<data_list.length;i++){
                            contact_t.row.add( [
                                (no++),
                                data_list[i].name,
                                data_list[i].email,
                                data_list[i].title,
                                data_list[i].message,
                                '<button class="btn btn-sm btn-danger" onclick="delete_contact('+data_list[i].id+')">Delete</button>'
                            ] ).draw( false );
                        }

                    }
                });
            }

        set_data=function (data_list) {
                t.clear();
                var no=1;
                for (var i=0;i<data_list.length;i++){
                    t.row.add( [
                        (no++),
                        data_list[i].name,
                        '<a href="tel:'+data_list[i].phone+'">'+data_list[i].phone+'</a>',
                        '<a href="mailto:'+data_list[i].email+'">'+data_list[i].email+'</a>',
                        data_list[i].address,
                        JSON.parse(data_list[i].product_type).toString(),
                        data_list[i].order_detail,

                        '<button class="btn btn-sm btn-danger" onclick="delete_list('+data_list[i].id+')">Delete</button>'
                    ] ).draw( false );
                }
            },
		delete_list=function(id) {
                var result=window.confirm("Are You Sure To Delete!");
                if(result){
                    $.ajax({
                        type: 'post',
                        url:'delete_order/'+id,
//                         data:"id="+id,
                        cache:false,
                        contentType: false,
                        processData: false,
                        success: function(data_return) {

                            load_order_data();
                        },
                    });
                }
                }
        delete_contact=function(id) {
                var result=window.confirm("Are You Sure To Delete!");
                if(result){
                    $.ajax({
                        type: 'post',
                        url:'delete_contact/'+id,
//                         data:"id="+id,
                        cache:false,
                        contentType: false,
                        processData: false,
                        success: function(data_return) {

                            load_contact_data();
                        },
                    });
                }
                }

		});


	</script>
@endsection