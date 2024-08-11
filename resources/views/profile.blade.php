<html>
<head>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css"
		href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="profile.css"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{url('public/css/bootstrap profile.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{url('public/update.css')}}">
	<style>
.container{
	margin-top: 12px;
}
.panel-heading {
    text-align: center;
}
	.col-sm-offset-2.col-sm-10 {
    text-align: center;

}
</style>
@php
	$profile = "";
    $name = "";
	$loca_tion = "";
	$phone = "";
	if(isset($pfileupdate)){
	$profile = $pfileupdate->profile;
	$name = $pfileupdate->name;
	$loca_tion = $pfileupdate->location;
	$phone = $pfileupdate->number;
	}
@endphp
</head>

<body>
	<div class="container">
		<div class=".col-xs-4 .col-md-offset-2">
			<div class="panel panel-default panel-info Profile">
				<div class="panel-heading"> My Profile </div>
				<div class="panel-body">
					<div class="form-horizontal">
						<form action="{{url('/profileupdate')}}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label class="col-sm-2 control-label"></label>
								<div class="col-sm-4">
									<div class="picture-container">
										<div class="picture">
											<img src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg"
												class="picture-src" id="wizardPicturePreview" title="">
											<input type="file" id="wizard-picture" name="filename" required="required" value="{{$profile}}">
										</div>
										<h6>Choose Picture</h6>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">User Name</label>
								<div class="col-sm-4">
									<input class="form-control" type="text" name="lastName" placeholder="Enter your user name"
										ng-model="me.lastName" required="required" value="{{$name}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Location</label>
								<div class="col-sm-4">
									<input class="form-control" type="text" name="location" placeholder="Location"
										ng-model="me.email" required="required" value="{{$loca_tion}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Phone</label>
								<div class="col-sm-4">
									<input class="form-control" type="number" name="phone" placeholder="xxx-xxx-xxxx"
										ng-model="me.email" pattern="[0-9]{10}" maxlength="10" required="required" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="{{$phone}}">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 ">
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
							</div>
						</form>
					</div> <!-- end form-horizontal -->
				</div> <!-- end panel-body -->

			</div> <!-- end panel -->


		</div> <!-- end size -->
	</div> <!-- end container-fluid -->

	<script src="{{url('public/data/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{url('public/update.js')}}"></script>
	<script src="{{url('public/data/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>