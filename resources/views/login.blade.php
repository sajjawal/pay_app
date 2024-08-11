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
      
    </style>
</head>

<body style="height: 100vh;">

 <!--*******************
        Preloader start
    ********************-->
   
    <!--*******************
        Preloader end
    ********************-->

    <div class="body">
        <form action="{{url('/checkmoblie')}}" method="post">
            @csrf
            <div class="container">
                <h2 style="color: white;">Login/Register</h2>
                <P class="text-white">Enter Your mobile number</P>
                <input type="number" class="maininput text-white" name="number" pattern="[0-9]{10}" maxlength="10" required="required" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            </div>
            <div class="mt-auto d-flex justify-content-center align-items-end" style="height: 60vh;">
                <button type="submit" class="btn btn-sm btn-outline-light" style="height: 30px;">
                    Next
                </button>
            </div>
        </form>
    </div>
    <script src="{{url('public/js folder/bootstrap.min.js')}}"></script>
</body>

</html>