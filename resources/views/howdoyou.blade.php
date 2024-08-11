<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hengel</title>
    <link rel="icon" type="image/png" href="{{url('public/images/favicon.png')}}">
    <link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/css/font style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public/css/custom.css')}}">
    <link rel="stylesheet" href="{{url('public/css/howdoyou.css')}}">

        <style>
.maininput {
    margin-top: 31px;
}

.drag-file-area {
    width: 100%;
    border-radius: 13px;
}

.drag-file-area {
    height: 83%;
}

input.default-file-input {
    display: none;
}
.upload {
margin-top: 85px;
}
.col-6 {
    height: 250px;
}
form.form-container {
    height: 150vh;
}
h2.dynamic-message.text-white {
    margin-top: 51px;
}
.boby{
    height: 117%;
}
img {
    margin-top: 51px;
    margin-left: -30px;
}
h2 {
    font-size: 35px;
}
p.text-white {
    font-size: 13px;
}
button.btn.btn-sm.btn-outline-light {
    margin: 83px 0px;
}
        </style>
</head>

<body style="height: 100%;">
    <form action="{{url('/allpicture')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="body" style="padding: 12px;padding-top: 25px;">
            <div class="container">
          
                <div class="upload">
                    <h2 style="color: white;">How do you look ?</h2>
                    <p class="text-white d-flex justify-content-start">if i can know how you look i can suggest better profiles</p>
                    <div class="" style="margin-top: 75PX;">
                        <div class="row ">
                            <div class="col-6">
                                <div class="drag-file-area">
                                    <img src="https://essaneinfotech.com/hengleapp/public/assets/images/Upload your photos.png">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="drag-file-area">
                                    <label class="label d-flex justify-content-center" style="margin-top: 50px;">
                                        <span class="browse-files">
                                            <input type="file" name="filename1" class="default-file-input">
                                            <span class="browse-files-text">+</span>
                                        </span>
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-6">
                                <div class="drag-file-area">
                                    <label class="label d-flex justify-content-center" style="margin-top: 50px;">
                                        <span class="browse-files">
                                            <input type="file" name="filename2" class="default-file-input">
                                            <span class="browse-files-text">+</span>
                                        </span>
                                    </label>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="drag-file-area">
                                    <label class="label d-flex justify-content-center" style="margin-top: 50px;">
                                        <span class="browse-files">
                                            <input type="file" name="filename3" class="default-file-input">
                                            <span class="browse-files-text">+</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-sm btn-outline-light" style="height: 30px;" href="https://essaneinfotech.com/hengleapp">
                            Next
                        </button>
                    </div>
                </div>
            
        </div>
    </div>
</form>
    <script src="{{url('public/js folder/bootstrap.min.js')}}"></script>
    <script src="{{url('public/js folder/howdo.js')}}"></script>

</body>

</html>