<!DOCTYPE html>
<html>
<head>
    <title>یارمەتی دانی ئاژەڵان</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="css/login_signup.css">
</head>
<body>
  
<div class="container">
    <div class="forms">
    <div class="form login">
            <span class="title">چوونەژوورەوە</span>

            <form action="{{ route('login.post') }}" method="POST">
            @csrf
                    <div class="input-field">
                        <input type="text" id="email_address" placeholder="ئیمێڵت بنووسە" name="email" required autofocus>
                        <i class="uil uil-envelope icon"></i>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="input-field">
                        <input id="password" type="password" class="password" name="password" placeholder="وشەی نهێنی بنووسە" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck">reminde me</label>
                        </div>
                        
                        <a href="#" class="text">لەبیرچوونی وشەی نهێنی؟</a>
                    </div>

                    <div class="input-field button">
                    <input type="submit" value="چوونەژوورەوە"> 
                    </div>

            <div class="social-icons">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href="#"><i class="uil uil-google"></i></a>
            <a href="#"><i class="uil uil-instagram"></i></a>
            <a href="#"><i class="uil uil-linkedin"></i></a>
            </div>

                </form>

                <div class="login-signup">
                    <span class="text">خۆت تۆمارنەکردییە؟
                        <a href="#" class="text signup-link">تۆمارکردن</a>
                    </span>
                </div>
            </div>

            @include('auth.registration')
        </div>
    </div>     
</body>
<script src="js/login_signup.js"></script>

</html>