<aside class="main-sidebar">
       <section class="sidebar">
           <div class="user-panel">
               <div class="pull-left image">
                   <img src="{{url('dist/img/avatar.jpeg')}}" class="img-circle" alt="User Image">
               </div>
               <div class="pull-left info">
                   <p>rayle</p>
                   <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
               </div>
           </div>
           <!-- search form -->
           <form action="#" method="get" class="sidebar-form">
               <div class="input-group">
                   <input type="text" name="q" class="form-control" placeholder="Search...">
             <span class="input-group-btn">
               <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
               </button>
             </span>
               </div>
           </form>
           <!-- /.search form -->

           <!-- sidebar menu: : style can be found in sidebar.less -->
           <ul class="sidebar-menu">
               <li class="header">主导航栏</li>
               <li>
                   <a href="{{url('/dashboard')}}">
                       <i class="fa fa-dashboard"></i> <span>控制面板</span>
                   </a>
               </li>
               <li class="treeview">
                   <a href="#">
                       <i class="fa fa-user"></i>
                       <span>用户管理</span>
                       <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                   </a>
                   <ul class="treeview-menu">
                       <li><a href="{{url('/admin/info/index')}}"><i class="fa fa-star-o"></i>个人资料</a></li>
                       <li><a href="{{url('/admin/usermember/index')}}"><i class="fa fa-star-o"></i>管理员(用户)</a></li>
                       <li><a href="#"><i class="fa fa-star-o"></i>角色</a></li>
                       <li><a href="#"><i class="fa fa-star-o"></i>权限</a></li>
                   </ul>
               </li>

               <li class="treeview">
                   <a href="#">
                       <i class="fa fa-pie-chart"></i>
                       <span>内容管理</span>
                       <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                   </a>
                   <ul class="treeview-menu">
                       <li><a href="{{url('admin/article/index')}}"><i class="fa fa-star-o"></i>文章</a></li>
                       <li><a href=""><i class="fa fa-star-o"></i>评论</a></li>
                   </ul>
               <!-- <li class="header">LABELS</li>
               <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
               <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
               <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
               </li> -->

           </ul>
       </section>
       <!-- /.sidebar -->
   </aside>
