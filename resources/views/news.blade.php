@extends('_layout.default')
@section('title', $title)
@section('body')
	


<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<ul>
			@foreach ($pages as $page)
				<li style="margin: 50px 0;">
					<div class="title">
						<a href="{{ URL('news/'.$page->id) }}">
							<h4>{{ $page->title }}</h4>
						</a>
					</div>
					<div class="body">
						<p>{{ $page->body }}</p>
					</div>
				</li>
			@endforeach
			</ul>
			<?php echo $pages->render(); ?>
		</div>
	</div>
</div>
@include('_layout.footer')
@endsection