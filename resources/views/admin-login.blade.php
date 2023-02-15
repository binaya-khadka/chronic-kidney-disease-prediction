{{-- @extends('Layouts.app') --}}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Login Page</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/global.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
    integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

</head>

<body>
  <div class="login-page">
    <div class="login-page-container">
      <div class="login-page-title">
        <h2>
          Admin Login Page
        </h2>
      </div>
      <div class="login-page-details">
        <form action="">
          <div class="form-box">
            <label for="username">Username</label>
            <div class="form-input">
              <i class="fa-solid fa-envelope"></i>
              <input type="text" name="email" id="email" placeholder="Email">
            </div>
          </div>
          <div class="form-box">
            <label for="password">Password</label>
            <div class="form-input">
              <i class="fa-solid fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password">
            </div>
          </div>
          <div class="form-box">
            <div class="form-btn">
              <button type="submit" class="submitBtn">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>