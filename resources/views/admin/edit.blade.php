
    @extends('admin/master_admin')
    @section('content_header')	  


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h4>Update influencers information</h4>
                    </div>
                </div>
            </div>  
        </div>

        

<div class="content mt-3">
<div class="animated fadeIn">
<!--form-->
<div class="col-lg-6">
 <div class="card">
 <div class="card-header">
  <strong>Update</strong>

 </div>
 
 <div class="card-body card-block">       
   <form action="{{'/update/'.$todo->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

      <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Influencer Name</label>
       <input type="text" name="influencer_name" value="{{$todo->influencer_name}}" class="form-control" >
      </div>

      <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Influencer Location	</label>
       <input type="text" name="influencer_location" value="{{$todo->influencer_location}}" class="form-control">
      </div>
 
      <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Instagram Link</label>
       <input type="text" name="instagram_link" value="{{$todo->instagram_link}}" class="form-control">
      </div>

      <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Facebook Link	</label>
       <input type="text" name="facebook_link" value="{{$todo->facebook_link}}" class="form-control">
      </div>

      <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Youtube Link</label>
       <input type="text" name="youtube_link" value="{{$todo->youtube_link}}" class="form-control">
      </div>

      <div class="mb-3">
       <label for="formFile" class="form-label"> Update Image</labe >
       <input  name="img_src" type="file" id="formFile" placeholder="image"><img src="{{asset('influencerimagesbyadmin/' .$todo->influencer_picture)}}" width="100px">

    </div>


      <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Influencer Email</label>
       <input type="text" name="influencer_email" value="{{$todo->influencer_email}}" class="form-control">
      </div>

      <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Influencer Mobile</label>
       <input type="text" name="influencer_mobile" value="{{$todo->influencer_mobile}}" class="form-control">
      </div>

    
   <button type="submit" class="btn btn-primary">Update</button>
  </form>
 </div>


 
</div>

</div>
</div><!-- .animated -->
</div><!-- .content -->
@endsection
@section('content_footer')
@endsection	

    
