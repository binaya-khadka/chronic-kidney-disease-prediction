<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Login Page</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/global.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/create-form.css')}}">

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
          Create Patient
        </h2>
      </div>
      <div class="login-page-details">
        <form action="">
          <div class="form-box">
            <label for="name">Name</label>
            <div class="form-input">
              <input type="text" name="name" id="name" placeholder="Name">
            </div>
          </div>
          <div class="form-box">
            <label for="email">Email</label>
            <div class="form-input">
              <input type="email" name="email" id="email" placeholder="Enter Email">
            </div>
          </div>
          <div class="form-box">
            <label for="password">Password</label>
            <div class="form-input">
              <input type="password" name="password" id="password" placeholder="Enter your Password">
            </div>
          </div>
          <div class="form-box">
            <label for="contactnumber">Contact Number</label>
            <div class="form-input">
              <input type="number" name="contact" id="contact" placeholder="Enter Contact Number">
            </div>
          </div>
          <div class="df jcsb">
            <div class="form-box">
              <label for="gender">Gender</label>
              <div class="form-input df">
                <select name="gender" id="gender">
                  <option value="0">Male</option>
                  <option value="1">Female</option>
                </select>
                {{-- <input type="radio" id="male" name="gender" value="1">
                <label for="male">male</label><br>
                <input type="radio" id="female" name="gender" value="2">
                <label for="female">female</label><br> --}}
              </div>
            </div>
            <div class="form-box">
              <label for="age">Age</label>
              <div class="form-input">
                <input type="number" name="age" id="age" placeholder="Enter your Age">
              </div>
            </div>
          </div>

          <div class="form-box">
            <div class="form-btn">
              <button type="submit" class="submitBtn">Create Account</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>