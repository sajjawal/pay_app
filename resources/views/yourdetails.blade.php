<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}"/>
    <title>Hengel</title>
    <link rel="icon" type="image/png" href="{{url('public/images/favicon.png')}}">     
    <link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/css/font style.css')}}">
    <link rel="stylesheet" href="{{url('public/css/custom.css')}}">
     <style>
        .maininput {
    margin-top: 72px;
}

    </style>
</head>

<body style="height: 100%;">
    
    <div class="body" style="height: 100%;">
        <div class="container">
        <form action="{{url('/userdata')}}" method="post">
            @csrf
                <h2 style="color: white;">Your Details</h2>
                <P class="text-white">please give us your details for matching better persons  </P>
            <div>
                <input type="text" class="maininput text-white" name="name" placeholder="Name" required>
                <input type="gender" class="maininput text-white" name="gender" placeholder="Gender" required>
                <input type="number" class="maininput text-white" name="age" placeholder="Age" required>
                <input type="location" class="maininput text-white" name="location" placeholder="Location" required>
              </div>
           
            <div class="mt-auto d-flex justify-content-center align-items-end" style="height: 100%;">
                    <button type="submit" class="btn btn-sm btn-outline-light" style="margin-top:214px">
                        Next
                    </button>
            </div>
        </form>
        </div>
       
    </div>
    <script src="{{url('public/js folder/bootstrap.min.js')}}"></script>
</body>
</html>