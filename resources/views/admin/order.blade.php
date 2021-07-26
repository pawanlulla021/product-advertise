@extends('admin/master_admin')
    @section('content_header')  

    <!-- Header-->
    <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h3>Users Who Want Quotation</h3>
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
                                <strong class="card-title">Users Who Want Quotation</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                      
                                       <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Products information</th>
                                            <th>Contact</th>
                                            <th>Send</th> 
                                            
                                        </tr>

                                        
                                    </thead>
                                    <tbody>
                                    @foreach($todos as $todo)
                                       <tr>
                                         <td>  {{$todo->id}}</td>
                                         <td>{{$todo->user->name}}</td>
                                         <td>
                                           <strong>Product Name : -</strong> {{$todo->type}}<br>
                                           <strong>Product Type : -</strong> {{$todo->product_address}} 
                                         </td>
                                         <td>
                                            <li class="fa fa-reply-all">  {{$todo->quotation_email}} </li><br>
                                            <li class="fa fa-phone">      {{$todo->quotation_mobile}} </li>      
                                         </td>
        
                                         <td>
                                         <input type="file" >
                                         <a href="/checkout"  class="btn btn-primary" role="button">Send Quotation</a>
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



    <!-- Right Panel -->
    @endsection
@section('content_footer')
@endsection	
    





