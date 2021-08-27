<!doctype html>
<html lang="en">

<head>
  <title>UEW PAY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="style.css">

</head>

<body>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-3">
          <h2 class="heading-section">UEW PAY</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <img src="./images/logo1.png" alt="UEW" style="display:block; margin-left:auto; margin-right:auto; width:50%">
            <h3 class="text-center mb-4">Sign In</h3>
            <form class="login-form" method="POST">
              @csrf

              <!-- custom error message here -->
              
               <!-- @if($errors->count() != 0)
              <div class="alert-danger mb-2 px-4 py-2">
                {{$errors->first('username')}}
              </div>

              @endif  -->


              <span style="color:red" class="pb-5">@error('username'){{$message}}@enderror</span>

              <div class="form-group">
                <input type="text" class="form-control rounded-left" name="username" placeholder="Username" value="{{old ('username')}}">
              </div>
              

              <span style="color:red" class="pb-5">@error('password'){{$message}}@enderror</span>
              
              <div class="form-group d-flex">
                <input type="password" class="form-control rounded-left" name="password" placeholder="Password" value="{{old ('password')}}">
              </div>
             


              <div class="form-group">
              <!-- <a href="{{ url('welcome') }}" class=" form-control btn btn-primary rounded submit px-3 mt-2">Log in</a> -->

              <button type="submit" class="form-control btn btn-primary rounded submit px-3"><a href="{{ url('home') }}" style="color:white" >Login</a></button>
              </div>
 
              <div class="form-group d-md-flex">
                <div class="w-50">
                  <label class="checkbox-wrap checkbox-primary">Remember Me
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="w-50 text-md-right">
                  <a href="{{ url('welcome') }}">Sign Up</a>
                </div>
    
              </div>
            </form>
          </div>
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