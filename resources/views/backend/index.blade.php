@extends('backend.layouts.backend-master')

@section('backend-main')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <?php
    $product = DB::table('products')->count('*');
    // $order = DB::table('order')->where('status',null)->count('*');       
    $users = DB::table('users')->count('*');
    $cat = DB::table('categories')->count('*');
    ?>
    <!-- START WIDGETS -->
    <div class="row">
        <div style="
    margin-top: 20px;
">
            <div class="col-md-4">
                <!-- START WIDGET SLIDER -->
                <div class="widget widget-default widget-carousel">
                    <div class="owl-carousel" id="owl-example">
                        <div>
                            <div class="widget-title">Tổng lượt truy cập</div>
                            <div class="widget-subtitle">27/08/2015 15:23</div>
                            <div class="widget-int">3,548</div>
                        </div>
                        <div>
                            <div class="widget-title">Mới</div>
                            <div class="widget-subtitle">Khách hàng</div>
                            <div class="widget-int">1,977</div>
                        </div>
                    </div>
                    <div class="widget-controls">
                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                    </div>
                </div>
                <!-- END WIDGET SLIDER -->
            </div>
            <div class="col-md-4">
                <a href="{{ route('get.home.login')}}" style="text-decoration:none;color:white">
                    <div class="widget widget-primary widget-item-icon">
                        <div class="widget-item-left">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-int num-count">{{$users}}</div>
                            <div class="widget-title">Thành viên</div>
                            <div class="widget-subtitle">Trên website</div>
                        </div>
                        <div class="widget-controls">
                            <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                        </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <!-- START WIDGET CLOCK -->
            <div class="widget widget-warning widget-padding-sm">
                <div class="widget-big-int plugin-clock">00:00</div>
                <div class="widget-subtitle plugin-date">Loading...</div>
                <div class="widget-controls">
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>
                <div class="widget-buttons widget-c3">
                    <div class="col">
                        <a href="#"><span class="fa fa-clock-o"></span></a>
                    </div>
                    <div class="col">
                        <a href="#"><span class="fa fa-bell"></span></a>
                    </div>
                    <div class="col">
                        <a href="#"><span class="fa fa-calendar"></span></a>
                    </div>
                </div>
            </div>
            <!-- END WIDGET CLOCK -->
        </div>
        <div class="col-md-4">
            <a href="{{ route('admin.get.list.product')}}" style="text-decoration:none;color:white">
                <div class="widget widget-danger widget-item-icon">
                    <div class="widget-item-left">
                        <span class="fa fa-laptop"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-int num-count">{{$product}}</div>
                        <div class="widget-title">Sản phẩm</div>
                        <div class="widget-subtitle">Trên website</div>
                    </div>
                    <div class="widget-controls">
                        <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('admin.get.list.category')}}" style="text-decoration:none;color:white">
                <div class="widget widget-success widget-item-icon">
                    <div class="widget-item-left">
                        <span class="fa fa-briefcase"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-int num-count">{{$cat}}</div>
                        <div class="widget-title">Danh mục</div>
                        <div class="widget-subtitle">Trên website</div>
                    </div>
                    <div class="widget-controls">
                        <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="widget widget-info widget-item-icon">
                <div class="widget-item-left">
                    <span class="fa fa-shopping-cart"></span>
                </div>
                <div class="widget-data">
                    <div class="widget-int num-count">599</div>
                    <div class="widget-title">Đơn hàng</div>
                    <div class="widget-subtitle">Trên website</div>
                </div>
                <div class="widget-controls">
                    <a href="#" class="widget-control-right"><span class="fa fa-times"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WIDGETS -->
<div class="row">
    <div class="col-md-12">
        <!-- START SALES BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Bán hàng</h3>
                    <span>Hoạt động bán hàng</span>
                </div>
                <ul class="panel-controls panel-controls-title">
                    <li>
                        <div id="reportrange" class="dtrange">
                            <span></span><b class="caret"></b>
                        </div>
                    </li>
                    <li><a href="#" class="panel-fullscreen rounded"><span class="fa fa-expand"></span></a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="row stacked">
                    <div class="col-md-12">
                        <div class="progress-list">
                            <div class="pull-left"><strong>Đang chờ duyệt</strong></div>
                            <div class="pull-right">75%</div>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                            </div>
                        </div>
                        <div class="progress-list">
                            <div class="pull-left"><strong>Đơn đã hoàn thành</strong></div>
                            <div class="pull-right">450/500</div>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                            </div>
                        </div>
                        <div class="progress-list">
                            <div class="pull-left"><strong class="text-danger">Đơn hàng đổi trả</strong></div>
                            <div class="pull-right">25/500</div>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">5%</div>
                            </div>
                        </div>
                        <div class="progress-list">
                            <div class="pull-left"><strong class="text-warning">Hoạt động hôm nay</strong></div>
                            <div class="pull-right">75/150</div>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SALES BLOCK -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">

            <!-- START SALES & EVENTS BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Sales & Event</h3>
                        <span>Event "Purchase Button"</span>
                    </div>
                    <ul class="panel-controls" style="margin-top: 2px;">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span>
                                        Collapse</a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="panel-body padding-0">
                    <div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
                </div>
            </div>
            <!-- END SALES & EVENTS BLOCK -->

        </div>
        <div class="col-md-4">

            <!-- START USERS ACTIVITY BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Users Activity</h3>
                        <span>Users vs returning</span>
                    </div>
                    <ul class="panel-controls" style="margin-top: 2px;">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span>
                                        Collapse</a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="panel-body padding-0">
                    <div class="chart-holder" id="dashboard-bar-1" style="height: 200px;"></div>
                </div>
            </div>
            <!-- END USERS ACTIVITY BLOCK -->

        </div>
        <div class="col-md-4">

            <!-- START VISITORS BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Visitors</h3>
                        <span>Visitors (last month)</span>
                    </div>
                    <ul class="panel-controls" style="margin-top: 2px;">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span>
                                        Collapse</a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="panel-body padding-0">
                    <div class="chart-holder" id="dashboard-donut-1" style="height: 200px;"></div>
                </div>
            </div>
            <!-- END VISITORS BLOCK -->

        </div>
    </div>
    <!-- START DASHBOARD CHART -->
    <div class="block-full-width">
        <div id="dashboard-chart" style="height: 250px; width: 100%; float: left;"></div>
        <div class="chart-legend">
            <div id="dashboard-legend"></div>
        </div>
    </div>
    <!-- END DASHBOARD CHART -->

</div>
<!-- END PAGE CONTENT WRAPPER -->
<div class="message-box animated fadeIn" data-sound="alert" id="notifi">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-times"></span>
                <strong>Thông báo</strong> !!!</div>
            <div class="mb-content">
                @if(isset($message))
                <p id="noti">{{ $message }}</p>
                @endif
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <button class="btn btn-warning btn-lg mb-control-yes">
                        <a href="{{ route('admin.get.login') }}">Đăng Nhập</a>
                    </button>
                    <button class="btn btn-default btn-lg mb-control-close">Hủy</button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop