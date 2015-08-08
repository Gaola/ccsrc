@extends('_layout.admin')
@section('title', '主题页编辑 | 学术工作管理中心')
@section('css')


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
                        <a href="{{URL('/admin/headpic')}}">头图</a>
                    </li>
                    <li>
                        <strong>新增</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="row wrapper border-bottom border-top white-bg page-heading" style='margin-top: 2rem;'>
            <div class="col-lg-12">
                <h1>新增头图</h1>
                
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>阿噢!</strong> 似乎出了问题。<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ URL('admin/headpic') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="caption">标签</label>
                        <input type="text" class="form-control" name='caption' placeholder="Caption">
                    </div>
                    <div class="form-group">
                        <label for="PicFile">图片上传</label>
                        <input type="file" name="PicFile">
                        <input type="hidden" name="_method" value="POST">
                        <p class="help-block">请保持尺寸比例在1900*1267左右</p>
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                </form>
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


