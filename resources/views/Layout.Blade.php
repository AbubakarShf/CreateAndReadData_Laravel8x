<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <title>Document</title>

</head>

<body>

<div id="ActuallSec">
    <div class="header">
        @section('Header')
        <div class="bs-example">
            <nav class="navbar navbar-expand-md navbar-light bg-dark">
  
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="Layout" class="nav-item nav-link active">Home</a>
                        <a href="create" class="nav-item nav-link">Create</a>
                        <a href="UserList" class="nav-item nav-link">User List</a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <a href="Login" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>
        </div>

        @show
        <!-- HeaderContent End Here -->
    </div>


    
<div class="login">
        @section('content')
        @show
    </div>

    <div class="Signup">
        @section('Signup')
        @show
    </div>

    <div class="userlist">
        @section('userlist')
        @show        
    </div>    

    <div class="footer">
        @section('footer')
        <p class="footerPara">FooterPart</p>
        @show
    </div>
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-4.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>