<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EndCommerce: {{Auth::user()->name}}</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{asset('admin/assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('admin/assets/css/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{asset('admin/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('admin/assets/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">{{Auth::user()->name}}</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : {{Auth::user()->created_at}} &nbsp; <a href="{{ route('logout') }}" class="btn btn-danger square-btn-adjust"
 onclick="event.preventDefault();
 document.getElementById('logout-form').submit();"
>Logout</a> </div>
        </nav>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{asset('admin/assets/img/find_user.png')}}" class="user-image img-responsive"/>
					</li>




                    <li>
                        <a href="#" style="font-weight: 900"><i class="fa fa-bookmark fa-2x"></i> Categories<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('categories.create')}}">Add Category</a>
                            </li>
                            <li>
                                <a href="{{route('categories.index')}}">Show All</a>
                            </li>

                        </ul>
                      </li>

                      <li>
                        <a href="#" style="font-weight: 900"><i class="fa fa-bookmark fa-2x"></i> producsts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('products.create')}}">Add products</a>
                            </li>
                            <li>
                                <a href="{{route('products.index')}}">Show All</a>
                            </li>

                        </ul>
                      </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
