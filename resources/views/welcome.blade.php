<!doctype html>
<html lang="en">

<head>
    <title>UEW PAY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="dashboard.css">

   
</head>

<body>


    <div class="w-30 text-md-left back btn btn-primary ml-3 mt-3">
        <a href="{{ url('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Back</a>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">UEW PAY</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap">
                        <img src="./images/logo1.png" alt="UEW" style="display:block; margin-left:auto; margin-right:auto; width:50%">
                        <h3 class="text-center mb-4"><b>Sign Up</b></h3>
                        <form action="#" class="signup-form">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group mb-3">
                                <input id="password-field" type="password" class="form-control" placeholder="Enter Password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Continue</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>