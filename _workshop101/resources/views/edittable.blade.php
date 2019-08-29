<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>


    <!-- CSS Files -->
    <link href="{{asset('css/material-kit.css')}}" rel="stylesheet" />

    <!--   Core JS Files   -->
    <script src="{{asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/plugins/moment.min.js')}}"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{asset('js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
    <!--  Google Maps Plugin  -->
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/material-kit.js') }}" type="text/javascript"></script>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
</head>

<body>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-danger">
                <h4 class="card-title">Edit Profile</h4>
                <p class="category">Edit the info of your profile</p>
            </div>
            <div class="card-body">
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                            placeholder="Enter name" value="{{$user->name}}">
                    </div>
                    {{-- <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Last name">
                            </div>
                          </div> --}}
                          <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                            placeholder="Enter email" value="{{$user->email}}">
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter a new password!">
                    </div>
                    {{-- <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" checked >
                            Option one is this
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div> --}}
                    
                    <br><br>
                    {{-- <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <span class="btn btn-raised btn-round btn-default btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="..." />
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div> --}}
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
