@extends('template.template')

@section('content')
<main id="main">

	<div class="container">
		<div class="row topspace">
			<div class="col-sm-8 col-sm-offset-2">
 				<article class="post">
					<header class="entry-header">
 						<div class="entry-meta"> 
 							<span class="posted-on"><time class="entry-date published" date="{{ date('Y-m-d', strtotime($blog->created_at)) }}">{{ date('M d, Y', strtotime($blog->created_at)) }}</time></span>			
 						</div> 
 						<h1 class="entry-title"><a href="single.html" rel="bookmark">{{ $blog->title }}</a></h1>
					</header> 
					<div class="entry-content"> 
						<p><img alt="" src="{{ $blog->path_image }}"></p>
						<p>{!! $blog->content !!}</p>
					</div> 
				</article><!-- #post-## -->
											
			</div> 
		</div>

		<<!-- center class="">
			<ul class="pagination">
				<li class="disabled"><a href="">&laquo;</a></li>
				<li class="active"><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">5</a></li>
				<li><a href="">6</a></li>
				<li><a href="">&raquo;</a></li>
			</ul>
		</center> -->
	

	</div>	<!-- /container -->

</main>
@endsection