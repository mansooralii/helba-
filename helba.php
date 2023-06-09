<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="logo/WhatsApp_Image_2023-03-07_at_17.13.23-removebg-preview.png" type="image/gif">
    <title>Helba</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/helba.css'>
    <script src='main.js'></script>



</head>
<body onload="GenerateCaptcha()">
    <!-- navbar -->

    <a id="Home"></a>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0" style=" position: fixed; width: 100%; z-index: 1;">
        <div class="container-fluid navdiv mt-0 pt-0">
            <img src="logo/new logo remove.png" style="height: 66px; padding-left: 4%;" class="mt-sm-0 mt-md-0 ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav my-lg-0 ms-auto navbar-nav-scroll"
                    style="--bs-scroll-height: 100px;padding-right: 6% ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#Home" style="color: #ffc83e;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#product">
                            Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                </form>
            </div>
        </div>
    </nav>


    <!-- header -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="css/heder-pic/puttu2new.png " class="d-block w-100" alt="..." style="height:100vh">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="css/heder-pic/No artificial colors or flavors.png" class="d-block w-100" alt="..." style="height:100vh" >
            </div>
            <div class="carousel-item">
                <img src="css/heder-pic/let food be thy medicine and medicinebe thy food.png " class="d-block w-100" alt="..." style="height:100vh">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- about -->

    <a id="About"></a>

    <div class="container"> 

        <div class="row" style="margin-top:12%;">
            <div class="col-md-6 ">
                <video src="vedio/0310-copy(3) (online-video-cutter.com).mp4" style="width: 100%; border-radius: 3PX;" loop autoplay
                    muted></video>
            </div>
            <div class="col-md-6 ps-4">

                <h1 class="abouth1 mt-5">Eat like a king in the morning...</h1>

                <p class="pt-5" style="font-size: 18px;">Every day should start with agood breakfast.
                    A complete breakfast should include protein,vitamin,and micronutrients.
                    A should have minaerals,carbohydrates and plenty of fiber.</p>
                <p style="font-size: 18px;">Don't skip breakfast for any reason.
                    don't stop eating.Those who do sowill be tired all day long.It will quickly become dull.
                    They will be restless.     </p>
                    <p style="font-size: 18px;">Made with care and authenticity, our Helba Puttu Powder is the 
                        perfect addition to your breakfast routine, giving you a healthy and nutritious 
                        start to your day. </p>
            </div>
        </div>
        <a id="product"></a>
    </div>



    <!-- product -->



    <div class="container-fluid mt-5 p-5">
        <div class="row ">


            <div class="col-12 col-sm-6 col-md-4 col-lg-3 card-li  mt-5">

                <div class="card">
                    <img src="our products/procts4-removebg-preview.png" class="proimg"
                        style="height: 292px; margin-bottom: -55px; margin-top: -24px; width: 219px;">
                    <div class="card-body">
                        <h5 class="card-title">Helba pathiri podi</h5>
                        <h5 class="h5g">500g</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <div class="btndiv">
                            <a href="#contact" id="btt" class="btn btt btn-primary">Order Now</a>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-12 col-sm-6  col-md-4 card-li col-lg-3 mt-5">

                <div class="card">
                    <img src="our products/product2-removebg-preview.png"
                        style="height: 292px; margin-bottom: -55px; margin-top: -24px; width: 219px;"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Helba puttu podi</h5>
                        <h5 class="h5g">500g</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <div class="btndiv">
                            <a href="#contact" id="btt" class="btn btt btn-primary">Order Now</a>
                        </div>

                    </div>
                </div>

            </div>
            <!-- </div> -->




            <!-- <div class="row gridiv"> -->


            <div class="col-12 col-sm-6 col-md-4 card-li col-lg-3 mt-5">

                <div class="card">
                    <img src=" our products/product3-removebg-preview.png"
                        style="height: 292px; margin-bottom: -55px; margin-top: -24px; width: 219px;"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Helba pathiri podi</h5>
                        <h5 class="h5g">1kg</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <div class="btndiv">
                            <a href="#contact" id="btt" class="btn btt btn-primary">Order Now</a>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-12 card-li col-lg-3 mt-5">

                <div class="card">
                    <img src="our products/product1-removebg-preview.png  "
                        style="height: 292px; margin-bottom: -55px; margin-top: -24px; width: 219px;"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Helba puttu podi</h5>
                        <h5 class="h5g">1kg</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <div class="btndiv">
                            <a href="#contact" id="btt" class="btn btt btn-primary">Order Now</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>


    </div>

 
    <!-- Footer -->

    <a id="contact"></a>
    <footer id="footer">
            <div class="footer-top">
              <div class="container">
                <div class="row">        
                  <div class="col-lg-3 col-md-6"> 
                    <div class="footer-info">
                      <h3>Helba </h3>
                      <p>Helba Puttupodi
                        <br>
                         Kozhikode<br><br>
                        <strong>Phone :</strong> +91 9497311492<br>
                        <strong>email :</strong> helba.foods@gmail.com<br>
                      </p>
                      <div class="social-links mt-3 " >
                      <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                             <a href="#" class="linkedin"><i class="fa-brands fa-youtube"></i></a>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-2 col-md-6 footer-links " >
                    <h4>Useful Links</h4>
                    <ul>
                    <li><i class="fa-solid fa-chevron-right"></i> <a style="text-decoration: none;"
                                    href="#Home">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i> <a style="text-decoration: none;"
                                    href="#About">About us</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i> <a style="text-decoration: none;"
                                    target="_blank" href="terms.php">Terms of service</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i> <a style="text-decoration: none;"
                                    target="_blank" href="privacypolicy.php">Privacy policy</a>
                    </ul>
                  </div>
        
                  <div class="col-lg-3 col-md-6 ftr-rgt">
                    <h4>Contact Us</h4>
                    
                    <form  id="myform" >
                      <input class="form-control mt-3" type="text" name="" placeholder="Name" id="name" required>
                      <input class="form-control mt-4"  type="text" name="mobile" placeholder="Mobile Number" id="phone" required>
            <input class="form-control mt-4"  type="email" name="email" required placeholder="Enter a valid email address" id="email" required>         
            
                     
                    </div>
          
                    <div class="col-lg-4 col-md-3" >
  
                      <textarea class="form-control mt-5" rows="4" name="message" placeholder="Message" id="message" required></textarea>
                      <div class="captha d-grid gap-2 d-md-flex justify-content-md-end ">
                      <input class="form-control mt-2 " type="text" id="txtCaptcha" style="text-align: center; border: 2PX;color: red; font-weight: bold; font-size: 20px; font-family: Modern"disabled/>
                      <!-- <button  class="re-btn btn-primary" type="button" onclick="GenerateCaptcha()">Reload</button><br> -->
                      <input class="form-control mt-2" type="text" id="txtCompare" placeholder="Enter Captcha"  /><br>
                      
                    </div>
                    <p id="message1"></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2"> 
              <div class="button-area"> 
               
                <button  style="background-color: white; height: 40px; width: 37px; border-radius: 8px;" onclick="GenerateCaptcha()"><i class="fa fa-rotate-right reload-icon"onclick="GenerateCaptcha()"></i>
                </button>
                <!-- <button  class="" onclick="">Submit</button> -->
                <input type="button" class="btn btn-primary" value="submit" onclick="ValidCaptcha()">


              
            
              <span></span>
            </div> 

            </div>
                      
                    </div>
              
                  </form>
                </div>
              
              </div>
            </div>
        
            <div class="container">
              <div class="copyright " >
                &copy; Copyright <strong><span>Helba</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                Designed by <a style="text-decoration: none;"  target="_blank" href="https://fullstackdeveloper.io/">Full Stack Developer Academy</a>
              </div>
          </footer> 
          

