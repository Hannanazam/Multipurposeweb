

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web UI</title>
  <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
  ></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php require_once('index.php'); ?> 
</head>

<body>
    <script>
  function alertMissing(){
  // $('.allll2').click(function(){
   $(document).ready(function(){
        $('.alert2').addClass("show");
        $('.alert2').removeClass("hide");
        $('.alert2').addClass("showAlert");
        setTimeout(function(){
          $('.alert2').removeClass("show");
          $('.alert2').addClass("hide");
        },5000);
    //   });
  });
      $('.close-btn').click(function(){
        $('.alert2').removeClass("show");
        $('.alert2').addClass("hide");
      });

    }
  function alertWarning(){
  // $('.allll1').click(function(){
    $(document).ready(function(){
        $('.alert').addClass("show");
        $('.alert').removeClass("hide");
        $('.alert').addClass("showAlert");
        setTimeout(function(){
          $('.alert').removeClass("show");
          $('.alert').addClass("hide");
        },5000);
      // });
    });
      $('.close-btn').click(function(){
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
      });

    }
  function alertSuccess(){
  // $('.allll2').click(function(){
    $(document).ready(function(){
        $('.alert1').removeClass("hide");
        $('.alert1').addClass("showAlert");
           $('.alert1').addClass("show");
        setTimeout(function(){
          $('.alert1').removeClass("show");
          $('.alert1').addClass("hide");
        },5000);
      // });
    });
      $('.close-btn').click(function(){
        $('.alert1').removeClass("show");
        $('.alert1').addClass("hide");
      });

    }
</script>




<?php
if(isset($_POST["send"])){
  $FName=" Name : ".$_POST["name"];
  $LName=" Phone Number : ".$_POST["phone"];
  $Subject= " Subject : ".$_POST["subject"];
  $Email=" User Email : ".$_POST["email"];
  $Message=" User Message : ".$_POST["Message"];


  $from = "hannanazam200@gmail.com";
  
  $Message = $FName .' '.$LName.' '.$Subject.' '.$Email.''.$Message;
  
  $to = "hannanazam200@gmail.com";
  $headers = "From:" . $from;
    
    if($FName !="" && $LName !="" && $Subject !="" && $Email !="" && $Message !="")
    {
        if(mail($to,$Subject,$Message,$headers))
  {
    
    echo '<script type="text/javascript">alertSuccess() </script>';
      
    //   alert("Your Message has been succesfully sended, we will contact you soon!");
    //   // var url= "thanks.html"; 
    //   // window.location = url; 
     
   
  }
  else
  { 
    // <script type="text/javascript">
    // alert("Your Message has been warning!")
    // alertWarning();
    // </script>
      echo '<script type="text/javascript">alertWarning() </script>';
  
  }
}
else
{
  
    // <script type="text/javascript">
    // alert("Your Message has been missing")
    //   alertMissing()
    // </script>
       echo '<script type="text/javascript">alertMissing() </script>';
   
        
    }
  }
?>
    <nav class="navbar navbar-expand-lg navbar-dark wow fadeInDown">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- nabar -->



    <!-- slider -->

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" id="Home" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/image1.jpg" class="d-block w-100 h-60" alt="...">
                <div class="carousel-caption-1 d-none d-md-block wow fadeInLeft">
                  <h5 class="firstslide">First slide label</h5>
                  <p>Some representative placeholder content for the first slide.Some representative placeholder.</p>
                  <button class="btn btn-warning">Primary</button>
             </div>
            </div>
            <div class="carousel-item">
                <img src="images/image2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-2 d-none d-md-block wow fadeInUp">
                   <h5>Second slide label</h5>
                   <p>Some representative placeholder content for the first slide.Some representative placeholder.</p>
                   <button class="btn btn-warning">Primary</button>
      </div>
            </div>
            <div class="carousel-item">
                <img src="images/image3.jpg" class="d-block w-100" alt="...">
                 <div class="carousel-caption-3 d-none d-md-block wow fadeInRight">
                   <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the first slide.Some representative placeholder.</p>
                  <button class="btn btn-warning">Primary</button>
      </div>
            </div>
        </div>
        <div class="forcarouselback"></div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <!-- slider -->

    <!-- Section1 -->
    <!-- Testimonials -->
    <!-- cards -->
    <section class="testimonials" id="Testimonials">
        <div class="container">
            <h1>Testimonials</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non perferendis, explicabo.
            </p>

            <div class="row">
                <div class="col-md-4 text-center wow flipInX">
                    <div class="profile">
                        <img src="images/img1.png" class="users" alt="">
                        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus saepe rem quia
                            fugiat et perspiciatis consequuntur porro, eos, tempore totam corrupti temporibus vel
                            expedita officia repellat incidunt autem maxime deleniti?</blockquote>

                        <h3>Hannan Azam <span>Student</span></h3>
                    </div>
                </div>



                <div class="col-md-4 text-center wow flipInX">
                    <div class="profile">
                        <img src="images/img2.png" class="users" alt="">
                        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus saepe rem quia
                            fugiat et perspiciatis consequuntur porro, eos, tempore totam corrupti temporibus vel
                            expedita officia repellat incidunt autem maxime deleniti?</blockquote>

                        <h3>Hannan Azam <span>Student</span></h3>
                    </div>
                </div>





                <div class="col-md-4 text-center wow flipInX">
                    <div class="profile">
                        <img src="images/img3.png" class="users" alt="">
                        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus saepe rem quia
                            fugiat et perspiciatis consequuntur porro, eos, tempore totam corrupti temporibus vel
                            expedita officia repellat incidunt autem maxime deleniti?</blockquote>

                        <h3>Hannan Azam <span>Student</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cards -->
    <!-- Testimonials -->

    <!-- Section1 -->

    <!-- Section2 -->
