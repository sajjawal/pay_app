<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hengel</title>
    <link rel="icon" type="image/png" href="{{url('public/images/favicon.png')}}">     
    <link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/css/font style.css')}}">
    <link rel="stylesheet" href="{{url('public/css/style.css')}}">
    <link rel="stylesheet" href="{{url('public/css/custom.css')}}">
    <style>
        .maininput {
    margin-top: 72px;
}
h2 {
    font-size: 42px;
}
h2 {
    margin-top: 77px;
}
    </style>
</head>

<body style="height: 100%;">
    <div class="body" style="height: 100%;">
        <form action="{{url('/udata')}}" method="post">
            @csrf
            <div class="container">
                <h2 style="color: white;">How about you?</h2>
                <P class="text-white">please give us your details for matching better persons  </P>
            <div>
                <input type="text" class="maininput text-white" name="height" placeholder="Height" required>
                <input type="text" class="maininput text-white" name="occupation" placeholder="Occupation" required>
                <input type="text" class="maininput text-white" name="relationship" placeholder="Relationship Status" required>
                <input type="text" class="maininput text-white" name="smoking" placeholder="Smoking and drinking habits" required>
              </div>
            </div>
            <div class="mt-auto d-flex justify-content-center align-items-end" style="height: 100%;">
                <button type="submit" class="btn btn-sm btn-outline-light" style="margin-top: 214px">
                    Next
                </button>
            </div>
        </form>
    </div>
    <script src="{{url('public/js folder/bootstrap.min.js')}}"></script></body>

</html>