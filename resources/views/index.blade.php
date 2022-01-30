@extends('template.template')

@section('content')
<main id="main">

	<div class="container">
		
		<div class="row section topspace">
			<div class="col-md-12">
				<p class="lead text-center text-muted">Ceritakan apa yang ingin anda buat, saya akan memberikan solusi terbaik untuk bisnis anda melalui sebuah website yang anda inginkan, bahkan aplikasi android/iOS apabila anda membutuhkannya. </p>
			</div>
		</div> <!-- / section -->
		
		<div class="row section featured topspace">
			<h2 class="section-title"><span>Services</span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Website Development</h3>
					<p>Luncurkan website pada bisnis milik Anda untuk meningkatkan kepercayaan pelanggan anda bahkan meningkatkan transaksi pada bisnis Anda.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Payment Integration</h3>
					<p>Ingin menambahkan pembayaran seperti Gopay, Shopeepay, Dana, Ovo, QR, dll di website anda? Ceritakan pada saya, saya akan membantu membuatkan <i>payment integration</i> pada website milik Anda.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Mobile development</h3>
					<p>Tidak cukup di website saja? Beritahu saya bahwa Anda membutuhkan sesuatu yang dapat diinstall di <i>smartphone</i> pengguna Anda untuk mempermudah mereka mengakses bisnis Anda.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
				<div class="col-sm-6 col-md-3">
					<h3 class="text-center">Want to <br>Hire Me?</h3>
					<p>Ohya! Tentu saja Anda bisa meng-<i>hire</i> saya pada project Anda atau perusahaan Anda, saya sangat terbuka untuk itu.</p>
					<p class="text-center"><a href="" class="btn btn-action">Read more</a></p>
				</div>
			</div>
		</div> <!-- / section -->
	
		<div class="row section recentworks topspace">
			
			<h2 class="section-title"><span>Recent Works</span></h2>
			
			<div class="thumbnails recentworks row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="#">
						<span class="img">
							<img src="{{ asset('/images/no-image.png') }}" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Bangjeff.com - Topup Voucher Game Online</span>
					</a>
					<span class="details"><a href="">Website</a> | <a href="">Laravel</a> | <a href="">Payment Gateway</a></span>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="#">
						<span class="img">
							<img src="{{ asset('/images/no-image.png') }}" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">Sabunsebu - E-Commerce</span>
					</a>
					<span class="details"><a href="">Website</a> | <a href="">Mobile</a> | <a href="">Laravel</a> | <a href="">Payment Gateway</a></span>
					<h4></h4>
					<p></p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="#">
						<span class="img">
							<img src="{{ asset('/images/no-image.png') }}" alt="">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">XGameshop.id - Topup Voucher Game Online</span>
					</a>
					<span class="details"><a href="">Website</a> | <a href="">Laravel</a> | <a href="">Vue.Js</a></span>
					<h4></h4>
					<p></p>
				</div>
			</div>

		</div> <!-- /section -->

		<div class="row section topspace">
			<div class="panel panel-cta"><div class="panel-body">
				<div class="col-lg-8">
					<p>Butuh sesuatu untuk memperluas bisnis anda pada jaringan internet seperti membuatkan website atau <i>mobile application</i>?. </p>
				</div>
				<div class="col-lg-4 text-right">
					<a href="# " class="btn btn-primary btn-lg">Hubungi Saya</a>
				</div>
			</div></div>
		</div> <!-- /section -->
	</div>	<!-- /container -->

</main>
@endsection