<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/admin/home">Promote Product</a>
                
               
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/admin/home"> <i class="menu-icon fa fa-dashboard"></i>Home</a>
                    </li>


                    @if(Session::has('user'))

                    <li class="menu-item-has-children dropdown">
                     <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>{{Session::get('user')['name']}}</a>
                       <ul class="sub-menu children dropdown-menu">
                        <li><a href="/admin/logout"><i class="fa fa-unlock"></i>Logout</a></li>
                       </ul>
                    </li>

                    @else
                     <li>     
                     <a href="/admin/login"><i class="menu-icon fa fa-key"></i>Login</a>
                     </li> 
                    @endif

                    <h3 class="menu-title">Add</h3><!-- /.menu-title -->
                    <li ><a href="/admin/add_product" > <i class="menu-icon fa fa-plus-square"></i>Add influencers</a></li>
                    
                    <h3 class="menu-title">View</h3><!-- /.menu-title -->
                    <li ><a href="/admin/view_product"> <i class="menu-icon fa fa-shopping-cart"></i>View all influencers</a></li>
                    <li ><a href=" /admin/view_order"> <i class="menu-icon fa fa-eye"></i>Who want quotation</a></li>
                    <li ><a href=" /admin/register"> <i class="menu-icon fa fa-eye"></i>Registered users</a></li>                    
                </ul>   
                <h4>©2021 pawan lulla</h4>©2021 pawan lulla
            </div><!-- /.navbar-collapse -->
        </nav>
</aside>
