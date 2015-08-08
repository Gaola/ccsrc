@extends('_layout.admin')
@section('title', '头图编辑 | 学术工作管理中心')
@section('css')
<style type="text/css">
</style>

@endsection
@section('wrapper')
@include('_layout.topbar')
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>主题头图编辑</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{URL('/')}}">主页</a>
                    </li>
                    <li>
                        <a href="{{URL('/admin')}}">管理中心</a>
                    </li>
                    <li>
                        <a href="{{URL('/admin/topic')}}">主题页编辑</a>
                    </li>
                    <li>
                        <strong>头图</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="row wrapper border-bottom border-top white-bg page-heading" style='margin-top: 2rem;'>
            <div class="col-lg-12">
                <h1>主题头图<a href="{{URL('admin/headpic/create')}}" class='btn btn-sm btn-primary' style='position: absolute; right:2rem;'><i class="fa fa-plus"></i> 新增头图</a></h1>
                <div style='margin-top: 2rem'>
                    <ul style='list-style: none; padding-left: 0;'>
                        @foreach ($pics as $pic)
                            <li style='float: left;padding-left: 15px; height: 250px; overflow: auto;'>
                                    <div>
                                        <a href="{{ URL('admin/headpic/'.$pic->id.'/edit') }}">
                                        <img style='width:250px; height: 150px;' class='img-thumbnail' src="{{$pic->url}}" title="{{ $pic->caption }}" />
                                        </a>
                                        <a href="{{ URL('admin/headpic/'.$pic->id.'/edit') }}">
                                        <h3 style='width:250px; word-break: all;'>
                                            {{ $pic->caption }}
                                        </a> 
                                            <form action="{{ URL('admin/headpic/'.$pic->id) }}" method="POST" style="display: inline;">
                                              <input name="_method" type="hidden" value="DELETE">
                                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                              <button type="submit" class="btn btn-xs text-danger" style='float: right; margin-right: 1rem;'><i class="fa fa-trash"></i> 删除</button>
                                            </form>
                                        </h3>
                                        修改时间：{{$pic->updated_at}}<br>
                                        上传者：<?php echo DB::select('select * from users where id = ?', [$pic->user_id])[0]->truename; ?><br>
                                    </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class='row' style='margin-top: 1rem; text-align: center;'>
            <?php echo $pics->render();  ?>
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


