<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">

                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/img/{{Auth::user()->studentid}}.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> 
                                    <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->truename}}</strong></span>
                                    <span class="text-muted text-xs block">超级管理员 <b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">修改头像</a>
                                </li>
                                <li><a href="#">个人资料</a>
                                </li>
                                <li><a href="#">信箱</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{URL('/logout')}}">安全退出</a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li name='main'>
                        <a href="{{URL('/admin')}}"><i class="fa fa-th-large"></i> <span class="nav-label">主页</span></a>
                    </li>
                    <li name='landing'>
                        <a href="{{URL('/admin/topic')}}"><i class="fa fa-desktop"></i> <span class="nav-label">主题页编辑</span></a>
                    </li>                    
                    <li>
                        <a href="#"><i class="fa fa fa-globe"></i> <span class="nav-label">v2.0新增</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="toastr_notifications.html">Toastr通知</a>
                            </li>
                            <li><a href="nestable_list.html">嵌套列表</a>
                            </li>
                            <li><a href="timeline_v2.html">时间轴</a>
                            </li>
                            <li><a href="forum_main.html">论坛</a>
                            </li>
                            <li><a href="code_editor.html">代码编辑器</a>
                            </li>
                            <li><a href="modal_window.html">模态窗口</a>
                            </li>
                            <li><a href="validation.html">表单验证</a>
                            </li>
                            <li><a href="tree_view_v2.html">树形视图</a>
                            </li>
                            <li><a href="chat_view.html">聊天窗口</a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </nav>