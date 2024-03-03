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
								<li><img src="{{asset('depan/assets/img/inbox.png')}}"
										alt="image">corporate@telkomakses.co.id</li>
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
					</div>
				</div>
			</div>
		</div>
		<div class="menu-bar">
			<div class="container">
				<div class="row">
					<nav class="navbar">
						<div class="navbar-header">
							<a class="navbar-brand" href="/"><img src="{{asset('depan/assets/img/logo.png')}}"
									alt="image" width="50%"></a>
						</div>
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
									<li><a href="/">Home</a></li>
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


	<!-- Start of Latest news
	============================================= -->
	<section id="latest-news" class="latest-news-section">
		<div class="container">
			<div class="row section-content">
				<div class="latest-news-content">
					<h2> Input Lamaran</h2>
					<hr>
					<div class="row">
						<form action="{{route('lowonganInputStore')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<input type="hidden" class="form-control" id="lowongan_id" placeholder="lowongan_id"
								name="lowongan_id" value="{{$lowongan->id}}" required>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">NIK</label>
								<input type="number" class="form-control" id="NIK" placeholder="NIK"
									value="{{old('NIK')}}" name="NIK" pattern="/^-?\d+\.?\d*$/"
									onKeyPress="if(this.value.length==16) return false;" required />
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Nama</label>
								<input type="text" class="form-control" id="nama" placeholder="nama"
									value="{{old('name')}}" name="name" required>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<div class="custom-control custom-radio">
										<input type="radio" value="1" id="customRadio1" name="jk"
											class="custom-control-input" required
											{{(old('jk') == '1') ? 'checked' : ''}}>
										<label class="custom-control-label" for="customRadio1">Laki-laki</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="custom-control custom-radio">
										<input type="radio" value="2" id="customRadio1" name="jk"
											class="custom-control-input" {{(old('jk') == '2') ? 'checked' : ''}}>
										<label class="custom-control-label" for="customRadio1">Perempuan</label>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Tempat Lahir</label>
										<input type="text" class="form-control" id="tempat_lahir"
											placeholder="tempat_lahir" name="tempat_lahir" required
											value="{{old('tempat_lahir')}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Tanggal Lahir</label>
										<input type="date" class="form-control" id="tanggal_lahir"
											placeholder="tanggal_lahir" name="tgl_lahir" required
											value="{{old('tgl_lahir')}}">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Agama</label>
								<select name="agama" id="agama" class="form-control" required>
									<option value="">-- Pilih Agama --</option>
									<option value="Islam" {{(old('agama') == 'Islam') ? 'selected' : ''}}> Islam
									</option>
									<option value="Kristen Protestan"
										{{(old('agama') == 'Kristen Protestan') ? 'selected' : ''}}>Kristen
										Protestan</option>
									<option value="Kristen Katolik"
										{{(old('agama') == 'Kristen Katolik') ? 'selected' : ''}}>
										Kristen Katolik</option>
									<option value="Hindu" {{(old('agama') == 'Hindu') ? 'selected' : ''}}>Hindu
									</option>
									<option value="Budha" {{(old('agama') == 'Budha') ? 'selected' : ''}}>Budha
									</option>
									<option value="Konghuchu" {{(old('agama') == 'Konghuchu') ? 'selected' : ''}}>
										Konghuchu</option>
									<option value="Lain-lain" {{(old('agama') == 'Lain-lain') ? 'selected' : ''}}>
										Lain-lain</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Warga Negara</label>
								<select name="warga_negara" id="agama" class="form-control" required>
									<option value="Warga Negara Indonesia"
										{{(old('warga_negara') == 'Warga Negara Indonesia') ? 'checked' : ''}}>Warga
										Negara Indonesia
									</option>
									<option value="Warga Negara Asing"
										{{(old('warga_negara') == 'Warga Negara Asing') ? 'checked' : ''}}>Warga Negara
										Asing
									</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Alamat Sekarang</label>
								<textarea name="alamat_sekarang" id="alamat_sekarang" class="form-control"
									required>{{old('alamat_sekarang')}}</textarea>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Alamat KTP</label>
								<textarea name="alamat_ktp" id="alamat_ktp" class="form-control"
									required>{{old('alamat_ktp')}}</textarea>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Telepon Rumah</label>
										<input type="number" class="form-control" id="telepon_rumah"
											placeholder="telepon_rumah" name="tlp_rumah" pattern="/^-?\d+\.?\d*$/"
											onKeyPress="if(this.value.length==14) return false;"
											value="{{old('tlp_rumah')}}" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Nomor Hp</label>
										<input type="number" class="form-control" id="no_hp" value="{{old('tlp_hp')}}"
											placeholder="no_hp" name="tlp_hp" pattern="/^-?\d+\.?\d*$/"
											onKeyPress="if(this.value.length==14) return false;" required />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Hobi</label>
								<input type="text" class="form-control" id="hobi" placeholder="hobi"
									value="{{old('hobi')}}" name="hobi" required>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Transportasi Sehari hari</label>
								<select name="transportasi" id="agama" class="form-control " required>
									<option value="Roda 2" {{(old('transportasi') == 'Roda 2') ? 'selected' : ''}}>Roda
										2
									</option>
									<option value="Roda 4" {{(old('transportasi') == 'Roda 2') ? 'selected' : ''}}>Roda
										4
									</option>
									<option value="Angkutan Umum"
										{{(old('transportasi') == 'Angkutan Umum') ? 'selected' : ''}}>Angkutan
										Umum</option>
									<option value="Sepeda" {{(old('transportasi') == 'Sepeda') ? 'selected' : ''}}>
										Sepeda
									</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">E-mail</label>
								<input type="text" class="form-control" id="email" value="{{old('email')}}"
									placeholder="email" name="email" required>
							</div>
							<div class="form-group">
								<label for="exampleDropdownFormEmail1">Pas Foto</label>
								<input type="file" class="form-control" id="foto" name="foto" required>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Pendidikan Terakhir</label>
										<select name="ijazah_terakhir" class="form-control" required>
											@foreach($pendidikan as $d)
											<option value="{{ $d->id }}"
												{{ old('ijazah_terakhir') == $d->id ? 'selected' : ''  }}>{{ $d->nama }}
											</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Scan Ijazah</label>
										<input type="file" class="form-control" id="ijazah" name="doc_ijazah" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Tahun Lulus</label>
										<input type="number" value="{{old('tahun_lulus')}}" class="form-control"
											id="tahun_lulus" name="tahun_lulus" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Nama Sekolah / Universitas</label>
										<input type="text" class="form-control" id="ipk" value="{{old('lembaga')}}"
											name="lembaga" placeholder="Nama Lembaga Pendidikan" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Jurusan</label>
										<input type="text" class="form-control" value="{{old('jurusan')}}" id="jurusan"
											name="jurusan" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">IPK / Rata-Rata UN</label>
										<input type="text" class="form-control" value="{{old('ipk')}}" id="ipk"
											name="ipk" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Scan Ktp</label>
										<input type="file" class="form-control" id="ktp" name="foto_ktp" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">Raport / Transkip Nilai</label>
										<input type="file" class="form-control" id="transkip" name="doc_transkip"
											required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleDropdownFormEmail1">NPWP</label>
										<input type="file" class="form-control" id="npwp" name="doc_npwp">
										<small class="text-primary">Isi jika ada </small>
									</div>
								</div>
							</div>
							<br>
							<div class="text-right">
								<button type="submit" class="btn btn-danger "><i class="ti-location-arrow"></i> Kirim
									Lamaran</button>
							</div>
						</form>
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


	@include('sweetalert::alert')
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

</body>

</html>