<section id="About">
    <div class="testimonials">
        <h1>About</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non perferendis, explicabo.
        </p>
    </div>
    <!-- About Us -->
    <div class="container">
        <div class="row my-5">
            <!-- Slider -->

            <div class="col-lg-6 col-md-12 col-sm-12 my-auto setSlider">
                <div id="carouselExampleIndicators" class="carousel slide wow fadeInLeft" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/img1.jpg" class="d-block w-100 h-60" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/img2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/img3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                   
                    </a>
                </div>
            </div>
            <!-- Slider -->

            <!-- Acoditin -->
            <div class="col-lg-6 col-md-12 col-sm-12 my-auto">

        
            <div class="accordion accordion-flush r-20 wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header bg-warning" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      About Us
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body bg-dark text-white">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header bg-warning" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      About Us
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body bg-dark text-white">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header bg-warning" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      About Us
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body bg-dark text-white">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                  </div>
                </div>
              </div>
            <!-- Acoditin -->
        </div>
    </div>
</section>
    <!-- About Us -->
    <!-- Section2 -->

    <!-- section3 -->
    <!-- contact us -->
<section id="Contact">
    <div class="testimonials">
        <h1>Contact</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non perferendis, explicabo.
        </p>
    </div>


    <div class="container1 wow fadeInDown">
        <span class="big-circle"></span>
        <img src="images/shape.png" class="square" alt="" />
        <div class="form">
          <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
              dolorum adipisci recusandae praesentium dicta!
            </p>
  
            <div class="info">
              <div class="information">
                <img src="images/location1.png" class="icon" alt="" />
                <p>ABC Street H-77/56, HQ 12557</p>
              </div>
              <div class="information">
                <img src="images/email1.png" class="icon" alt="" />
                <p>lorem@ipsum.com</p>
              </div>
              <div class="information">
                <img src="images/phone.png" class="icon" alt="" />
                <p>123-456-789</p>
              </div>
            </div>
  
            <div class="social-media">
              <p>Connect with us :</p>
              <div class="social-icons">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
  
          <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
  
            <form  method="POST" autocomplete="off">
            
              <div class="input-container">
                <input type="text" name="name" class="input" />
                <label for="">Username</label>
                <span>Username</span>
              </div>
              <div class="input-container">
                <input type="email" name="email" class="input" />
                <label for="">Email</label>
                <span>Email</span>
              </div>
              <div class="input-container">
                <input type="tel" name="phone" class="input" />
                <label for="">Phone</label>
                <span>Phone</span>
              </div>
              <div class="input-container">
                <input type="text" name="subject" class="input" />
                <label for="">Subject</label>
                <span>Subject</span>
              </div>
              <div class="input-container textarea">
                <textarea name="Message" class="input Message"></textarea>
                <label for="">Message</label>
                <span>Message</span>
              </div>
              <input name="send" type="submit" value="SEND MAIL" class="sendBtn" />
            </form>
          </div>
        </div>
      </div>
  
</section>
    <!-- contact us -->

    <!-- section3 -->

    <div class="alertsss1">
        <!-- <button class="allll1" onclick="alertSuccess()">success</button> -->
      <div class="alert1 hide">
        <i class="fas fa-check-circle"></i>
        <span class="msg">Congratulation! Your message has been submitted we will contact you soon.</span>
        <div class="close-btn">
          <span class="fas fa-times"></span>
        </div>
    </div>
    </div>
    <div class="alertsss">
      <!-- <button class="allll" onclick="alertWarning()">warning</button> -->
    <div class="alert hide">
      <i class="fas fa-exclamation-circle"></i>
      <span class="msg">Oops! Message not send poor connection.</span>
      <div class="close-btn">
        <span class="fas fa-times"></span>
      </div>
  </div>
</div>


  <div class="alertsss2">
    <!-- <button class="allll2" onclick="alertMissing()">missing</button> -->
  <div class="alert2 hide">
    <i class="fas fa-exclamation-circle"></i>
    <span class="msg">Warning! Record fields has been missing.</span>
    <div class="close-btn">
      <span class="fas fa-times"></span>
    </div>
</div>
      <!-- <div class="alert alert-success" role="alert">
        <p><i class="far fa-check-circle"></i>
        <span>Congratulation! </span>Your message has been submitted we will contact you soon.</p>
      </div> -->
      <!-- <div class="alert alert-danger" role="alert">
        <p><i class="fas fa-exclamation-circle"></i>
        <span>Warning! </span>Record fields has been missing.</p>
      </div>
      <div class="alert alert-warning" role="alert">
        <p><i class="fas fa-exclamation-circle"></i>
        <span>Warning! </span>Message not sended poor connection.</p>
      </div> -->

      <!-- <p><i class="fas fa-exclamation-circle"></i><span>Warning! </span>Message not sended poor connection.</p>
      <p><i class="fas fa-exclamation-circle"></i><span>Warning! </span>Record fields has been missing.</p>
      <p><i class="far fa-check-circle"></i><span>Congratulation! </span>Your message has been submitted we will contact you soon.</p> -->
    </div>
    
    <div class="gototop text-center wow fadeInUp">
      <a href="#">
        <i class="fa fa-angle-up"></i></a>
      </div>



    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script src="wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <script>
   
        const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
    </script>


</body>

</html>
