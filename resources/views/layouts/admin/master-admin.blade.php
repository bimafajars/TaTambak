<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Tambak Udang Jaya</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('Atlantis/assets/img/icon.ico') }}" type="image/x-icon"/>

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
				
				<a href="index.html" class="logo">
					<img src="{{ asset('Atlantis/assets/img/logo.svg')}}" alt="Tambak Udang" class="navbar-brand">
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
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														New user registered
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
												<div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets/img/profile2.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
												<div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li>
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
												<h4>Hizrian</h4>
												<p class="text-muted">{{session('email')}}</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
									
										<a class="dropdown-item" href="{{route('proses.logout')}}">Logout</a>
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
									{{session('nama')}}
									<span class="user-level">Admin</span>
	
								</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item {{Request::segment(2) === null ? 'active' : null }}" >
							<a href="{{route('home.admin')}}">
								<i class="fas fa-layer-group"></i>
								<p>Dashboard</p>
							</a>
						</li>																		
						<li class="nav-item {{request()->is('admin/monitoring/*/*') ? 'active' : '' }}">
							<a data-toggle="collapse" {{request()->is('admin/monitoring/*/*') ? 'aria-expanded="true"' : '' }} href="#submenu">
								<i class="far fa-chart-bar"></i>
								<p>Monitoring</p>
								<span class="caret"></span>
							</a>
							<div class="collapse {{request()->is('admin/monitoring/*/*') ? 'show' : '' }}" id="submenu">
								<ul class="nav nav-collapse">
									<li>
										<a data-toggle="collapse" {{request()->is('admin/monitoring/grafik/*') ? 'aria-expanded="true"' : '' }} href="#subnav1">
											<span class="sub-item">Grafik</span>
											<span class="caret"></span>
										</a>
										<div class="collapse {{request()->is('admin/monitoring/grafik/*') ? 'show' : '' }}" id="subnav1">
											<ul class="nav nav-collapse subnav">
												<li class="{{request()->is('admin/monitoring/grafik/suhu') ? 'active' : '' }}">
													<a href="{{route('monitoring.grafik.suhu')}}">
														<span class="sub-item">Suhu</span>
													</a>
												</li>
												<li>
												<li class="{{request()->is('admin/monitoring/grafik/air') ? 'active' : '' }} ">
												<a href="{{route('monitoring.grafik.air')}}">
														<span class="sub-item">Air</span>
													</a>
												</li>
												<li class="{{request()->is('admin/monitoring/grafik/ph') ? 'active' : '' }}" >
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