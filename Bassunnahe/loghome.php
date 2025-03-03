<?php
include_once 'DBconnection.php';//passing data from login by checking correction
session_start();
$username = $_SESSION['username'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$email = $_SESSION['email'];
$tel = $_SESSION['tel'];
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
        <link rel="stylesheet" href="./Styles/homestyle.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        
        <script>
        function confirmLogout(event) {
            if (!confirm('Are you sure? you want to logout?')) {
                event.preventDefault();
            }
        }
    </script>

    </head>
    <body>

<header class="header">
      
  <a href="#home.php" class="logo"> <span>B</span>assunnahe<span>.lk</span></a>

  <nav class="navbar">
          <a href="#home">HOME</a>
          <a href="#contact">CONTACT</a>
          <a href="#about">ABOUT US</a>
          <a href="#blogs">BLOGS</a>
          <a href="#top-cards">CATEGORY</a>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">LOCATION</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">--Select--</a></li>
                      <li><a class="dropdown-item" href="#">colombo</a></li>
                      <li><a class="dropdown-item" href="#">kandy</a></li>
                      <li><a class="dropdown-item" href="#">Galle</a></li>
                      <li><a class="dropdown-item" href="#">Kurunegala</a></li>
                      <li><a class="dropdown-item" href="#">Anuradapura</a></li>
                      <li><a class="dropdown-item" href="#">Kegalle</a></li>
                      <li><a class="dropdown-item" href="#">colombo</a></li>
                      <li><a class="dropdown-item" href="#">kandy</a></li>
                      <li><a class="dropdown-item" href="#">Galle</a></li>
                   
                    </ul>
  </nav>


  <div class="icons">
    
    <div class="fas fa-shopping-cart" id="cart-btn"></div>

    <div class="fas fa-user" id="login-btn"></div>
    <div class="fas fa-bars" id="menu-btn"></div>
    <div class="fas fa-search" id="search-btn"></div>

  </div>
  <form action="search-btn" class="search-form" >
    <input type="search" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
  </form>

  <form action="" class="login-form">
    <h3>LOGIN</h3>
    <input type="email" placeholder="your email" class="box">
    <input type="password" placeholder="your password" class="box">
    <p class="F">Forget your Password <a href="#">Click here</a></p>
    <p>Don't Have an Account <a href="register.html">Register now</a></p>
    
    <a href=""></a>
    <input type="submit" value="login now" class="btn">
  </form>
  

<!-- profile start-->
  <div class="profile-form">
    <div class="container">
        <div class="row col-md-8 border rounded mx-auto mt-5 p-2 shadow-lg">
          <div class="col-md-12 text-center">
          <?php echo "<img src='data:image/jpeg;base64," . base64_encode($img) . "' width='150' height='200' />";
 ?>
                  <div>
                      <a href="editprofile.html">
                      <button class="mx-auto m-1 btn-sm btn btn-primary">EDIT</button>
                      </a>
                      <button class="mx-auto m-1 btn-sm btn btn-warning">DELETE</button>
                      <a href="home.php">
                      <form action="home.php" method="post" onsubmit="confirmLogout(event)">
                      
                      <button class="mx-auto m-1 btn-sm btn btn-info text-white" >LOG OUT</button>
                      
                    </form>
                    </a>
                    </div>
          </div>
          <div class="col-md-12  mx-auto">
              <div class="h3">USER PROFILE</div>
              <table class="table table-striped">
                  <tr><th colspan="2">ABOUT:</th></tr>
                  <tr><th>User Name</th>
              <td>
                <input type="text" class="form-control" name="UserName" placeholder="<?php echo " $username";?>">
              </td>
          </tr>
            <tr><th>First Name</th>
                <td>
                  <input type="text" class="form-control" name="FirstName" placeholder="<?php echo " $firstname";?>">
                </td>
            </tr>
            <tr><th>Last Name</th>
              <td>
                <input type="text" class="form-control" name="LastName" placeholder="<?php echo " $lastname";?>">
              </td>
            </tr>

          </tr>
       
          <tr><th>Mobile Number</th>
            <td>
              <input type="text" name="tel" class="form-control" placeholder="<?php echo " $tel";?>">
            </td>
          </tr>
          <tr><th>Profession</th>
            <td>
              <input type="text" name="prof" class="form-control" placeholder="<?php echo " $prof";?>">
            </td>
          </tr>
              </table>
          </div>
      
      </div>
      
    </div>
  </div>
<!-- profile end-->


                  <div class="labor-cart">
                  
                    <div class="cart">
                      <h1>LABOR CART</h1>
                    </div>
                    <div class="scroll-bar">
                      <div class="box">
                        <i class="fas fa-trash"></i>
                        <img src="imagess/icons/pngegg (24).png" alt="">
                        <div class="content">
                          <h3>Full Name</h3>
                          <p>Specialization <br>Location</p>
                          <span class="price">Rs.3000.00</span>
                        </div>
                      </div>
                      <div class="box">
                        <i class="fas fa-trash"></i>
                        <img src="imagess/icons/pngegg (24).png" alt="">
                        <div class="content">
                          <h3>Full Name</h3>
                          <p>Specialization <br>Location</p>
                          <span class="price">Rs.3000.00</span>
                        </div>
                      </div>
                      <div class="box">
                        <i class="fas fa-trash"></i>
                        <img src="imagess/icons/pngegg (24).png" alt="">
                        <div class="content">
                          <h3>Full Name</h3>
                          <p>Specialization <br>Location</p>
                          <span class="price">Rs.3000.00</span>
                        </div>
                      </div>
                      <div class="box">
                        <i class="fas fa-trash"></i>
                        <img src="imagess/icons/pngegg (24).png" alt="">
                        <div class="content">
                          <h3>Full Name</h3>
                          <p>Specialization <br>Location</p>
                          <span class="price">Rs.3000.00</span>
                        </div>
                      </div>
                      <div class="box">
                        <i class="fas fa-trash"></i>
                        <img src="imagess/icons/pngegg (24).png" alt="">
                        <div class="content">
                          <h3>Full Name</h3>
                          <p>Specialization <br>Location</p>
                          <span class="price">Rs.3000.00</span>
                        </div>
                      </div>
                      <div class="box">
                        <i class="fas fa-trash"></i>
                        <img src="imagess/icons/pngegg (24).png" alt="">
                        <div class="content">
                          <h3>Full Name</h3>
                          <p>Specialization <br>Location</p>
                          <span class="price">Rs.3000.00</span>
                        </div>
                      </div>
                      <div class="box">
                        <i class="fas fa-trash"></i>
                        <img src="imagess/icons/pngegg (24).png" alt="">
                        <div class="content">
                          <h3>Full Name</h3>
                          <p>Specialization <br>Location</p>
                          <span class="price">Rs.3000.00</span>
                        </div>
                      </div>
                      <div class="box">
                        <i class="fas fa-trash"></i>
                        <img src="imagess/icons/pngegg (24).png" alt="">
                        <div class="content">
                          <h3>Full Name</h3>
                          <p>Specialization <br>Location</p>
                          <span class="price">Rs.3000.00</span>
                        </div>
                      </div>
                    </div>
                    
                    <a href="#" class="btn">checkout</a>
                  
                  </div>
      </header>
<!--header end-->




          

          <!--home page start  bootstrap-->
          <section id="home">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>


              
              
              <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="imagess/background/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block">
                    <h3>Bassunnahe.lk <br>W E L C O M E ! ! ! <br></h3>
                      <p>
                        The Largest & Famous Labor hiring Website in Sri Lanka<br>
                      </p>
                        <button id="btn">CLICK HERE</button>
                    </div>
                  </div>
            
            
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="imagess/background/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block">
                      <h3>Start your Day <br>Find your better Choice</h3>
               
                     
                      <button id="btn">CLICK HERE</button>
                  </div>
                  </div>
            
            
                  <div class="carousel-item">
                    <img src="imagess/background/4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block">
                      <h3>Start your Day <br>Find your better Choice</h3>
                     
                      <button id="btn">CLICK HERE</button>
                  </div>
                  </div>
                </div>
      
                
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>


          </section>
          <!--home page end-->




          <section id="add">
            <div class="heading2">CREATE <span>ADDVERTIESTMENT</span></div>
            <div class="container-fluid">
              
              <div class="adds">
                <a href="adds.html">
                <button class="add-btn">CREATE ADDVERTIESTMENT</button>
              </a>
              </div>
            </div>
          </section>





          <!--catergories page start-->
          <section id="top-cards">
            <div class="heading2">TOP <span>CATEGORIES</span></div>
            <div class="container">
              <div class="row">

              <div class="col-md-2 col-sm-6 py-3 py-md-0">
                <a href="homes.php?user=Mason">
                  <div class="card">
                     <img src="imagess/icons/pngegg (24).png" alt="imge">Mason
                 </div>
                </a>
              </div>


                <div class="col-md-2 col-sm-6 py-3 py-md-0">
                  <a href="homes.php?user=cctv">
                  <div class="card">
                      <img src="imagess/icons/pngegg (24).png" alt="imge">CCTV installer
                  </div>
                  </a>
                </div>
                <div class="col-md-2 col-sm-6 py-3 py-md-0">
                  <a href="homes.php?user=painters">
                  <div class="card">
                      <img src="imagess/icons/pngegg (24).png" alt="imge">painter
                  </div>
                  </a>
                </div>
                
                <div class="col-md-2 col-sm-6 py-3 py-md-0">
                  <a href="homes.php?user=plumber">
                  <div class="card">
                      <img src="imagess/icons/pngegg (24).png" alt="imge">Plumber
                  </div>
                  </a>
                </div>
               
                <div class="col-md-2 col-sm-6 py-3 py-md-0">
                  <a href="homes.php?user=carpenter">
                  <div class="card">
                      <img src="imagess/icons/pngegg (24).png" alt="imge">Carpenter
                  </div>
                  </a>
                </div>
                
                <div class="col-md-2 col-sm-6 py-3 py-md-0">
                  <a href="homes.php?user=electrician">
                  <div class="card">
                      <img src="imagess/icons/pngegg (24).png" alt="imge">Electrician
                  </div>
                  </a>
                </div>
                <div class="col-md-2 col-sm-6 py-3 py-md-0">
                <a href="homes.php?user=Mason">
                  <div class="card">
                     <img src="imagess/icons/pngegg (24).png" alt="imge">Mason
                 </div>
                </a>
              </div>


                <div class="col-md-2 col-sm-6 py-3 py-md-0">
                  <a href="homes.php?user=cctv">
                  <div class="card">
                      <img src="imagess/icons/pngegg (24).png" alt="imge">CCTV installer
                  </div>
                  </a>
                </div>
                <div class="col-md-2 col-sm-6 py-3 py-md-0">
                  <a href="homes.php?user=painters">
                  <div class="card">
                      <img src="imagess/icons/pngegg (24).png" alt="imge">painter
                  </div>
                  </a>
                </div>
                
                <div class="col-md-2 col-sm-6 py-3 py-md-0">
                  <a href="homes.php?user=plumber">
                  <div class="card">
                      <img src="imagess/icons/pngegg (24).png" alt="imge">Plumber
                  </div>
                  </a>
                </div>
               
                <div class="col-md-2 col-sm-6 py-3 py-md-0">
                  <a href="homes.php?user=carpenter">
                  <div class="card">
                      <img src="imagess/icons/pngegg (24).png" alt="imge">Carpenter
                  </div>
                  </a>
                </div>
                
                <div class="col-md-2 col-sm-6 py-3 py-md-0">
                  <a href="homes.php?user=electrician">
                  <div class="card">
                      <img src="imagess/icons/pngegg (24).png" alt="imge">Electrician
                  </div>
                  </a>
                </div>

              </div>
            </div>

          </section>
                    <!--catergories page end-->




            <section id="rating-btn">
            <div class="container-fluid">
              
              <div class="ratings">
                <a href="allAdds.php">
                <button class="rate-btn">ALL ADDS</button>
              </a>
              </div>
            </div>
          </section>









                    <!--about page start-->
          <section id="about">
            <div class="container">
              <div class="heading">ABOUT <span>US</span></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <img src="imagess/pngegg (12).png" class="card-img-top" alt="...">
                    
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h3>Why important this site?</h3>
                    <p>With modern competitiveness and conceptual ideas, people's daily routines also started to become technologized using the resources of the ever-improving technical system. It is simply because of the ease of communication and uniform lifestyles. This system of ours, which is built using advanced technical concepts, is a new concept that brings activists to make their work easier for those who need and want it. That is, it is a web system that facilitates online hiring of labors related to the maintenance and construction sector according to the needs of the customer.
                  <BR>To connect with the experienced workers who are registered for the tasks required to get the services as required by the customers and for the laborers to still take the service to the customers and provide them. The system has been designed to facilitate communication between labor and customer, providing space and awareness about the service. Moreover, they have been facilitated through this process which takes place through the road system to get and provide a quality, efficient and effective service as they expect.
                    </p>
                    

                  </div>
                </div>
              </div>
            </div>
          </section>
                    <!--about page end-->








                    <section class="testimonials">
                      <div class="container">
                          <div class="heading2">
                              <h1>CUSTOMER <SPan>REVIEWS</SPan></h1>
                          </div>
                          <div class="testimonials-content">
                              <div class="swiper testimonials-slider js-testimonials-slider">
                                  <div class="swiper-wrapper" >
                                    
                                      <div class="swiper-slide testimonials-item">
                                          <div class="info">
                                              <img src="img/none.png" alt="img">
                                              <div class="text-box">
                                                  <h3 class="name">Nimal Fonseka</h3>
                                                  <span class="job">System analyst</span>
                                              </div>
                                              <p>vhsfffj jsdddddbvhvgh vjhasdvfhvjbvhjjas fjbvhyvasfkvghj nvhvfjvghjbvg vvgfghvfhgvhjsfbghjvggh</p>
                                              <div class="rating"></div>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                          </div>
                                      </div>
                                      <div class="swiper-slide testimonials-item">
                                          <div class="info">
                                              <img src="img/none.png" alt="img">
                                              <div class="text-box">
                                                  <h3 class="name">Kalana Herath</h3>
                                                  <span class="job">ERP consultant</span>
                                              </div>
                                              <p>vhsfffj jsdddddbvhvgh vjhasdvfhvjbvhjjas fjbvhyvasfkvghj nvhvfjvghjbvg vvgfghvfhgvhjsfbghjvggh</p>
                                              <div class="rating"></div>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                          </div>
                                      </div>
                                      <div class="swiper-slide testimonials-item">
                                          <div class="info">
                                              <img src="img/none.png" alt="img">
                                              <div class="text-box">
                                                  <h3 class="name">Kavisha Wadugoda</h3>
                                                  <span class="job">data analyst</span>
                                              </div>
                                              <p>vhsfffj jsdddddbvhvgh vjhasdvfhvjbvhjjas fjbvhyvasfkvghj nvhvfjvghjbvg vvgfghvfhgvhjsfbghjvggh</p>
                                              <div class="rating"></div>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                          </div>
                                      </div>
                                      <div class="swiper-slide testimonials-item">
                                          <div class="info">
                                              <img src="img/none.png" alt="img">
                                              <div class="text-box">
                                                  <h3 class="name">Nimal senevirathne</h3>
                                                  <span class="job">Educational consultant</span>
                                              </div>
                                              <p>vhsfffj jsdddddbvhvgh vjhasdvfhvjbvhjjas fjbvhyvasfkvghj nvhvfjvghjbvg vvgfghvfhgvhjsfbghjvggh</p>
                                              <div class="rating"></div>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                          </div>
                                      </div>
                                      <div class="swiper-slide testimonials-item">
                                          <div class="info">
                                              <img src="img/none.png" alt="img">
                                              <div class="text-box">
                                                  <h3 class="name">Angika De silva</h3>
                                                  <span class="job">Cyber security specialist</span>
                                              </div>
                                              <p>vhsfffj jsdddddbvhvgh vjhasdvfhvjbvhjjas fjbvhyvasfkvghj nvhvfjvghjbvg vvgfghvfhgvhjsfbghjvggh</p>
                                              <div class="rating"></div>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="swiper-pagination js-testimonials-pagination"></div>
                              </div>
                          </div>
                      </div>
                  </section>
                  
                  <script src="https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.js"></script>
                  <script>
                      const swiper = new Swiper('.js-testimonials-slider', {
                          grabCursor: true,
                          spaceBetween: 30,
                          pagination: {
                              el: '.js-testimonials-pagination',
                              clickable: true
                          },
                          breakpoints: {
                              767: {
                                  slidesPerView: 2
                              }
                          }
                      });
                  </script>
                </section>
                










         <section id="rating-btn">
  <div class="container-fluid">
    
    <div class="ratings">
      <a href="starReview.html">
      <button class="rate-btn">ADD RATINGS</button>
    </a>
    </div>
  </div>
</section>





                <!--blogs page start-->
              <section id="blogs">
                    <div class="heading7">LATEST <SPan>BLOGS</SPan></div>
                    <DIV class="container">
                      <div class="row">
                        <div class="col-md-4 py-3 py-md-0">
                          <div class="card">
                            <img src="imagess/icons/pngegg (25).png" alt="image">
                            <div class="card-body">
                              <h3>Lorem, ipsum dolor.</h3>
                              <h5>admin  6 may 2024</h5>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, distinctio.</p>
                              <button id="blog-btn">Read more...</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 py-3 py-md-0">
                          <div class="card">
                            <img src="imagess/icons/pngegg (28).png" alt="image">
                            <div class="card-body">
                              <h3>Lorem, ipsum dolor.</h3>
                              <h5>admin  6 may 2024</h5>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, distinctio.</p>
                              <button id="blog-btn">Read more...</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 py-3 py-md-0">
                          <div class="card">
                            <img src="imagess/icons/pngegg (27).png" alt="image">
                            <div class="card-body">
                              <h3>Lorem, ipsum dolor.</h3>
                              <h5>admin  6 may 2024</h5>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, distinctio.</p>
                              <button id="blog-btn">Read more...</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </DIV>
              </section>

                <!--blogs page end-->




          

                    <!--contact page start-->
          <section id="contact">
            <div class="heading6">CONTACT <span>US</span></div>
            <div class="container">
              
              <div class="row">
              <div class="col-md-7">
               <br>
               <p>CONTACT US</p>
                <input type="text" class="form-control" placeholder="Name" aria-label="default input example"><br>
                <input type="email" class="form-control" placeholder="Email" aria-label="default input example"><br>
                <input type="number" class="form-control" placeholder="Phone" aria-label="default input example"><br>
                <input  type="text" class="form-controls" placeholder="Discription" aria-label="default input example"><br>
                <button id="contact-btn">Send Message</button>
  
              </div>
                <div class="col-md-5" id="col">
                  <br>
                  <h1>CONTACT INFO</h1>
                  <p><i class="fa-regular fa-envelope"></i> - example@gmail.com</p>
                  <p><i class="fa-solid fa-phone"></i> - 0713216549</p>
                  <p><i class="fa-solid fa-location-arrow"></i> - Kandy, Central Province,Sri Lanka</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, odit.</p>

                </div>
              </div>
            </div>
          </div>
       
            
          </section>
                    <!--catergories page end-->




                     <!--detail section start-->
          <section class="detail">
            <div class="footer-logo text-center"><img src="imagess/LOGO1Y.png" alt="im"></div>
            <DIv class="container">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <h3>How to Add service</h3>
                  <ul type="squre">
                    <li>Membership</li>
                    <li>How to select location</li>
                    <li>how to select category</li>
                  </ul>
                </div>
                <div class="col-md-4 col-sm-4">
                  <h3>Help & Support</h3>
                  <ul type="squre">
                    <li>Blogs</li>
                    <li>FAQ</li>
                    <li>Contact us</li>
                  </ul>
                </div>
                <div class="col-md-4 col-sm-4">
                  <h3>About us</h3>
                  <ul type="squre">
                    <li>Terms & conditions</li>
                    <li>privcy policies</li>
                    <li>About Us</li>
                  </ul>
                </div>
              </div>
            </DIv>

          </section>
                     <!--detail section end-->

          




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
         




           
            
          <a href="#" class="arrow"><i><img src="imagess/icons/pngegg (20).png" alt="image" width="40px"></i></a>
       </div>

       <script src="script1.js"></script> <!--javascript file connect link-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>