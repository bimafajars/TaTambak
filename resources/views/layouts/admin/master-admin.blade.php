<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Tambak Udang Jaya</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('Atlantis/assets/img/logo1.ico') }}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('Atlantis/assets/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["{{ asset('Atlantis/assets/css/fonts.min.css') }}"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('Atlantis/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('Atlantis/assets/css/atlantis.min.css') }}">
	<link rel="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="{{ asset('Atlantis/assets/css/demo.css') }}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="{{route('landingpage.read')}}" class="logo">
					<img src="{{ asset('Atlantis/assets/img/logo.svg')}}" alt="Tambak Udang" class="navbar-brand" style="height: 45px; margin-left: 10px;">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{ asset('Atlantis/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{ asset('Atlantis/assets/img/profile.jpg')}}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>{{Auth::user()->nama}}</h4>
												<p class="text-muted">{{Auth::user()->role}}</p>
											</div>
										</div>
									</li>
									<li>
										<form action="{{route('logout')}}" method="post">
										@csrf
											<button type="submit" class="btn btn-xs btn-secondary btn-sm ml-3">Keluar</button>
										</form>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('Atlantis/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{Auth::user()->nama}}
									<span class="user-level">{{Auth::user()->role}}</span>
	
								</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item {{Request::segment(2) === null ? 'active' : null }}" >
							<a href="{{route('home.read')}}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>																		
						<li class="nav-item {{request()->is('monitoring/*/*') ? 'active' : '' }}">
							<a data-toggle="collapse" {{request()->is('monitoring/*/*') ? 'aria-expanded="true"' : '' }} href="#submenu">
								<i class="far fa-chart-bar"></i>
								<p>Monitoring</p>
								<span class="caret"></span>
							</a>
							<div class="collapse {{request()->is('monitoring/*/*') ? 'show' : '' }}" id="submenu">
								<ul class="nav nav-collapse">
									<li>
										<a data-toggle="collapse" {{request()->is('monitoring/grafik/*') ? 'aria-expanded="true"' : '' }} href="#subnav1">
											<span class="sub-item">Grafik</span>
											<span class="caret"></span>
										</a>
										<div class="collapse {{request()->is('monitoring/grafik/*') ? 'show' : '' }}" id="subnav1">
											<ul class="nav nav-collapse subnav">
												<li class="{{request()->is('monitoring/grafik/suhu') ? 'active' : '' }}">
													<a href="{{route('monitoring.grafik.suhu')}}">
														<span class="sub-item">Suhu</span>
													</a>
												</li>
												<li>
												<li class="{{request()->is('monitoring/grafik/air') ? 'active' : '' }} ">
												<a href="{{route('monitoring.grafik.air')}}">
														<span class="sub-item">Air</span>
													</a>
												</li>
												<li class="{{request()->is('monitoring/grafik/ph') ? 'active' : '' }}" >
														<a href="{{route('monitoring.grafik.ph')}}">
															<span class="sub-item">PH</span>
														</a>
													</li>
											</ul>
										</div>
									</li>
									<li >
										<a data-toggle="collapse" {{request()->is('admin/monitoring/datatabel/*') ? 'aria-expanded="true"' : '' }} href="#subnav2">
											<span class="sub-item">Data Tabel</span>
											<span class="caret"></span>
										</a>
										<div class="collapse {{request()->is('admin/monitoring/datatabel/*') ? 'show' : '' }}" id="subnav2">
											<ul class="nav nav-collapse subnav">
													<li class="{{request()->is('admin/monitoring/datatabel/suhu') ? 'active' : '' }}">
													<a href="{{route('monitoring.tabel.suhu')}}">
														<span class="sub-item">Suhu</span>
													</a>
												</li>
												<li class="{{request()->is('admin/monitoring/datatabel/air') ? 'active' : '' }}">
													<a href="{{route('monitoring.tabel.air')}}">
														<span class="sub-item">Air</span>
													</a>
												</li>
												<li class="{{request()->is('admin/monitoring/datatabel/ph') ? 'active' : '' }}">
														<a href="{{route('monitoring.tabel.ph')}}">
															<span class="sub-item">PH</span>
														</a>
													</li>
											</ul>
										</div>
									</li>
								</ul>
	
								{{--  <ul class="nav nav-collapse">
								
								</ul>  --}}
							</div>
						</li>
						@if (Auth::user()->role == 'Administrator')
						<li class="nav-item" >
							<a href="{{route('images.read')}}">
								<i class="far fa-images"></i>
								<p>Gallery</p>
							</a>
						</li>

						<li class="nav-item" >
							<a href="{{route('user.read')}}">
								<i class="fas fa-user"></i>
								<p>User</p>
							</a>
						</li>
						@endif
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					@yield('content')
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">

					<div class="copyright ml-auto">
						2019, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.instagram.com/bimafajar">Bima</a> </a>
					</div>				
				</div>
			</footer>
		</div>
		

		
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->

	<script src="{{ asset('Atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('Atlantis/assets/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('Atlantis/assets/js/core/bootstrap.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{ asset('Atlantis/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('Atlantis/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset('Atlantis/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


	<!-- Chart JS -->
	<script src="{{ asset('Atlantis/assets/js/plugin/chart.js/chart.min.js') }}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{ asset('Atlantis/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

	<!-- Chart Circle -->
	<script src="{{ asset('Atlantis/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

	<!-- Datatables -->
	<script src="{{ asset('Atlantis/assets/js/plugin/datatables/datatables.min.js') }}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{ asset('Atlantis/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{ asset('Atlantis/assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('Atlantis/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

	<!-- Sweet Alert -->
	{{--  <script src="{{ asset('Atlantis/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>  --}}
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


	<!-- Atlantis JS -->
	<script src="{{ asset('Atlantis/assets/js/atlantis.min.js') }}"></script>

	<script src="{{ asset('Atlantis/assets/js/setting-demo.js') }}"></script>
	<script src="{{ asset('Atlantis/assets/js/demo.js') }}"></script>
	<script type="text/javascript">
	var url = ["{{route('monitoring.tabel.airr')}}","{{route('monitoring.tabel.jsonsuhu')}}","{{route('monitoring.tabel.jsonph')}}"]
	</script>
	@yield('js')



</body>
</html>
