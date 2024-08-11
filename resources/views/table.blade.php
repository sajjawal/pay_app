<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 May 2023 12:15:23 GMT -->

<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab">
	<meta name="robots" content="">
	<meta name="keywords"
		content="admin, admin dashboard, admin template, analytics, bootstrap, bootstrap 5, bootstrap 5 admin template, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app, frontend, shop, shop cart, blog">
	<meta name="description"
		content="Discover MotaAdmin - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. MotaAdmin provides advanced features and an easy-to-use interface for creating a top-quality website with frontend">
	<meta property="og:title" content="MotaAdmin : Admin & Dashboard Template + FrontEnd">
	<meta property="og:description"
		content="Discover MotaAdmin - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. MotaAdmin provides advanced features and an easy-to-use interface for creating a top-quality website with frontend">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- PAGE TITLE HERE -->
	<title>MotaAdmin</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css">

	<!-- Datatable -->
	<link href="{{url('public/data')}}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link href="{{url('public/data')}}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="{{url('public/data')}}/css/style.css" rel="stylesheet">
	<!-- Material color picker -->
	<link
		href="{{url('public/data')}}/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
		rel="stylesheet">
	<!-- Pick date -->
	<!-- Custom Stylesheet -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		/* label {
    display: none;
} */
		div#example2_filter {
			display: none;
		}
	
	</style>
</head>

<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->


	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">
		<!--**********************************
            Content body start
        ***********************************-->

		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">All Request</h4>
							<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
								data-bs-target="#basicModal">Post Reuqest</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="example2" class="display" style="width:100%">
									<thead>
										<tr>
											<th>Location</th>
											<th>Time & Date</th>
											<th>Status</th>

										</tr>
									</thead>
									<tbody>
										@foreach ($userlocation as $item)
										<tr>
											<td><a href="{{url('/messages')}}">{{$item->location}}</a></td>
											<td>{{$item->date}}</td>
											<td>
												@if($item->status == 0)
													<span class="badge badge-danger">Pending</span>
												@else
												<span class="badge badge-success">Connected</span>
												@endif
											</td>
										</tr>

										@endforeach
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!--**********************************
            Content body end
        ***********************************-->



	</div>
	<!-- Modal -->
	<div class="modal fade" id="basicModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Post Reuqest</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12">
							<form action="{{url('addrequest')}}" method="post">
								@csrf
								<label>Location</label>
							<select class="default-select wide form-control" name="location" id="validationCustom05" required="required">
								@php
									$users = DB::table('location')->get();
								@endphp
								@foreach($users as $user)
									<option value="{{ $user->locationaddress }}">{{$user->locationaddress }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-xl-6 col-xxl-12 col-md-12 mt-3">
							<label>Date & Time</label>
							<input type="text" name="date" id="date-format" class="form-control"
								placeholder="Saturday 24 June 2017 - 21:44" required="required">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">submit</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<!--**********************************
        Main wrapper end
    ***********************************-->

		<!--**********************************
        Scripts
    ***********************************-->
		<!-- Required vendors -->
		<script src="{{url('public/data')}}/vendor/global/global.min.js"></script>
		<script src="{{url('public/data')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
		<script src="{{url('public/data')}}/vendor/chart-js/chart.bundle.min.js"></script>
		<script src="{{url('public/data')}}/js/custom.min.js"></script>
		<script src="{{url('public/data')}}/js/deznav-init.js"></script>
		<!-- Apex Chart -->
		<script src="{{url('public/data')}}/vendor/apexchart/apexchart.js"></script>
		<!-- Datatable -->
		<script src="{{url('public/data')}}/vendor/datatables/js/jquery.dataTables.min.js"></script>
		<script src="{{url('public/data')}}/js/plugins-init/datatables.init.js"></script>


		<!-- momment js is must -->
		<script src="{{url('public/data')}}/vendor/moment/moment.min.js"></script>
		<!-- Material color picker -->
		<script
			src="{{url('public/data')}}/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
		<!-- Material color picker init -->
		<script src="{{url('public/data')}}/js/plugins-init/material-date-picker-init.js"></script>
		<!-- Svganimation scripts -->
		<script src="{{url('public/data')}}/vendor/svganimation/vivus.min.js"></script>
		<script src="{{url('public/data')}}/vendor/svganimation/svg.animation.js"></script>

</body>


<!-- Mirrored from motaadmin.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 May 2023 12:15:27 GMT -->

</html>