<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->

    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="{{asset('ui/frontend/assets/image')}}/{{Auth::user()->donar==null ? ' ':Auth::user()->donar->image}}" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>
                        {{-- {{$product->image}} --}}
                    <div class="media-body">
                        <div class="media-title font-weight-semibold">{{ Auth::user()->name }}</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;{{Auth::user()->donar==null ? ' ':Auth::user()->donar->profession}}
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
                </li>
                <li class="nav-item">
                    {{-- <a href="{{route('dashboard')}}" class="nav-link active"> --}}
                    <a href="" class="nav-link active ">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <a href="{{route('batches.index')}}" class="nav-link"> --}}
                    <a href="{{route('donardata')}}" class="nav-link">
                        <i class="fas fa-eye"></i>
                        <span>
                            View Donar
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <a href="{{route('students.index')}}" class="nav-link"> --}}
                    <a href="" class="nav-link">
                        <i class=" "></i>
                        <span>
                           Add Donars
                        </span>
                    </a>
               </li>
                </li>
                <li class="nav-item">
                    {{-- <a href="{{route('batches.index')}}" class="nav-link"> --}}
                    <a href="{{route('user.edit',Auth::User()->id)}}" class="nav-link"><i class="icon-home4"></i>Update profile Info</a>

                </li>
                    <!-- /main -->

                <!-- Page kits -->
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="User pages">
                        <li class="nav-item"><a href="user_pages_list.html" class="nav-link">User list</a></li>
                        <li class="nav-item"><a href="user_pages_cards.html" class="nav-link">User cards</a></li>
                        <li class="nav-item"><a href="user_pages_profile.html" class="nav-link">Simple profile</a></li>
                    </ul>
                </li>
                <!-- /page kits -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>