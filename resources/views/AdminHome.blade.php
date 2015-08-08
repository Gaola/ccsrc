@extends('_layout.admin')
@section('title', '学术工作管理中心')
@section('css')

    <!-- Morris -->
    <link href="/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

@endsection
@section('wrapper')
@include('_layout.topbar')
        <div class="row  border-bottom white-bg dashboard-header">
            <div class="col-sm-3">
                <h2>欢迎回来</h2>
                <small>当前工作尚有5个待处理事项</small>
                
            </div>
            <div class="col-sm-6">
                <ul class="list-group clear-list m-t">
                    <li class="list-group-item fist-item">
                        <span class="pull-right">
                                09:00
                            </span>
                        <span class="label label-default">1</span> 请联系我
                    </li>
                    <li class="list-group-item">
                            <span class="pull-right">
                                    10:16
                                </span>
                            <span class="label label-info">2</span> 签订合同
                        </li>
                        <li class="list-group-item">
                            <span class="pull-right">
                                    08:22
                                </span>
                            <span class="label label-primary">3</span> 新分店开张
                        </li>
                        <li class="list-group-item">
                            <span class="pull-right">
                                    11:06
                                </span>
                            <span class="label label-default">4</span> 打电话给璟雯
                        </li>
                        <li class="list-group-item">
                            <span class="pull-right">
                                    12:00
                                </span>
                            <span class="label label-primary">5</span> 发邮件给国民岳父
                        </li>
                </ul>
            </div>
            <div class="col-sm-3">
                
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js?v=3.4.0"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Flot -->

    <!-- Peity -->

    <!-- Custom and plugin javascript -->
    <script src="js/hplus.js?v=2.2.0"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function () {
            $('li[name=main]').addClass('active');
        });
    </script>

@endsection


