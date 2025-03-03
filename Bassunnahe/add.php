<?php
include_once 'DBconnection.php';//passing data from login by checking correction
session_start();
$username = $_SESSION['username'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$email = $_SESSION['email'];
$tel = $_SESSION['mobileNo'];
$prof = $_SESSION['prof'];
$loc = $_SESSION['loc'];
$img = $_SESSION['img'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-divice-width, initial-scale=1.0">
        <title>Basssunnahe home page</title>
        <link rel="stylesheet" href="./Styles/editprofile.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        
        

    </head>
    <body>



<!--header start-->
<header class="header">
      
    <a href="#home" class="logo"> <span>B</span>assunnahe<span>.lk</span></a>
    <div class="icons">
      <div class="fas fa-shopping-cart" id="cart-btn"></div>
      <div class="fas fa-bars" id="menu-btn"></div>
      <div class="fas fa-search" id="search-btn"></div>
    </div>
    <form action="search-btn" class="search-form" >
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box" class="fas fa-search"></label>
    </form>  
</header>
  <!--header end-->


<div class="container">
  <div class="row col-md-8 border rounded mx-auto mt-5 p-2 shadow-lg">
    <div class="col-md-4 text-center">
    <?php echo "<img src='data:image/jpeg;base64," . base64_encode($img) . "' width='150' height='200' />";
 ?>
        
            <div class="mb-3">
               <label for="formFileSm" class="form-label"><?php echo " $username<br>"; ?></label>
                <input onchange="display_image(this.files[0])"  class="form-control" id="formFileSm" type="file">
            </div>
    </div>
    <div class="col-md-8 mx-auto">
        <div class="h1" style="font-weight: bold; margin: 10px;">CREATE ADD</div>

        <form action="update.php" method="post">
        <table class="table table-striped">
            <tr><th colspan="2"><h4>Fill Add Details</h4></th></tr>
            <tr><th>User Name</th>
              <td>
                <input type="text" class="form-control" name="UserName" placeholder="<?php echo " $username";?>">
              </td>
          </tr>
            <tr><th>First Name</th>
                <td>
                  <input type="text" class="form-control" name="FirstName" placeholder="First Name">
                </td>
            </tr>
            <tr><th>Last Name</th>
              <td>
                <input type="text" class="form-control" name="LastName" placeholder="Last Name">
              </td>
            </tr>

          </tr>
          <tr><th>Email</th>
            <td>
              <input type="text" placeholder="Email Address" class="form-control" name="email">
            </td>
          </tr>
          <tr><th>Mobile Number</th>
            <td>
              <input type="text" placeholder="Mobile Number" class="form-control" name="mobileNO">
            </td>
          </tr>
          

            <tr><th>Category</th>
              <td>
                <select class="form-select" aria-label="Default select example">
                  <option selected>--Select--</option>
                  <option value="Male">Mason</option>
                  <option value="FemaleS">Plumber</option>
                  <option value="Male">Electrician</option>
                  <option value="FemaleS">Carpenter</option>
                  <option value="Male">Mason</option>
                  <option value="FemaleS">Plumber</option>
                </select>
              </td>
            </tr>
            <tr><th>Location</th>
                <td>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>--Select--</option>
                    <option value="Kandy">Kandy</option>
                    <option value="colombo">colombo</option>
                    <option value="Kandy">Galle</option>
                    <option value="colombo">matale</option>
                    <option value="Kandy">kurunegala</option>
                    <option value="colombo">Anuradapura</option>
                  </select>
                </td>
              </tr>


        </table>
        <H5>Addvertiestment payment Rs.300/= per month</H5>
        <div class="p-2">
          

          <a href="login.html">
            <label class="btn btn-secondary">BACK</label>
          </a>
          
          <a href="payment.html">
          <label class="btn btn-primary float-end">SAVE </label>
          
          </a>

        </div>
      </form>
        <div class="p-2"></div>
    </div>
</div>

</div>











            <!--footer start-->
            <footer id="footer">
                
                <div class="social-links text-center">
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-instagram"></i>
                  <i class="fa-brands fa-youtube"></i>
                  <i class="fa-brands fa-whatsapp"></i>
                  <i class="fa-brands fa-telegram"></i>
                  <i class="fa-brands fa-linkedin"></i>
              
                </div>
                <div class="credits text-center">
                  Designed by <a href="#"><span>Group 5</span></a>
                </div>
                <div class="copyright text-center">
                  &copy; copyright <strong> <a href="#home"><span>Bassunnahe.lk</span></a></strong>. All Right reserved
                </div>
          </footer>
            <!--footer end-->
         




           
            
          
       </div>

       <script src="script1.js"></script> <!--javascript file connect link-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>


<script>
  console.log(URL);
  function display_image(file){
    var img= document.querySelector("js-image");
    img.src= URL.createObjectURL();

    console.log(URL);
  }
</script>