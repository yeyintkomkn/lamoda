@extends('layouts.site_admin_app')
@section('title','Site admin')

  @section('style')
    <link rel="stylesheet" href="{{url('plugin/fxss-rate/rate.css')}}">
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--}}

    <script src="{{url('plugin/fxss-rate/rate.js')}}"></script>
    @endsection

@section('content')
            <div class="top" style="margin-top: 50px" id="feedback_top">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-4">
                        <!-- start feedback form -->
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title">Create Feedback</h4>
                          </div>
                          <div class="card-body feedback_create">
                            <form enctype="multipart/form-data" id="feedback_store">
                              {{csrf_field()}}
                              <input type="hidden" name="id" class="feedback_hidden">
                              <input type="hidden" name="type" value="admin">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <img src="{{asset('img/default.jpg')}}" class="img-thumbnail" id="image_id" style="width: 100%;height: 250px;">
                                    <label class="btn btn-sm btn-primary container-fluid" for="photo">Upload</label>
                                    <input type="file" id="photo" name="photo" required class="form-control feedback_photo" onchange="displaySelectedPhoto('photo','image_id')">
                                  </div>
                                </div>
                              </div>
                              <strong class="error_fed_photo" style="color:red">

                              </strong>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Name</label>
                                    <input type="text" name="name" class="form-control feedback_name" required>
                                  </div>
                                </div>
                              </div>
                              {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                  {{--<div class="form-group">--}}
                                    {{--<label class="bmd-label-floating">Position</label>--}}
                                    {{--<input type="text" name="position" class="form-control feedback_position" required>--}}
                                  {{--</div>--}}
                                {{--</div>--}}
                              {{--</div>--}}
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Date</label>
                                    <input type="text" autocomplete="off" name="date" class="form-control feedback_date" id="feedback_date" required>
                                  </div>
                                </div>
                              </div>
                              <div class="row" id="rating_row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <div id="rateBox"></div>
                                    <input type="hidden" name="rating" id="rating" value="4">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Description</label>
                                    <textarea class="form-control feedback_description" name="description" rows="10"></textarea>
                                  </div>
                                </div>
                              </div>
                                <div class="feedback_create_button">
                                  <button type="submit" class="btn btn-success btn-sm pull-right">SAVE</button>
                                </div>
                              <div class="clearfix"></div>
                            </form>
                          </div>
                        </div>
                        <!-- end feedback form -->
                      </div>
                      <div class="col-md-8">
                        <!-- start feedback pagination -->
                        <div class="card">
                          <div class="card-header_header card-header-primary">
                            <h4 class="card-title">Feedback Data</h4>
                            <!-- <p class="card-category">New employees on 15th September, 2016</p> -->
                          </div>
                          <div class="card-body table-responsive">
                            <table class="table table-hover" id="feedback_paginate">
                              <thead class="text-warning">
                                <th>No</th>
                                <th width="150">Photo</th>
                                <th width="200">Name</th>
                                {{--<th>Position</th>--}}
                                <th width="30">Rating</th>
                                <th>Date</th>
                                <th width="250">Description</th>
                                <th>Action</th>
                              </thead>
                            </table>
                          </div>
                        </div>
                        <!-- end feedback pagination -->
                      </div>
                    </div>
                  </div>
            </div>
@endsection
@section('script')
<link rel="stylesheet" href="{{asset('css/jquery/ui/1.12.1/themes/base/jquery-ui.css')}}">
<script src="{{asset('js/jquery/ui/1.12.1/jquery-ui.js')}}"></script>
<script type="text/javascript">

    $("#rateBox").rate({
        length: 5,
        value: 4,
        readonly: false,
        size: '30px',
        selectClass: 'fxss_rate_select',
        incompleteClass: 'fxss_rate_no_all_select',
        customClass: 'custom_class',
        callback: function(object){
            console.log(object);
            star=object.index;
            $('#rating').val((star+1));
        }
    });

  function feedback_data_load(){
    $.ajax({
            url : "{{ url('feedback/data') }}",
            type : "get",
            dataType : "json"
          }).done(function(response){
          if(response.data.length == 0){
              let table=$('#feedback_paginate').DataTable();
              table.clear().draw();
            }else{
             $.each(response.data,function(index,feedback){
                let no=index+1;
                let id=feedback.id;
                let photo=feedback.photo_url;
                let image='<img src="'+photo+'" style="width:70px;height:70px" class="img-thumbnail">';
//                let position=feedback.position;
                let rating=feedback.rating;
                let description="<p data-toggle='tooltip' data-placement='top' title='"+feedback.description+"'>"+feedback.description.substring(0,30)+"</p>";
//                let description="<p title='aaa'>"+"hello"+"</p>";
                let date=feedback.date;
                let feedback_name=feedback.name;
                let td_generate='<button class="btn btn-sm btn-danger feedback_delete" data-id="'+id+'">Delete</button><a href="#feedback_top" data-id="'+id+'" class="btn btn-sm btn-info edit_feedback">Update</a>';
//                 <a href="#feedback_top" data-id="'+id+'" class="btn btn-sm btn-info edit_feedback">Update</a>
                let table=$('#feedback_paginate').DataTable();
                table.row.add([no,image,feedback_name,rating,date,description,td_generate]).draw();

             });
          }
          }).fail(function(){
            console.log('failture');
        });


  }


	$(function(){

        $( "#feedback_date" ).datepicker({ //datepicker
          changeMonth: true,
          changeYear: true
        });

    feedback_data_load(); // load feedback data

		// store feedback
		$(document).on('submit',"#feedback_store",function(event){
		    $('.error_fed_photo').empty();
			let table=$('#feedback_paginate').DataTable();
			table.clear();
			event.preventDefault();
			let feedback=new FormData(this);
//			console.log(feedback);
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				url : "{{url('feedback')}}",
				type : "post",
				data : feedback,
				dataType : "json",
				contentType : false,
				processData : false
			}).done(function(response){
			    console.log(response);
				if(response){
					$('#feedback_store')[0].reset();
                    $("#image_id").attr("src","{{asset('img/default.jpg')}}");
                    feedback_data_load();
					let message="feedback store successful";
					toastr_success(message);
				}
			}).fail(function(error){
                if(error.responseText){
                    $(".error_fed_photo").text(JSON.parse(error.responseText).errors.photo[0]);
                }
			});
		});

    // edit feedback
    $(document).on('click','.edit_feedback',function(){
      $(".feedback_photo").attr('required',false);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      let id=$(this).data('id');
      $.ajax({
        url : "{{ url('feedback/edit') }}/"+id,
        type : "get",
        dataType : "json",
      }).done(function(response){
        document.getElementById("rating_row").style.display = 'none';
        let photo=response.photo_url;
//        let position=response.position;
        let description=response.description;
        let name=response.name;
        let date=response.date;
//        $('.feedback_position').val(position);
        $('.feedback_description').val(description);
        $('.feedback_date').val(date);
        $('.feedback_name').val(name);
        $('.feedback_create form').attr('id','feedback_update');
        $('.feedback_hidden').val(id);
        $('#image_id').attr('src',photo);
        $('.feedback_create_button').html('<button class="btn btn-info btn-sm cancle">CANCLE</button> <button type="submit" id="feedback_update" class="btn btn-info btn-sm pull-right">UPDATE</button>');
      }).fail(function(){
        console.log('failture');
      });
    });

    // update feedback
    $(document).on('submit','#feedback_update',function(event){
      let table=$('#feedback_paginate').DataTable();
      table.clear();
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      event.preventDefault();
      let feedback_update=new FormData(this);
      if(confirm("Are you sure")){
        $.ajax({
        url : "{{ url('feedback/update') }}",
        type : "post",
        data : feedback_update,
        contentType : false,
        processData : false
        }).done(function(response){ 
          if(response){
            feedback_data_load();
            let message="feedback update successful";
            toastr_success(message);
          } 
        }).fail(function(){
          console.log('failture');
        });
      }
    });

    // feedback delete
    $(document).on('click','.feedback_delete',function(event){
      var feedback=$('#feedback_paginate').DataTable();
      feedback.clear();
      event.preventDefault();
      let id=$(this).data('id');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      if(confirm("Are you sure?")){
      $.ajax({
        url : "{{url('feedback/delete')}}/"+id,
        type : "post",
        data : {"_method" : "delete"},
      }).done(function(response){
        if(response){
          feedback_data_load();
          let message="feedback delete successful";
          toastr_success(message);
        }
      }).fail(function(){
        console.log("Failture");
      });
      }
    });

    /*cancle */
    $(document).on('click','.cancle',function(){
      $('.feedback_photo').attr('required',true);
      $('#feedback_update')[0].reset()
      $("#image_id").attr("src","{{asset('img/default.jpg')}}");
      $('.feedback_create form').attr('id','feedback_store');
      $('.feedback_create_button').html('<button type="submit" class="btn btn-success btn-sm pull-right">STORE feedback</button>');
      document.getElementById("rating_row").style.display="block";
    });
	});
</script>
@endsection