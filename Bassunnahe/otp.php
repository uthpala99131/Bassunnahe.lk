<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="./Styles/otpstyle.css">
</head>
<body>
   <div class="container">
    <h2>OTP Verification</h2>
    <p>
        Please type verification code sent to 
        <p><span id="mobile">0000-00000</span></p>
    </p>

    <p>The OTP will expire in <span id="expire">30</span>s</p>
    <div class="row">
        <input type="number" />
        <input type="number" />
        <input type="number" />
        <input type="number" />
    </div>
    <button type="button" id="verifyButton">Verify OTP</button>
    <p>
        Didn't receive the code?
        <a href="javascript:void(0)" id="request">Request Again!</a>
    </p>
   </div> 
   <script src="otp.js"></script>
</body>
</html>