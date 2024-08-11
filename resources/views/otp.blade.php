<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hengle</title>
    <link rel="icon" type="image/png" href="{{url('public/images/favicon.png')}}">
    <link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/css/font style.css')}}">
</head>

<body style="height: 100vh;">
    <div class="body">
        <form action="{{url('verify')}}" method="post">
            @csrf
          
            <div class="container">
                <h2 style="color: white;">OTP Verification</h2>
                <P class="text-white">6 digit code has been sent to </P>
                <input type="number" name="otp_match" class="maininput text-white">
            </div>
            <div class="mt-auto d-flex justify-content-center align-items-end" style="height: 60vh;">
            
                <button type="submit" class="btn btn-sm btn-outline-light" style="height: 30px;">
                    Next
                </button>
             </div>
         
        </form>
    </div>
    <script src="{{url('public/js folder/bootstrap.min.js')}}"></script></body>

</html>