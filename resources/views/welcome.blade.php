<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hengle</title>
    <link rel="icon" type="image/png" href="{{url('public/images/favicon.png')}}">
    <link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/css/font style.css')}}">
    <style>
        h2 {
    font-size: 51px;
}
h2.text-white {
    margin-right: -43px;
}
.header {
    margin-top: 87px;
    margin-left: -96px;
}
p.text-white {
    font-size: 15px;
    margin-top: 70px
}
span.text-white {
    font-size: 23px;
}
img {
    height: 118px;
    margin-top: 74px;
}
button.btn.btn-sm.btn-outline-light {
    margin-bottom: -62px;
}
    </style>
</head>

<body style="height: 100vh;">
    <div class="body">
        <div class="mt-auto d-flex justify-content-center align-items-center" style="height: 30vh;">
           <img src="{{url('public/assets/images/hengle.png')}}">
        </div>
        <div class="mt-auto d-flex justify-content-center align-items-end" style="height: 20vh;">
          <h3 class="text-white">Hi, $username</h3>
        </div>
        <div class="mt-auto d-flex justify-content-center align-items-end" style="height: 10vh;">
            <span class="text-white">Unveiling the pub's social magic<br>Hengle connect Heart with a click</span> 
    </div>
    <div class="mt-auto d-flex justify-content-center align-items-end" style="height: 15vh;">
       <a href="{{url('/home')}}">
        <button type="submit" class="btn btn-sm btn-outline-light" style="height: 30px;">
            I'm In
        </button>
       </a>
     
    </div>
</div>
    <script src="{{url('public/js folder/bootstrap.min.js')}}"></script>
</body>

</html>