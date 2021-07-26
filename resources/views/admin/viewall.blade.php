
    @extends('admin/master_admin')
    @section('content_header')
  
 
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h3>Influencer</h3>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">View All Influencer</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                      
                                    <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Links</th>
                                            <th>Contact</th>
                                            <th>Product Image</th>
                                        </tr>

                                        
                                    </thead>
                                    <tbody>
                                    @foreach($todos as $todo)
                                       <tr>
                                         <td>{{$todo->id}}</td>
                                         <td>{{$todo->influencer_name}}</td>
                                         
                                         <td>
                                            <li class="fa fa-instagram"><a href="{{$todo->instagram_link}}" class="active">   {{$todo->instagram_link}} </a></li><br>
                                            <li class="fa fa-facebook"><a href="{{$todo->facebook_link}}" class="active">   {{$todo->facebook_link}} </a></li><br>
                                            <li class="fa fa-youtube"><a href="{{$todo->youtube_link}}" class="active">   {{$todo->youtube_link}}  </a></li>
                                         </td>
                                         <td>
                                            <li class="fa fa-reply-all">  {{$todo->influencer_email }} </li><br>
                                            <li class="fa fa-phone">  {{$todo->influencer_mobile }} </li>      
                                         </td>
        
                                         <td>
                                         <img src="{{asset('influencerimagesbyadmin/' .$todo->influencer_picture)}}"  alt="" width="100" height="100">
                                         <a href="/delete/{{$todo->id}}"  class="btn btn-primary" role="button">Delete</a>
                                         <a href="/edit/{{$todo->id}}"  class="btn btn-primary" role="button">Edit</a>
                                         </td>
                                       </tr>   
                                    @endforeach
  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



    @endsection
@section('content_footer')
@endsection	
    
