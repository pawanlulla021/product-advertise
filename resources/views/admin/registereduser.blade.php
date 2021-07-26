
    @extends('admin/master_admin')
    @section('content_header')
  
 
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h3>Registered Users</h3>
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
                                <strong class="card-title">Registered Users</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                      
                                    <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created at</th>
                                        </tr>

                                        
                                    </thead>
                                    <tbody>
                                    @foreach($todos as $todo)
                                       <tr>
                                         <td>{{$todo->id}}</td>
                                         <td>{{$todo->name}}</td>
                                         <td>
                                            <li class="fa fa-reply-all">  {{$todo->email }} </li><br>
                                         </td>
                                         <td>
                                            <li class="fa fa-time">  {{$todo->created_at }} </li><br>
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
    
