<div class="main-sidebar">
  <!-- Inner sidebar -->
  <div class="sidebar">
    <!-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form> /.sidebar-form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">菜单</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active">
          <a href="#">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
          </a>
      </li>
      <li><a href="{{ route('backend.user.index') }}">
          <i class="fa fa-user"></i>
          <span>用户管理</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
              <a href="{{ route('backend.user.index') }}">
                  <span>用户信息</span>
              </a>
          </li>
          <li>
              <a href="#">
                  <span>管理员</span>
              </a>
          </li>
        </ul>
      </li>
      <li class="treeview">
        <a href="{{ route('backend.group.index') }}"">
            <i class="fa fa-group"></i>
            <span>联盟管理</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
              <a href="{{ route('backend.group.index') }}"><span>联盟管理</span>
              </a>
          </li>
          <li>
              <a href="{{ route('backend.group.member') }}">
              <span>联盟成员管理</span>
              </a>
          </li>
          <li>
              <a href="#">联盟鲜花管理
              </a>
          </li>
        </ul>
      </li>
       <li><a href="#">
          <i class="fa fa-question-circle"></i>
          <span>帖子管理</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
              <a href="#">
                  <span>帖子信息</span>
              </a>
          </li>
          <li>
              <a href="#">
                  <span>联盟帖子</span>
              </a>
          </li>
        </ul>
      </li>
    </ul><!-- /.sidebar-menu -->

  </div><!-- /.sidebar -->
</div><!-- /.main-sidebar -->

<!--
  <script src="http://cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#side-menu').metisMenu({
         toggle: false
    });
});
</script> -->
