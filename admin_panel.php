<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>User Panel</title>
  </head>
  <body onload="generateCaptcha()">
    <div class="outer">
      <form class="inner">
        <h1>Admin Panel</h1>
            <input
            type="text"
            placeholder="User Id"
            class="input"
            id="user"
            autocomplete="off"
          />
          <div class="otp">
            <input
            type="text"
            placeholder="OTP"
            class="input otpinput"
            title="Please enter a 4-digit OTP"
            id="user"
            maxlength="4"
            pattern="\d{4}"
            autocomplete="off"
            required
          />
          <button class="otpbtn" id="otp" onclick="otp()">Get OTP</button>
          </div>
          <div class="captcha">
            <input type="text" id="mainCaptcha" readonly="readonly"/>
            <button  onclick="generateCaptcha()" class="captchaBtn">&#x21BB;</button>
          </div>
          <input type="text" placeholder="Captcha" id="txtInput" class="input" autocomplete="off">
          <span id="error"></span>
        <button type="submit" id="login">Log in</button>        
        /<form>      
    </div>

    <script src="script.js"></script>
  </body>
</html>
