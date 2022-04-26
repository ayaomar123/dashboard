<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg" style="overflow: scroll">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{ url('/') }}">
                            <div class="pull-left"><i class="ti-home"></i><span
                                    class="right-nav-text">الرئيسية</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>

                    <!-- Grades-->
                    <li>
                        <a href="{{ url('/trees') }}">
                            <div class="pull-left"><i class="ti-home"></i><span
                                    class="right-nav-text">شجرة الاجازات</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>

                   {{-- <!-- Grades-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
                            <div class="pull-left"><i class="fas fa-school"></i><span class="right-nav-text">{{trans('main_trans.Grades')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Grades.index')}}">{{trans('main_trans.Grades_list')}}</a></li>

                        </ul>
                    </li>--}}

                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
