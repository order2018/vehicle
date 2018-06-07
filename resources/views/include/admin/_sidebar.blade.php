<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ url('/') }}" class="active"><i class="lnr lnr-home"></i> <span>系统首页</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i> <span>权限管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ route('user') }}" class="">用户列表</a></li>
                            <li><a href="{{ route('role') }}" class="">角色列表</a></li>
                            <li><a href="{{ route('permission') }}" class="">权限列表</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#subSet" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i> <span>系统设置</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subSet" class="collapse ">
                        <ul class="nav">
                            <li><a href="javascript:;" class="">基本设置</a></li>
                            <li><a href="javascript:;" class="">操作日志</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->