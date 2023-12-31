<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon.ico') }}">


    <title>BrandBeans</title>
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('assets/styles/style.min.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->

    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') }}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/waves/waves.min.css') }}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/sweet-alert/sweetalert.css') }}">

    <!-- Percent Circle -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/percircle/css/percircle.css')}}">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/chart/chartist/chartist.min.css') }}">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>


    <!-- Dropify -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/dropify/css/dropify.min.css') }}">

    <!-- Color Picker -->
    <link rel="stylesheet" href="{{ asset('assets/color-switcher/color-switcher.min.css') }}">

    <!-- Bootstrap 5 Alerts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- Remodal -->
    <link rel="stylesheet" href="{{ asset('assets/plugin/modal/remodal/remodal.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/modal/remodal/remodal-default-theme.css')}}">

</head>

<body>
    <div class="main-menu" style="background-color: #03ACF0;">
        <header class="header" style="background-color: #03ACF0;">
            <a href="{{ url('/home') }}" style="background-color: white;" class="logo"><img src="{{ asset('asset/img/logo.png') }}" style="width:150px" class="img-fluid" /></a>
            <button type="button" class="button-close fa fa-times js__menu_close" style="color: #03ACF0;"></button>
            <div class="user">
                <h5 class="name"><a class="text-white fs-3" href="#">{{ Auth::user()->name }}</a></h5>
                <!-- /.name -->
                <div class="control-wrap js__drop_down">
                    <i class="fa fa-aret-down "></i>
                    <div class="control-list">
                        <div class="control-item"><a class="dropdown-item font" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <!-- /.control-list -->
                </div>
                <!-- /.control-wrap -->
            </div>
            <!-- /.user -->
        </header>
        <!-- /.header -->
        <div class="content">

            <div class="navigation ">
                <!-- /.title -->
                <ul class="menu js__accordion">

                    @role('Writer')

                    <li>
                        <a class="text-white waves-effect" href="{{route('writer.index')}}"><i class="text-white menu-icon fa fa-quote-left"></i><span>My Slogan</span></a>
                    </li>


                    @endrole
                    @role('Designer')

                    <li>
                        <a class="text-white waves-effect" href="{{route('design.index')}}"><i class="text-white menu-icon fa fa-quote-right"></i><span>Slogans</span></a>
                    </li>
                    <li>
                        <a class="text-white waves-effect" href="{{route('design.show')}}"><i class="text-white menu-icon fa fa-paint-brush"></i><span>My Designs</span></a>
                    </li>
                    @endrole

                    @role('Influencer')
                    <li>
                        <a class="text-white waves-effect" href="{{route('influencer.profile')}}"><i class="text-white menu-icon fa fa-user"></i><span>Profile</span></a>
                    </li>
                    <li>
                        <a class="text-white waves-effect" href="{{route('influencer.portfolio.index')}}"><i class="text-white menu-icon fa fa-image"></i><span>Portfolio</span></a>
                    </li>
                    <li>
                        <a class="text-white waves-effect" href="{{route('influencer.brands')}}"><i class="text-white menu-icon fa fa-bullhorn"></i><span>Brands</span></a>
                    </li>

                    <li>
                        <a class="text-white waves-effect" href="{{route('influencer.campaignApplyList')}}"><i class="text-white menu-icon fa fa-users"></i><span>My Applied Campaign</span></a>
                    </li>

                    @endrole

                    @role('Brand')
                    <li>
                        <a class="text-white waves-effect" href="{{route('brand.campaign.index')}}"><i class="text-white menu-icon fa fa-user"></i><span>Campaign</span></a>
                    </li>
                    <li>
                        <a class="text-white waves-effect" href="{{route('brand.campaign.step.index')}}"><i class="text-white menu-icon fa fa-user"></i><span>Campaign Step</span></a>
                    </li>
                    <li>
                        <a class="text-white waves-effect" href="{{route('brand.campaign.appliers')}}"><i class="text-white menu-icon fa fa-user"></i><span>Appliers</span></a>
                    </li>

                    @endrole

                    @role('Admin')

                    <li>
                        <a class="text-white waves-effect parent-item js__control" href="#"><i class="text-white menu-icon bi bi-palette-fill"></i><span>Content</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content ">
                            <li>
                                <a class="text-white waves-effect" href="{{ route('adminslogan.adminslogan') }}"><span>Slogan</span></a>
                            </li>
                            <li>
                                <a class="text-white waves-effect" href="{{route('admindesign.admindesign')}}"><span>Design</span></a>
                            </li>

                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>

                    <li>
                        <a class="text-white waves-effect parent-item js__control" href="#"><i class="text-white menu-icon fa fa-calendar"></i><span>Category</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content ">
                            <li>
                                <a class="text-white waves-effect" href="{{ route('admincategory.index') }}"><span>Category</span></a>
                            </li>
                            <li>
                                <a class="text-white waves-effect" href="{{ route('adminmedia.index') }}"><span>Media</span></a>
                            </li>

                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>

                    <!-- downloads -->
                    <li>
                        <a class="text-white waves-effect" href="{{ route('admindownload.index') }}"><i class="text-white menu-icon fa fa-download"></i><span>Downloads</span></a>
                    </li>
                    <!-- reseller -->
                    <li>
                        <a class="text-white waves-effect" href="#"><i class="text-white menu-icon fas fa-handshake"></i><span>Reseller</span></a>
                    </li>

                    <!-- template -->
                    <li>
                        <a class="text-white waves-effect" href="{{ route('admintemplatemaster.index') }}"><i class="text-white menu-icon fa fa-calendar"></i><span>Template Master</span></a>
                    </li>

                    <!-- master -->

                    <li>
                        <a class="text-white waves-effect parent-item js__control" href="#"><i class="text-white menu-icon fa fa-camera"></i><span>Master</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content ">

                            <li>
                                <a class="text-white waves-effect" href="{{ route('product.index') }}"><span>Product</span></a>
                            </li>

                            <li>
                                <a class="text-white waves-effect" href="{{ route('adminstate.index') }}"><span>State</span></a>
                            </li>
                            <li>
                                <a class="text-white waves-effect" href="{{ route('admincity.index') }}"><span>City</span></a>
                            </li>

                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>

                    <!-- influencer -->
                    <li>
                        <a class="text-white waves-effect parent-item js__control" href="#"><i class="text-white menu-icon bi bi-palette-fill"></i><span>Creator</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content ">
                            <li>
                                <a class="text-white waves-effect" href="{{route('influencer.index')}}"><span>Influencer Category</span></a>
                            </li>
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>

                    <!-- Extra -->

                    <li>
                        <a class="text-white waves-effect parent-item js__control" href="#"><i class="text-white menu-icon fa fa-product-hunt"></i><span>Extras</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content ">
                            <li>
                                <a class="text-white waves-effect" href="{{ route('banner.index') }}"><span>Banner</span></a>
                            </li>
                            <li>
                                <a class="text-white waves-effect" href="{{ route('offer.index') }}"><span>Offer</span></a>
                            </li>
                            <li>
                                <a class="text-white waves-effect" href="{{ route('coupon.index') }}"><span>Coupon</span></a>
                            </li>

                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>


                    <!-- Notification -->


                    <li>
                        <a class="text-white waves-effect parent-item js__control" href="#"><i class="text-white menu-icon fa fa-bell"></i><span>Notification</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content ">
                            <li><a class="text-white waves-effect" href="{{ route('type.index') }}"><span>Notification type</span></a></li>
                            <li><a class="text-white waves-effect" href="{{ route('typedetail.index') }}"><span>Notification type Detail</span></a></li>
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>


                    <li>
                        <a class="text-white waves-effect parent-item js__control" href="#"><i class="text-white menu-icon fa fa-cog"></i><span>Settings</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content ">
                            <li><a class="text-white" href="{{ route('users.index') }}">Manage User</a></li>
                            <li><a class="text-white" href="{{ route('roles.index') }}">Manage Role</a></li>
                            <li>
                                <a class="text-white waves-effect" href="{{ route('accountpost.index') }}"><span>Our Users</span></a>
                            </li>
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>

                    <!-- Reports -->
                    <!-- {{Request::url('adminsubscription/index')}} -->
                    <li class="@if( Request::url('adminsubscription/index')) ? 'current active' : '' @endif">
                        <a class="text-white waves-effect parent-item js__control" href="#"><i class="text-white menu-icon fa fa-cog"></i><span>Reports</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content ">
                            <li>
                                <a class="text-white waves-effect" href="{{ route('adminsubscription.index') }}"><span>Subscription</span></a>
                            </li>
                            <li>
                                <a class="text-white waves-effect" href="{{ route('adminsubscriptionpackage.index') }}"><span>Subscription Package</span></a>
                            </li>
                            <li>
                                <a class="text-white waves-effect" href="{{ route('accountpost.index') }}"><span>Our Users</span></a>
                            </li>
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>



                    @endrole


                    <li>
                        <a class="text-white waves-effect parent-item js__control" href="#"><i class="text-white menu-icon fa fa-cog"></i><span>My Profile</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content ">
                            <li>
                                <!-- {{ config('app.username')}} -->
                                <a class="waves-effect parent-item text-white" href=" {{ route('demo_edit') }}"><i class="menu-icon fa fa-flag text-white"></i><span>Profile</span></a>
                                <!-- /.sub-menu js__content -->
                            </li>
                            <li>
                                <a class="waves-effect parent-item text-white" href="{{ route('account.account') }}"><i class="menu-icon fa fa-adjust text-white"></i><span>Account</span></a>
                            </li>
                            <li>
                                <a class="waves-effect parent-item text-white" href="{{ route('feed.index') }}"><i class="menu-icon fa fa-star text-white"></i><span>FeedBack</span></a>
                            </li>
                            <li>
                                <a class="waves-effect parent-item text-white" href="{{ route('inquiry.index') }}"><i class="menu-icon fa fa-comments text-white"></i><span>Inquiry</span></a>
                            </li>
                            <!-- <li>
