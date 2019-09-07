<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>BD</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Bhatti</b>Danda</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="asset{{url('public\cd-admin\images\avatar1.png')}}" class="user-image" alt="User">
                        <span class="hidden-xs">Bhatti Danda</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{url('public\cd-admin\images\avatar1.png')}}" class="img-circle" alt="User">

                            <p>
                            
                                User Name
                                <small>Role</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{-- <div class="pull-left">
                                <a href="#" class="btn btn-info btn-flat">Profile</a>
                            </div> --}}
                            <div class="pull-right">
                                <a href="{{url('adminlogout')}}" class="btn btn-danger btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('public/images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Creatu Developers</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> -->
        <!-- search form -->
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{url('/')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="header">services</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-reorder"></i> <span>Services</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('service.create')}}"><i class="fa fa-circle-o"></i>Add new services</a></li>
                </ul>
                 <ul class="treeview-menu">                    
                    <li><a href="{{route('service.view')}}"><i class="fa fa-circle-o"></i>View All Servivces</a></li>
                </ul>
            </li>

            <li class="header">Package</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-reorder"></i> <span>Package</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('add.package')}}"><i class="fa fa-circle-o"></i>Add new package</a></li>
                </ul>
                 <ul class="treeview-menu">
                    <li><a href="{{route('view.package')}}"><i class="fa fa-circle-o"></i>View All Package</a></li>
                </ul>
            </li>
                
            <li class="header">About</li>
            
            <li class="treeview">
                <a href="{{route('about.show')}}">
                    <i class="fa fa-info"></i> <span>About</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            <li class="header">Review</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-commenting-o"></i> <span>Review</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('review.create')}}"><i class="fa fa-circle-o"></i>Add review</a></li>
                </ul>
                 <ul class="treeview-menu">
                    <li><a href="{{route('review.index')}}"><i class="fa fa-circle-o"></i>View Review</a></li>
                </ul>
            </li>
          <!--   <li class="header">Gallary</li>
            
            <li class="treeview">
                <a href="{{url('/cd-admin/home/add-image')}}">
                    <i class="fa fa-file-picture-o"></i> <span>Gallary</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li> -->
             <li class="header">Gallary</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-file-picture-o"></i> <span>Gallary</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
               
                <ul class="treeview-menu">
                    <li><a href="{{route('album.create')}}"><i class="fa fa-circle-o"></i>Add new Album</a></li>
                </ul>
                 <ul class="treeview-menu">
                    <li><a href="{{route('album.show')}}"><i class="fa fa-circle-o"></i>View Albums</a></li>
                </ul>
            </li>

             <li class="header">Messages</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-copy"></i> <span>Messages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                    <a href="{{route('show.mailbox')}}"><i class="fa fa-circle-o"></i>Messages</a></li>
                   
                </ul>
                <ul class="treeview-menu">
                    <li class="active">
                    <a href="{{route('email.form')}}"><i class="fa fa-circle-o"></i>Messages view</a></li>
                   
                </ul>
            </li>
            <li class="header">Booking</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope "></i> <span>Booking</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                
                <ul class="treeview-menu">
                    <li class="active">
                    <a href="{{route('booking.view')}}"><i class="fa fa-circle-o"></i>Bookings</a></li>
                   
                </ul>
                <ul class="treeview-menu">
                    <li class="active">
                    <a href="{{route('booking.replies')}}"><i class="fa fa-circle-o"></i>Booking replied</a></li>
                   
                </ul>
                <ul class="treeview-menu">
                    <li class="active">
                    <a href="{{route('booked.view')}}"><i class="fa fa-circle-o"></i>Booking status</a></li>
                   
                </ul>
            </li> 

             <li class="header">carousel</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-file-picture-o"></i> <span>carousel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('carousels.create')}}"><i class="fa fa-circle-o"></i>Add new carousel</a></li>
                </ul>
                 <ul class="treeview-menu">                    
                    <li><a href="{{route('carousels.index')}}"><i class="fa fa-circle-o"></i>View All carousel</a></li>
                </ul>
            </li>
             <li class="header">SEO</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-search"></i> <span>SEO</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/home/seo')}}"><i class="fa fa-circle-o"></i>Package</a></li>
                </ul>
                 <ul class="treeview-menu">                    
                    <li><a href="{{url('/service-seo')}}"><i class="fa fa-circle-o"></i>Service</a></li>
                </ul>
            </li>
        </section>
        <!-- /.sidebar -->
    </aside>