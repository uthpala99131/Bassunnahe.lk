
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="log.css">

</head>
<body>
    <!--header section starts-->
    <section class="header">
        
            <div id="menu-btn" class="fas fa-bars"></div>
       
        

        <a href="home.html" class="logo">Nature<span>Guide</span></a>

        <nav class="navbar">
            <a href="home.html">HOME</a>
            <a href="about.html">ABOUT</a>
            <a href="home.html">DESTINATION</a>
            <a href="package.html">PACKAGES</a>
            <a href="home.html">CONTACT</a>
        </nav>
       
      
        <a href="login.html" class="logbtn">LOGIN</a>
    </section>
    <!--header section end-->


    const SocialLogin = () => {
        return (
          <div className="social-login">
            <button className="social-button">
              <img src="google.svg" alt="Google" className="social-icon" />
              Google
            </button>
            <button className="social-button">
              <img src="apple.svg" alt="Apple" className="social-icon" />
              Apple
            </button>
          </div>
        )
      }
      
      export default SocialLogin;
      import { useState } from "react";

      const InputField = ({ type, placeholder, icon }) => {
        // State to toggle password visibility
        const [isPasswordShown, setIsPasswordShown] = useState(false);
      
        return (
          <div className="input-wrapper">
            <input
              type={isPasswordShown ? 'text' : type}
              placeholder={placeholder}
              className="input-field"
              required
            />
            <i className="material-symbols-rounded">{icon}</i>
            {type === 'password' && (
              <i onClick={() => setIsPasswordShown(prevState => !prevState)} className="material-symbols-rounded eye-icon">
                {isPasswordShown ? 'visibility' : 'visibility_off'}
              </i>
            )}
          </div>
        )
      }
      
      export default InputField;


      import SocialLogin from "./components/SocialLogin";
      import InputField from "./components/InputField";
      
      const App = () => {
        return (
          <div className="login-container">
            <h2 className="form-title">Log in with</h2>
            <SocialLogin />
      
            <p className="separator"><span>or</span></p>
      
            <form action="#" className="login-form">
              <InputField type="email" placeholder="Email address" icon="mail" />
              <InputField type="password" placeholder="Password" icon="lock" />
      
              <a href="#" className="forgot-password-link">Forgot password?</a>
              <button type="submit" className="login-button">Log In</button>
            </form>
      
            <p className="signup-prompt">
              Don&apos;t have an account? <a href="#" className="signup-link">Sign up</a>
            </p>
          </div>
        )
      }
      
      export default App;





             <!--swiper css link-->
             <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
             <!--custom js file link-->
             <script src="script.js"></script>
         </body>
         </html>