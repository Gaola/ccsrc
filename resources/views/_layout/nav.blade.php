
<nav class="navbar navbar-default topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Cul Commu Res</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{URL('/')}}">首页</a></li>
                  @if (Auth::guest())
                    <li><a href="/login">登录</a></li>
                    <li><a href="/register">注册</a></li>
                  @elseif(Auth::user()->admin == 1)
                    <li><a href="{{URL('/admin')}}">后台管理</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->truename }} <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="/logout"><i class="fa fa-sign-out"></i> 登出</a></li>
                      </ul>
                    </li>              
                  @else
                    <li><a href="{{URL('/user')}}">用户中心</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->truename }} <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="/logout"><i class="fa fa-sign-out"></i> 登出</a></li>
                      </ul>
                    </li>              
                  @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>