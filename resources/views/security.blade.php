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

<body>
    <div class="body" style="max-width: 411px;">
        <div class="container">
            <div class="mt-auto d-flex justify-content-center align-items-end">
                <h2 class="text-white" style="margin-bottom: 100px;">Safety & Security Terms</h2>
            </div>
            <div class="row">
                <div class="col-3 d-flex justify-content-center">
                    <img src="{{url('public/images/encrypted (1).png')}}" style="max-width: 70px" alt="">
                </div>
                <div class="col-9">
                    <h6 style="color: white;">Data Security</h6>
                    <p style="font-size: 12px; color: #fff">Your data messages are fully encrypted <br> in non
                        decryption tach.</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3 d-flex justify-content-center">
                    <img src="{{url('public/images/encrypted (2).png')}}" style="max-width: 70px" alt="">
                </div>
                <div class="col-9">
                    <h6 style="color: white;">No spam</h6>
                    <p style="font-size: 12px; color: #fff">WE don't spam with your data with calls or<br>emails thats a
                        promise form Hengle.</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3 d-flex justify-content-center">
                    <img src="{{url('public/images/encrypted (3).png')}}" style="max-width: 70px" alt="">
                </div>
                <div class="col-9">
                    <h6 style="color: white;">24Hrs data Obliteration</h6>
                    <p style="font-size: 12px; color: #fff">All your listings data with messages will be<br>completely
                        deleted the same day.</p>
                </div>
            </div>
            <br>  
            <form action="#">     
            <div class="row"style="margin-top: 90px;margin-left: 10px">
                <div class="col-1">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1"required="required">
                </div>
                <div class="col-11" >
                    <p style="font-size: 12px; color: #fff;">By clicking this i accept <b> Privacy pliicy,Terms</b><br><b>& Conditions </b>with <b>data policy</b>.</p>
                </div>
            </div>

            <div class="mt-auto d-flex justify-content-center align-items-end">
                <a type="submit" class="btn btn-sm btn-outline-light" style="height: 30px;" href="{{url('/login')}}">
                    Next
                </a>
            </div>
        </form> 
        </div>
    </div>
    <script src="{{url('public/js folder/bootstrap.min.js')}}"></script>
</body>

</html>