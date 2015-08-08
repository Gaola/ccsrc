@extends('_layout.default')
@section('title', $title)
@section('body')
	

@include('_layout.slider')

    
<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{$topic->sthd}}</h2>
                    <p class="lead">{{$topic->stbd}}</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="{{$topic->stpicurl}}" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{$topic->sdhd}}</h2>
                    <p class="lead">{{$topic->stbd}}</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="{{$topic->sdpicurl}}" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{$topic->tdhd}}</h2>
                    <p class="lead">{{$topic->tdbd}}</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="{{$topic->tdpicurl}}" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
@include('_layout.footer')
@endsection

@section('js')

<script type="text/javascript">
    $('nav').addClass('navbar-fixed-top');
    $('.intro-header').css('background',"url(..{{$about->url}}) no-repeat center center");
</script>
@endsection