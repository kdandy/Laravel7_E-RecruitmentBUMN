@extends('layouts.main')

@section('content')

 <!-- Main Content -->
 <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
				<!-- Title -->
				<div class="hk-pg-header align-items-top">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Beranda Admin</h2>
						<p>Aplikasi Rekrutmen Pegawai PT.Telkom Akses<a href="#"> Learn more.</a></p>
					</div>
					<div class="d-flex">
						<a href="{{Route('depan')}}" class="btn btn-sm btn-danger btn-wth-icon icon-wthot-bg mb-15"><span class="icon-label"><i class="fa fa-home"></i> </span><span class="btn-text">Halaman Depan </span></a>
					</div>
				</div>
				<!-- /Title -->
				<!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						
						<div class="hk-row">
							<div class="col-lg-4">
								<div class="card overflow-hide border-0">
									<div class="card-body pa-0">
										<div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
											<div class="fadeOut item img-background overlay-wrap" style="background-image:url(admin/dist/img/slide1.jpg);">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p class="text-justify">sebuah aplikasi yang mampu menunjang proses perekrutan karyawan dimulai dari proses pendaftaran, ujian yang memungkinkan untuk dilaksanakan secara online, informasi hasil verifikasi dan ujian serta  berbagai tahapan yang telah disusun oleh PT. Telkom Akses Banjarmasin</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-pink rounded-circle"><span class="initial-wrap"><span>TA</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">PT. Telkom Akses </span>
																<span class="d-block font-12">Banjarmasin</span>
															</div>
														</div>
													</div>
												</div>
												<div class="bg-overlay bg-trans-dark-50"></div>
											</div>
											<div class="fadeOut item img-background overlay-wrap" style="background-image:url(dist/img/slide2.jpg);">
												<div class="position-relative z-index-2 pa-20">
													<div class="position-relative text-white mnh-225p">
														<p class="text-justify">sehingga perekrutan dapat dilaksanakan secara efektif dan efisien , aplikasi ini juga akan memudahkan perusahaan dalam melakukan evaluasi terhadap proses perekrutan serta mengurangi biaya perekrutan, biaya kerja dan beban administrasi</p>
														<div class="media position-absolute b-0 l-0 align-items-center">
															<div class="media-img-wrap d-flex mr-15">
																<div class="avatar avatar-sm">
																	<span class="avatar-text avatar-text-inv-pink rounded-circle"><span class="initial-wrap"><span>TA</span></span></span>
																</div>
															</div>
															<div class="media-body">
																<span class="d-block font-14 font-weight-500">PT. Telkom Akses </span>
																<span class="d-block font-12">Banjarmasin</span>
															</div>
														</div>
													</div>
												</div>
												<div class="bg-overlay bg-trans-dark-50"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="row">
								<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Posisi</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">{{$posisi}}</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-home"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Lowongan</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">{{$lowongan}}</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-file-text"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Pelamar</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">{{$pelamar}}</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-users"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Soal</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">{{$soal}}</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-question-circle"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Uji Kompetensi</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">{{$ujiKompetensi}}</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-check-circle"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="card card-sm">
											<div class="card-body">
												<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Peserta Lusus</span>
												<div class="d-flex align-items-center justify-content-between position-relative">
													<div>
														<span class="d-block">
															<span class="display-5 font-weight-400 text-dark">{{$lulus}}</span>
														</span>
													</div>
													<div class="position-absolute r-0">
														<h2><i class="fa fa-check-user"></i></h2>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
									<!-- <div class="card">
										<div class="card-header">
											<p>Lowongan yang sedang berjalan</p>
										</div>
										<div class="card-body">
										<div class="table-wrap">
											<div class="table-responsive">
												<table class="table table-bordered table-hover mb-0">
													<thead>
														<tr>
															<th>No</th>
															<th>Pendaftaran</th>
															<th>Tanggal</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>$2000</td>
															<td>
																American Express
															</td>
															<td>
																22/10/2018
															</td>
															<td><span class="badge badge-soft-primary">On track</span></td>
														</tr>
														<tr>
															<td>$1600</td>
															<td>
																Exxon Mobil
															</td>
															<td>
																15/09/2018
															</td>
															<td><span class="badge badge-soft-primary">On track</span></td>
														</tr>
														<tr>
															<td>$1265</td>
															<td>
																Big Blackship
															</td>
															<td>
																30/08/2018
															</td>
															<td><span class="badge badge-soft-danger">Behind</span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										</div>
									</div> -->
							</div>
						</div>
					</div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
			
            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->
@endsection
