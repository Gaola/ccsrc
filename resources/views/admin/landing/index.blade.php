@extends('_layout.admin')
@section('title', '主题页编辑 | 学术工作管理中心')
@section('css')


@endsection
@section('wrapper')
@include('_layout.topbar')
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>主题页(LandingPage)编辑</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{URL('/')}}">主页</a>
                    </li>
                    <li>
                        <a href="{{URL('/admin')}}">管理中心</a>
                    </li>
                    <li>
                        <strong>主题页编辑</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="row wrapper border-bottom border-top white-bg page-heading" style='margin-top: 2rem;'>
            <div class="col-lg-4">
                <div class="panel panel-primary text-center" style='margin-top: 2rem;'>
                    <h1>主题头图</h1>
                    <a href="{{URL('admin/headpic/create')}}" class='btn btn-sm btn-primary' style='margin:auto auto; margin-bottom: 1rem;'><i class="fa fa-plus"></i> 新增头图</a>
                    <div class="list-group">
                    @foreach ($pics as $pic)
                        <a href="{{ URL('admin/headpic/'.$pic->id.'/edit') }}" class="list-group-item">
                            <div>
                                <img class='img-thumbnail' src="{{$pic->url}}" />
                                <h3>{{ $pic->caption }}</h3>
                                修改时间：{{$pic->updated_at}}<br>
                                上传者：<?php echo DB::select('select * from users where id = ?', [$pic->user_id])[0]->truename; ?><br>
                            </div>
                        </a>
                    @endforeach
                    </div><br>
                    <div class='text-center'>
                        <a href="{{URL('/admin/headpic')}}" class='btn' style='margin-bottom: 2rem; color:#333;'><i class="fa fa-th"></i> 批量管理</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="panel panel-success" style='margin-top: 2rem;'>
                    <h1 class='text-center'>话题编辑</h1>
                    
                </div>
            </div>
        </div>
@endsection
@section('js')
    <!-- Mainly scripts -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js?v=3.4.0"></script>
    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Flot -->

    <!-- Peity -->

    <!-- Custom and plugin javascript -->
    <script src="/js/hplus.js?v=2.2.0"></script>
    <script src="/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function () {
            $('li[name=landing]').addClass('active');
        });
    </script>

@endsection


