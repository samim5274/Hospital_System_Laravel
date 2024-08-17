<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/UserRegisterStyle.css" />
</head>
<body>

    <section class="wrapper">

    <div class="row">
    <div class="col text-center">
      @if(session()->has('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger">
          {{ session()->get('error') }}
        </div>
      @endif
    </div>
  </div>

      <div class="form signup">
        <header>Signup</header>        
        <form action="/user-signup" method="POST" enctype="multipart/from-data" id="passwordForm">
          @csrf
          <input type="text" name="fName" value="Shamim" placeholder="First name" required />
          <input type="text" name="lName" value="Hossain" placeholder="Last name" required />
          <input type="text" name="uName" value="samim" placeholder="Username" required />
          <input type="email" name="eMail" value="samim@gmail.com" placeholder="Email address" required />

          <input id="pass1" type="password" name="pass1" value="s" placeholder="Password" required />
          <input id="pass2" type="password" name="pass2" value="s" placeholder="Confirm Password" required />
          <small id="passwordError" class="error">Passwords do not match!</small>

          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck"  id="signupCheck">I accept all terms & conditions</label>
          </div>
          <input type="submit" name="btnSubmit" value="Signup" />
        </form>
      </div>

      <div class="form login ">
        <header>Login</header>
        <form action="/user-login" method="GET" enctype="multipart/from-data">
          @csrf
          <input value="samim" name="username" type="text" placeholder="Email address" required />
          <input value="s" name="pass" type="password" placeholder="Password" required />
          <a href="#">Forgot password?</a>
          <input type="submit" value="Login" />
        </form>
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });

        document.getElementById('passwordForm').addEventListener('submit', function(event) {
            const password = document.getElementById('pass1').value;
            const confirmPassword = document.getElementById('pass2').value;
            const errorMessage = document.getElementById('passwordError');
            
            if (password !== confirmPassword) {
                errorMessage.style.display = 'inline';
                event.preventDefault();  // Prevent form submission
            } else {
                errorMessage.style.display = 'none';
            }
        });

      </script>
    </section>
  </body>
</html>