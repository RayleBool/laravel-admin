<div class="row">
    <div class="col-md-3" style="position:absolute;width:280px;margin-top:60px;">
           <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="icon-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="icon-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-user-md"></i> 用户<i class="icon-angle-left pull-right"></i></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">注册用户</a>
                                </li>
                                <li>
                                    <a href="morris.html">认证用户</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
                       
                        <li>
                            <a href="#"><i class="icon-group"></i> 联盟 <i class="icon-angle-left pull-right"></i></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
    </div>
  </div>
  <script src="http://cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#side-menu').metisMenu({
         toggle: false
    });
});
</script>
