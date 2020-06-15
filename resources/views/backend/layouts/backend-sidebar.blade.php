<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
  <!-- START X-NAVIGATION -->
  <ul class="x-navigation">
    <li class="xn-logo">
      <a href="{{route('admin.home')}}">
      </a>
      <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
      <a href="#" class="profile-mini">
        <img src="admin/assets/images/users/avatar.jpg" alt="John Doe"/>
      </a>
      <div class="profile">
        <div class="profile-image">
          <img src="admin/assets/images/users/avatar.jpg" alt="John Doe"/>
        </div>
        <div class="profile-data">
         <p class="name">{{Auth()->user()->name}}</p>
         <p class="designation">
           @php
           $roleUser = \DB::table('users')
           ->join('user_roles','users.id','=','user_roles.user_id')
           ->join('roles','user_roles.role_id','=','roles.id')
           ->where('users.id','=',\Auth()->user()->id)
           ->select('*')
           ->first();

           @endphp
           {{ $roleUser->name}} 
         </div>

       </div>                                                                        
     </li>
     
     <li class=" {{\Request::route()->getName() == 'admin.home' ? 'active' : ''}}">
      <a href="{{route('admin.home')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
    </li>   
    <li class="xn-openable  {{\Request::route()->getName() == 'admin.get.list.category' || \Request::route()->getName() == 'admin.get.create.category' ? 'active' : ''}}">
      <a href="#"><span class="fa fa-table"></span> <span class="xn-text">Danh mục</span></a>
      <ul>                            
        <li><a href="{{ route('admin.get.list.category')}}"><span class="fa fa-align-justify"></span> Danh sách danh mục</a></li>
        <li><a href="{{ route('admin.get.create.category')}}"><span class="fa fa-plus"></span> Thêm danh mục</a></li>
      </ul>
    </li>
    <li class="xn-openable  {{\Request::route()->getName() == 'admin.get.list.product' || \Request::route()->getName() == 'admin.get.create.product' ? 'active' : ''}}">
      <a href="#"><span class="fa fa-laptop"></span> <span class="xn-text">Sản phẩm</span></a>
      <ul>                            
        <li><a href="{{ route('admin.get.list.product')}}"><span class="fa fa-align-justify"></span> Danh sách sản phẩm</a></li>
        <li><a href="{{route('admin.get.create.product')}}"><span class="fa fa-plus"></span> Thêm đơn hàng</a></li>
      </ul>
    </li>
    <li class="xn-openable  {{\Request::route()->getName() == 'admin.get.list.order.not' || \Request::route()->getName() == 'admin.get.list.order' ? 'active' : ''}}">
      <a href="#"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Đơn hàng</span></a>
      <ul>                            
        <li><a href="{{ route('admin.get.list.order.not')}}"><span class="fa fa-times"></span> Đơn hàng chưa duyệt</a></li>
        <li><a href="{{ route('admin.get.list.order')}}"><span class="fa fa-check"></span> Đơn hàng đã duyệt</a></li>
      </ul>
    </li>
    <li class="xn-openable  {{\Request::route()->getName() == 'get.backend.list.user' || \Request::route()->getName() == 'get.backend.list.employee' ? 'active' : ''}}">
      <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Tài khoản</span></a>
      <ul>                            
        <li><a href="{{ route('get.backend.list.user') }}"><span class="fa fa-users"></span> Khách hàng</a></li>
        <li><a href="{{ route('get.backend.list.employee') }}"><span class="fa fa-user"></span> Nhân viên</a></li>
      </ul>
    </li>
  </ul>
  <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->