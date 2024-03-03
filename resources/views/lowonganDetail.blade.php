<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8">
	<title>E-Recruitment</title>
	<link rel="shortcut icon" href="{{asset('depan/assets/img/icon.png')}}">

	<meta name="description"
		content="FundMe - is a Premium HTML Responsive Templeate by HTMLmate Team. You can use this for anykind of Nonprofit website">

	<meta name="keywords" content="Premium HTML Template">

	<meta name="author" content="HTMLmate">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css-include -->

	<!-- boorstrap -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/bootstrap.min.css')}}">
	<!-- themify-icon.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/themify-icons.css')}}">
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/owl.carousel.css')}}">
	<!-- Video-min -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/video.min.css')}}">
	<!-- animate.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/animate.css')}}">
	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/rev-slider/css/settings.css')}}">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/rev-slider/css/layers.css')}}">
	<!-- REVOLUTION NAVIGATION STYLES -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/rev-slider/css/navigation.css')}}">
	<!-- menu style -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/menu.css')}}">
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/style.css')}}">
	<!-- responsive.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('depan/assets/css/responsive.css')}}">
</head>
<!-- /end of head -->

<body>
	<div id="preloader"></div>
	<!-- Start of Header
	============================================= -->
	<header>
		<div class="header-top-bg">
			<div class="container">
				<div class="row">
					<div class="header-top">
						<div class="head-top-info pull-left">
							<ul class="top-info">
								<li><img src="{{asset('depan/assets/img/call.png')}}" alt="image">(0511) 3255551</li>
								<li><img src="{{asset('depan/assets/img/inbox.png')}}" alt="image">corporate@telkomakses.co.id</li>
							</ul>
						</div>
						<!-- /head-top-info -->
						<div class="header-social pull-right">
							<div class="social">
								<ul class="social-list">
									<li><a href="#"><span class="ti-facebook"></span></a></li>
									<li><a href="#"><span class="ti-twitter"></span></a></li>
									<li><a href="#"><span class="ti-google"></span></a></li>
									<li><a href="#"><span class="ti-instagram"></span></a></li>
								</ul>
							</div>
						</div>
						<!-- /header-social -->
					</div><!-- /header-top -->
				</div><!-- /row -->
			</div><!-- /container -->
		</div>
		<div class="menu-bar">
			<div class="container">
				<div class="row">
					<nav class="navbar">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<a class="navbar-brand" href="/"><img src="{{asset('depan/assets/img/logo.png')}}"
									alt="image" width="50%"></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="/">Home</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
						<div class="home-donate donate-btn-1 text-uppercase">
							<a href="{{Route('login')}}">Login</a>
						</div>
						<div id="sb-search" class="sb-search ">
							    <form action="#" method="post">
								   <input class="sb-search-input " onkeyup="buttonUp();"
									placeholder="Enter Your Search Word..." type="search" value="" name="search"
									id="search">
								 <input class="sb-search-submit" type="submit" value="">
								 <span class="sb-icon-search"><i class="ti-search"></i></span>
								    </form>
						</div>
					</nav>
					<div class="wrap">
						<!--MENU-->
						<div id="main-menu">
							<div class="menu-btn">
								<div class="menu-btn-line menu-btn-line-1"></div>
								<div class="menu-btn-line menu-btn-line-2"></div>
								<div class="menu-btn-line menu-btn-line-3"></div>
							</div>
							<div class="moduletable_menu">

								<ul class="nav menu">
									<li><a href="home-1.html">Home</a></li>
									<li><a href="about-us.html">About</a></li>
									<li><a href="blog-archive.html">Blog</a></li>
									<li><a href="blog-single.html">Blog Single</a></li>
									<li><a href="cause.html">Cause</a></li>
									<li><a href="cause-single.html">Cause Details</a></li>
									<li><a href="event.html">Event</a></li>
									<li><a href="event-single.html">Event Single</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="contact.html">Contacts</a></li>
								</ul>
							</div>
						</div>
						<!-- END menu -->
					</div>
					<!--/wrap  -->
				</div>
				<!--/row  -->
			</div>
			<!--/container  -->
		</div>
		<!--/menu-bar  -->
	</header>
	<!-- End of Header
	============================================= -->

	<!-- Start of Count Down
	============================================= -->
	<section id="countdown-area" class="countdown-section">
		<div class="container">
			<div class="row section-content">
				<div class="countdown-section-content">
					<div class="row">
						<div class="col-md-6">
							<div class="left-countdown colmd6">
								<div class="countdown-text-head  mt40 pb70">
									<div class="countdown-head">
										<h2 class="black">Detail Penerimaan</h2>
									</div>
									<div class="countdown-text mt25">
										{!! $berita->isi !!}
										<table class="text-left">
											<tr>
												<td width="50%">Posisi</td>
												<td>: @foreach(collect($berita->lowongan->posisi) as $p)
													{{$p}},
													@endforeach</td>
											</tr>
											<tr>
												<td>Tanggal Pendaftaran</td>
												<td>:
													{{carbon\carbon::parse($berita->lowongan->tgl_mulai)->translatedFormat('d F Y')}}
													-
													{{carbon\carbon::parse($berita->lowongan->tgl_selesai)->translatedFormat('d F Y')}}
												</td>
											</tr>
											<tr>
												<td>Pendidikan Minimal</td>
												<td>: {{$berita->lowongan->pendidikan_terakhir->nama}}</td>
											</tr>
											<tr>
												<td>Status</td>
												<td>:
													@if($now > $berita->lowongan->tgl_selesai)
													<i class="text-danger"> Sudah ditutup</i>
													@elseif($now < $berita->lowongan->tgl_mulai)
														<i class="text-info"> Belum Berlangsung</i>
														@else
														<i class="text-success"> Sedang Berlangsung</i>
														@endif
												</td>
											</tr>
											<tr>
												<td>Tanggal Tes</td>
												<td>: @if($berita->lowongan->uji_kompetensi->isNotEmpty())
													{{carbon\carbon::parse($berita->lowongan->uji_kompetensi->first()->tgl_ujian)->translatedFormat('d F Y')}}
													@else
													Tanggal Belum Ditentukan
													@endif
												</td>
											</tr>
											<tr>
												<td>Keterangan</td>
												<td> {!! $berita->lowongan->keterangan !!}
												</td>
											</tr>
										</table>
										<br>
										@if($now >= $berita->lowongan->tgl_mulai && $now <= $berita->
											lowongan->tgl_selesai)
											<div class="donate-btn text-uppercase">
												<a href="{{Route('lowonganInput',['uuid'=>$berita->lowongan->uuid])}}">Input
													Lamaran</a>
											</div>
											@endif
									</div>
								</div>
							</div>
						</div>
						<!-- /col-md-6 -->
						<div class="col-md-6">
							<div class="count-right-img pl30 colmd6 text-center">
								<img src="{{asset('images/berita/'. $berita->foto)}}" alt="image" width="400px"
									height="100px">
							</div>
						</div>
					</div>
				</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</section>
	<!-- End of Count Down
	============================================= -->


	<!-- Start of Latest news
	============================================= -->
	<section id="latest-news" class="latest-news-section">
		<div class="container">
			<div class="row section-content">
				<div class="latest-news-content">
					<div class="row">
						<div class="">
							<h2 class="text-center">Informasi Kelulusan</h2> <br>
							<table class="table table-bordered">
								<thead>
									<th>No</th>
									<th>Nama</th>
									<th>Nilai Uji Kompetensi</th>
									<th>Nilai Wawancara</th>
								</thead>
								<tbody>
									@if(isset($ujiWawancara->uji_wawancara_peserta))
									@foreach($ujiWawancara->uji_wawancara_peserta as $d)
									<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$d->peserta->user->name}}</td>
									<td>{{$d->peserta->uji_kompetensi_peserta->nilai}}</td>
									<td>{{$d->nilai}}</td>
									</tr>
									@endforeach
									@else
									<tr>
									<td>1</td>
									<td>Belum ada data</td>
									<td>Belum ada data</td>
									<td>Belum ada data</td>
									</tr>
									@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- End of Latest news
	============================================= -->


	<!-- Start of footer section
	============================================= -->
	<footer id="footer-section" class="footer-style">
		<div class="footer-overlay">
			<div class="footer-contact-content-1">
				<div class="container">
					<div class="row">
						<div class="footer-contact-content">
							<div class="row">
								<div class="col-sm-6 col-xs-6">
									<div class="footer-contact-info">
										<ul class="footer-contact-info-list">
											<li><span class="pull-left icon ti-comments-smiley"></span><span
													class="info-details text-uppercase">call us</span>
												<p>(0511) 3255551</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="footer-contact-info">
										<ul class="footer-contact-info-list">
											<li><span class="pull-left icon ti-comments"></span><span
													class="info-details text-uppercase">E-mail</span>
												<p>corporate@telkomakses.co.id</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /footer-contact-1 -->

			<div class="footer-menu">
				<div class="container">
					<div class="row">
						<div class="footer-menu-content">
							<div class="copy-right text-center">
								<p>© 2020</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End of footer section
	============================================= -->


	<!-- js -->
	<script type="text/javascript" src="{{asset('depan/assets/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/waypoints.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/jquery.counterup.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/countdown.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/parallax.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/assets/js/circle-progress.js')}}"></script>


	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="{{asset('depan/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('depan/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems !
    The following part can be removed on Server for On Demand Loading) -->

	<script type="text/javascript" src="{{asset('depan/rev-slider/js/revolution.extension.actions.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('depan/rev-slider/js/revolution.extension.layeranimation.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('depan/rev-slider/js/revolution.extension.navigation.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('delpan/rev-slider/js/revolution.extension.parallax.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('depan/rev-slider/js/revolution.extension.slideanims.min.js')}}">
	</script>
	<script type="text/javascript" src="{{asset('depan/rev-slider/js/revolution.extension.video.min.js')}}"></script>



	<script type="text/javascript" src="{{asset('depan/assets/js/function.js')}}"></script>

	<script>
		var tpj=jQuery;

    	var revapi2;
    	tpj(document).ready(function() {
    		if(tpj("#rev_slider_2_1").revolution == undefined){
    			revslider_showDoubleJqueryError("#rev_slider_2_1");
    		}else{
    			revapi2 = tpj("#rev_slider_2_1").show().revolution({
    				sliderType:"standard",
    				jsFileLocation:"js/",
    				sliderLayout:"fullscreen",
    				dottedOverlay:"none",
    				delay:9000,
    				navigation: {
    					keyboardNavigation:"off",
    					keyboard_direction: "horizontal",
    					mouseScrollNavigation:"off",
    					mouseScrollReverse:"default",
    					onHoverStop:"off",
    					arrows: {
    						style:"hades",
    						enable:true,
    						hide_onmobile:false,
    						hide_onleave:false,
    						tmp:'<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div></div>',
    						left: {
    							h_align:"left",
    							v_align:"center",
    							h_offset:20,
    							v_offset:0
    						},
    						right: {
    							h_align:"right",
    							v_align:"center",
    							h_offset:20,
    							v_offset:0
    						}
    					}
    				},
    				visibilityLevels:[1240,1024,778,480],
    				gridwidth:1240,
    				gridheight:868,
    				lazyType:"none",
    				shadow:0,
    				spinner:"spinner0",
    				stopLoop:"off",
    				stopAfterLoops:-1,
    				stopAtSlide:-1,
    				shuffle:"off",
    				autoHeight:"off",
    				fullScreenAutoWidth:"off",
    				fullScreenAlignForce:"off",
    				fullScreenOffsetContainer: "",
    				fullScreenOffset: "",
    				disableProgressBar:"on",
    				hideThumbsOnMobile:"off",
    				hideSliderAtLimit:0,
    				hideCaptionAtLimit:0,
    				hideAllCaptionAtLilmit:0,
    				debugMode:false,
    				fallbacks: {
    					simplifyAll:"off",
    					nextSlideOnWindowFocus:"off",
    					disableFocusListener:false,
    				}
    			});
    		}
    	});	/*ready*/
	</script>

</body>

</html>