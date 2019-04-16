@extends('layouts.site_admin_app')
@section('title','Site admin')
@section('content')
  <!-- start site_information form -->
  <div class="top" style="margin-top: 100px" id="site_information_create">
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-8 offset-md-2">
                        <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title">Change site information</h4>
                            <p class="card-category">Complete Data</p>
                          </div>
                          <div class="card-body site_information_create">
                            <form enctype="multipart/form-data" id="site_information_store">
                              {{csrf_field()}}
                              <input type="hidden" name="id" class="site_information_hidden">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Name</label>
                                    <input type="text" class="form-control site_information_name" name="name" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Email</label>
                                    <input type="email" name="email" class="form-control site_information_email" required>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Phone One</label><br>
                                    <input type="number" name="phone1[]" class="form-control site_information_phone1_0" required>
                                    <input type="number" name="phone1[]" class="form-control site_information_phone1_1" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Phone Two</label><br>
                                    <input type="number" name="phone2[]" class="form-control site_information_phone2_0" required>
                                    <input type="number" name="phone2[]" class="form-control site_information_phone2_1" required>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                               <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Address One</label>
                                    <input type="text" name="address1" class="form-control site_information_address1_0" required>
                                  </div>
                                </div>
                                 <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Address Two</label>
                                    <input type="text" name="address2" class="form-control site_information_address2_0" required>
                                  </div>
                                </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Facebook Url</label>
                                      <input type="text" name="facebook_url" required class="form-control site_information_facebook_url">
                                    </div>
                                  </div>
                                  {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                      {{--<label class="bmd-label-floating">Youtube Url</label>--}}
                                      {{--<input type="text" name="youtube_url" class="form-control site_information_youtube_url" required>--}}
                                    {{--</div>--}}
                                  {{--</div>--}}
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">About us</label>
                                      <textarea name="about_us" class="form-control site_information_about_us" rows="10" required></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="site_information_create_button">
                                  <button type="submit" class="btn btn-success pull-right">Profile Update</button>
                                </div>
                              <div class="clearfix"></div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
@endsection
@section('script')
<script type="text/javascript">
  
  function site_information_load(){
        $.ajax({
            url : "{{ url('site_information/data') }}",
            type : "get",
            dataType : "json"
          }).done(function(response){
//              console.log('aAA='+response);
            let name=response.name;
            let email=response.email;
            let phone1=JSON.parse(response.phone1);
            let phone2=JSON.parse(response.phone2);
            let address1=response.address1;
            let address2=response.address2;
            let facebook_url=response.facebook_url;
            let youtube_url=response.youtube_url;
            let about_us=response.about_us;
            $(".site_information_name").val(name);
            $(".site_information_email").val(email);
            $(".site_information_phone1_0").val(phone1[0]);
            $(".site_information_phone1_1").val(phone1[1]);
            $(".site_information_phone2_0").val(phone2[0]);
            $(".site_information_phone2_1").val(phone2[1]);
            $(".site_information_address1_0").val(address1);
            $(".site_information_address2_0").val(address2);
            $(".site_information_facebook_url").val(facebook_url);
            $(".site_information_youtube_url").val(youtube_url);
            $(".site_information_about_us").val(about_us);
          }).fail(function(){
            console.log('failture');
        });
  }

	$(function(){

    site_information_load(); // load site_information data

		// store site_information
		$(document).on('submit',"#site_information_store",function(event){
			event.preventDefault();
			let site_information=new FormData(this);
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			$.ajax({
				url : "{{url('site_information')}}",
				type : "post",
				data : site_information,
				contentType : false,
				processData : false
			}).done(function(response){
				if(response){
          site_information_load();
					let message="site_information update successful";
					toastr_success(message);
				}
			}).fail(function(){
				console.log("failture");
			});
		});
	});
</script>
@endsection