<a class="waves-effect parent-item text-white" href="{{ route('pricing.index') }}"><i class="menu-icon fa fa-money text-white"></i><span>Pricing</span></a>
</li> -->
                            <li>
                                <a class="waves-effect parent-item text-white" href="{{ route('refer.index') }}"><i class="menu-icon fa fa-user-plus text-white"></i><span>Refer</span></a>
                            </li>

                            <li>
                                <a class="waves-effect parent-item text-white" href="{{route('story.index')}}"><i class="menu-icon bi bi-hourglass-split text-white"></i><span>My Stories</span></a>
                            </li>

                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>




                    <br><br>
                </ul>

            </div>

        </div>

    </div>
    <!-- /.main-menu -->

    <div class="fixed-navbar" style="background-color: #03ACF0;">
        <div class="pull-left">
            <button type="button" style="background-color: #03ACF0;" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
            <h1 class="page-title">@yield('header')</h1>
            <!-- /.page-title -->
        </div>
        <!-- /.pull-left -->
        <div class="pull-right">
            <!-- <div class="ico-item">
                <a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
                <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form> -->
            <!-- /.searchform -->
            <!-- </div> -->
            <!-- /.ico-item -->
            <a class="text-white ico-item fa fa-power-off" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            </a>
            <div class="ico-item fa fa-arrows-alt js__full_screen text-white"></div>
            <!-- /.ico-item fa fa-fa-arrows-alt -->
            <!-- <div class="ico-item toggle-hover js__drop_down ">
                <span class="fa fa-th js__drop_down_button"></span>
                <div class="toggle-content">
                    <ul>
                        <li><a href="#"><i class="fa fa-github"></i><span class="txt">Github</span></a></li>
                        <li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt">Bitbucket</span></a></li>
                        <li><a href="#"><i class="fa fa-slack"></i><span class="txt">Slack</span></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i><span class="txt">Dribbble</span></a></li>
                        <li><a href="#"><i class="fa fa-amazon"></i><span class="txt">Amazon</span></a></li>
                        <li><a href="#"><i class="fa fa-dropbox"></i><span class="txt">Dropbox</span></a></li>
                    </ul>
                    <a href="#" class="read-more">More</a>
                </div> -->
            <!-- /.toggle-content -->
            <!-- </div> -->
            <!-- /.ico-item -->
            <!-- <a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
            <a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a> -->


        </div>
        <!-- /.pull-right -->
    </div>
    <!-- /.fixed-navbar -->

    <div id="notification-popup" class="notice-popup js__toggle" data-space="75">
        <h2 class="popup-title">Your Notifications</h2>
        <!-- /.popup-title -->
        <div class="content">
            <ul class="notice-list">
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">John Doe</span>
                        <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                        <span class="time">10 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Anna William</span>
                        <span class="desc">Like your post: “Facebook Messenger”</span>
                        <span class="time">15 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
                        <span class="name">Update Status</span>
                        <span class="desc">Failed to get available update data. To ensure the please contact
                            us.</span>
                        <span class="time">30 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                        <span class="name">Jennifer</span>
                        <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                        <span class="time">45 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Michael Zenaty</span>
                        <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                        <span class="time">50 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Simon</span>
                        <span class="desc">Like your post: “Facebook Messenger”</span>
                        <span class="time">1 hour</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
                        <span class="name">Account Contact Change</span>
                        <span class="desc">A contact detail associated with your account has been changed.</span>
                        <span class="time">2 hours</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Helen 987</span>
                        <span class="desc">Like your post: “Facebook Messenger”</span>
                        <span class="time">Yesterday</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                        <span class="name">Denise Jenny</span>
                        <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                        <span class="time">Oct, 28</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Thomas William</span>
                        <span class="desc">Like your post: “Facebook Messenger”</span>
                        <span class="time">Oct, 27</span>
                    </a>
                </li>
            </ul>
            <!-- /.notice-list -->
            <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
        </div>
        <!-- /.content -->
    </div>
    <!-- /#notification-popup -->

    <div id="message-popup" class="notice-popup js__toggle" data-space="75">
        <h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
        <!-- /.popup-title -->
        <div class="content">
            <ul class="notice-list">
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">John Doe</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">10 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Harry Halen</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">15 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Thomas Taylor</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">30 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                        <span class="name">Jennifer</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">45 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Helen Candy</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">45 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                        <span class="name">Anna Cavan</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">1 hour ago</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar bg-success"><i class="fa fa-user"></i></span>
                        <span class="name">Jenny Betty</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">1 day ago</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                        <span class="name">Denise Peterson</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">1 year ago</span>
                    </a>
                </li>
            </ul>
            <!-- /.notice-list -->
            <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
        </div>
        <!-- /.content -->
    </div>
    <!-- /#message-popup -->
    <!-- <div id="color-switcher"> -->
    <!-- <div id="color-switcher-button" class="btn-switcher">
            <div class="inside waves-effect waves-circle waves-light">
                <i class="ico fa fa-gear"></i>
            </div> -->
    <!-- .inside waves-effect waves-circle -->
    <!-- </div> -->
    <!-- .btn-switcher -->
    <!-- <div id="color-switcher-content" class="content">
            <a href="#" data-color="red" class="item js__change_color"><span class="color" style="background-color: #f44336;"></span><span class="text">Red</span></a>
            <a href="#" data-color="violet" class="item js__change_color"><span class="color" style="background-color: #673ab7;"></span><span class="text">Violet</span></a>
            <a href="#" data-color="dark-blue" class="item js__change_color"><span class="color" style="background-color: #3f51b5;"></span><span class="text">Dark Blue</span></a>
            <a href="#" data-color="blue" class="item js__change_color active"><span class="color" style="background-color: #304ffe;"></span><span class="text">Blue</span></a>
            <a href="#" data-color="light-blue" class="item js__change_color"><span class="color" style="background-color: #2196f3;"></span><span class="text">Light Blue</span></a>
            <a href="#" data-color="green" class="item js__change_color"><span class="color" style="background-color: #4caf50;"></span><span class="text">Green</span></a>
            <a href="#" data-color="yellow" class="item js__change_color"><span class="color" style="background-color: #ffc107;"></span><span class="text">Yellow</span></a>
            <a href="#" data-color="orange" class="item js__change_color"><span class="color" style="background-color: #ff5722;"></span><span class="text">Orange</span></a>
            <a href="#" data-color="chocolate" class="item js__change_color"><span class="color" style="background-color: #795548;"></span><span class="text">Chocolate</span></a>
            <a href="#" data-color="dark-green" class="item js__change_color"><span class="color" style="background-color: #263238;"></span><span class="text">Dark Green</span></a>
            <span id="color-reset" class="btn-restore-default js__restore_default">Reset</span>
        </div>
       
    </div> -->
    <!-- #color-switcher -->

    <div id="wrapper">
        <div class="main-content">
            @yield('content')
        </div>
    </div>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('assets/plugin/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/sweetalert.init.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/waves/waves.min.js') }}"></script>
    <!-- Full Screen Plugin -->
    <script src="{{ asset('assets/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>

    <!-- Percent Circle -->
    <script src="{{ asset('assets/plugin/percircle/js/percircle.js') }}"></script>

    <!-- Google Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Chartist Chart -->
    <script src="{{ asset('assets/plugin/chart/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/chart.chartist.init.min.js') }}"></script>

    <!-- FullCalendar -->
    <script src="{{ asset('assets/plugin/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/fullcalendar.init.js') }}"></script>

    <!-- Data Tables -->
    <script src="{{ asset('assets/plugin/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/datatables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/datatables.demo.min.js') }}"></script>

    <!-- <script src="{{ asset('assets/scripts/main.min.js') }}"></script> -->
    <script src="{{ asset('assets/color-switcher/color-switcher.min.js') }}"></script>
    <!-- -------------------- -->

    <!-- Full Screen Plugin -->
    <script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>



    <!-- Dropify -->
    <script src="{{ asset('assets/plugin/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/fileUpload.demo.min.js') }}"></script>

    <script src="{{ asset('assets/scripts/main.min.js') }}"></script>


    <!-- Remodal -->
    <script src="{{ asset('assets/plugin/modal/remodal/remodal.min.js')}}"></script>


</body>

</html>