</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script type="text/javascript"> 
  AOS.init();
  document.addEventListener("click",function(e){if(e.target.classList.contains("gallery-item")){const src=e.target.getAttribute("src");
                  document.querySelector(".modal-img").src=src; const mymodal=new bootstrap.modal(document.getElementById('gallery-modal'));
                  mymodal.show();
                  }});


                  
  

  
     
      /* Function to Generat Captcha */  
      function GenerateCaptcha() {  
                var chr1 = Math.ceil(Math.random() * 10) + '';  
                var chr2 = Math.ceil(Math.random() * 10) + '';  
                var chr3 = Math.ceil(Math.random() * 10) + '';  
      
                var str = new Array(4).join().replace(/(.|$)/g, function () { return ((Math.random() * 36) | 0).toString(36)[Math.random() < .5 ? "toString" : "toUpperCase"](); });  
                var captchaCode = str +''+ chr3 ;  
                document.getElementById("txtCaptcha").value = captchaCode 
                
            }  
      
            /* Validating Captcha Function */ 
            function ValidCaptcha() {  
                var str1 = removeSpaces(document.getElementById('txtCaptcha').value);  
                var str2 = removeSpaces(document.getElementById('txtCompare').value);  
      
                // if (str1 == str2) return true;
                //            return false;
                if (str1 == str2){
                    document.getElementById("message1").innerHTML = "";
                   
                    
                   
       var name = $("#name");
       var email = $("#email");
       var phone = $("#phone");
       var subject = $("#subject");
       var message = $("#message");


         if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(phone) && isNotEmpty(subject) && isNotEmpty(message)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       phone: phone.val(),
                       subject: subject.val(),
                       message: message.val()
                   }, success: function (response) {
                       $('#myform')[0].reset();
                        $('.sent-notification').text("Message Send Successfully");
                   }
                });
            }
       

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
            
                caller.css('border', '');

            return true;
        
     }
     document.getElementById("message1").innerHTML="<span style='color:#31f705'> Message send successfully </span>";
                document.getElementById("myform").submit();
                }  
                else{
                    document.getElementById("message1").innerHTML = " *invalid captcha";

                }
            }  
      
            /* Remove spaces from Captcha Code */  
            function removeSpaces(string) {  
                return string.split(' ').join('');  
            } 








  </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    </body>


</html>