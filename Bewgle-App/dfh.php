<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
        
        <style>
                * {
                  box-sizing: border-box;
                }

                .zoom {
                 
                 border-radius:20%;
                  transition: transform .2s;
                
                  margin: 0 auto;
                }

                .zoom:hover {
                 
                  transform: scale(1.1); 
                }
                    
                
                        body {
          font-family: Arial;
          margin: 0;
        }

        * {
          box-sizing: border-box;
        }

        img {
          vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
          position: relative;
        }

        /* Hide the images by default */
        .mySlides {
          display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
          cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
          cursor: pointer;
          position: absolute;
          top: 40%;
          width: auto;
          padding: 16px;
          margin-top: -50px;
          color: white;
          font-weight: bold;
          font-size: 20px;
          border-radius: 0 3px 3px 0;
          user-select: none;
          -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
          background-color: rgb(255, 255, 255);
        }

        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }

        /* Container for image text */
        .caption-container {
          text-align: center;
          background-color: #222;
          padding: 2px 16px;
          color: white;
        }

        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        /* Six columns side by side */
        .column {
          float: left;
          width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
          opacity: 0.6;
        }

        .active,
        .demo:hover {
          opacity: 1;
        }
</style>
                        
                        
                            <script>
    var slideIndex = 0  ;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>

                
          
                

    </head>
    
    
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
                <a href="#" class="navbar-brand mr-5">
                   
                    <img src="Cars/Ifox.jpg" alt="" height="40px" width="30px"/>&nbsp;<font face='calibri' size='5px'><b>SixFox</b></font>
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav1">
                    <span class="navbar-toggler-icon">
                    </span>
                     
                </button>   
               
               
                    
                    <ul class="navbar-nav offset-3 mr-auto">
            <li class="nav-item ">
                <a href="#" class="nav-link active mr-1"><b>Home</b></a>
            </li>
             <li class="nav-item ">
                <a href="#" class="nav-link mr-2"><b>About Us</b></a>
            </li>
             <li class="nav-item">
                 <div class="dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><b>Services</b></a>
                 <div class="dropdown-menu">
              
                    <a href="#" class="dropdown-item ">PickUp</a>
                   
                     <a href="#" class="dropdown-item">Servicing</a>
                     <a href="#" class="dropdown-item">Accessories</a>
                     <a href="#" class="dropdown-item">Online-Booking</a>
                </div>
                
                 </div>
            </li>
             <li class="nav-item">
                <a href="#" class="nav-link mr-2"><b>Contact Us</b></a>
            </li>
        </ul>
                
               <ul class="navbar-nav">
                     <li class="nav-item ">
                <a href="#" class="nav-link">SignUp</a>
            </li>
             <li class="nav-item">
                 <a href="#" class="nav-link"><i class="fas fa-user"></i>&nbsp;LogIn </a>
            </li>
                </ul>
              </div>
        
        
        <div class="container-fluid mt-5">
        
        <div class="carousel slide" data-ride="carousel" id="c1" >
                   
            <ol class="carousel-indicators">
                <li data-slide-to="0" data-target="#c1" class="active"></li>
                <li data-slide-to="1" data-target="#c1" ></li>
                <li data-slide-to="2" data-target="#c1" ></li>
                <li data-slide-to="3" data-target="#c1" ></li>
                
                
                
            </ol>
                
                <div class="carousel-inner img">
                <div class="carousel-item active ">
                    <img src="A6/mediagallery_images__0.jpg" alt="" style="width:100%;height:100%"/>
                    
                <div class="carousel-caption"><font color="white" size="6px" style="text-shadow: 2px 2px 4px #000000;"><b>A6 Sedan</b> </font> <br>
                       
                    

                   </div>
                </div>
                 <div class="carousel-item">
                     <img src="A6/mediagallery_images__1.jpg" alt="" style="width:100%;height:100%"/>
                
                 
                </div>
                    
                 <div class="carousel-item">
                    
                     <img src="A6/mediagallery_images__9.jpg" alt="" style="width:100%;height: 100%"/>
                   
                </div>
                    
                            <div class="carousel-item">
                                <img src="A6/mediagallery_images__25.jpg" alt="" style="width:100%;height:100%"/>                
                            </div>
        
       </div>
        </div><br><br>
        
        <div class="container">
  <h1>The Audi A6</h1>
 
  <blockquote>
      <p>Innovative technologies, progressive design, and exciting versatile equipment options:<br>
        The Audi A6 Sedan combines these values into an exceptionally sporty and elegant symbiosis.<br>
        Elegant and progressive at the same time, this versatility and comfort open up a new kind of mobility.</p>
    
  </blockquote>
</div>
        
        
        
        
        
        <div class="container">
            <h2 style="text-align:center">Slideshow Gallery</h2>
            
<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="A6/mediagallery_images__23.jpg" alt="" style="width:100%"/>
   
  </div>
    

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    
    <img src="A6/mediagallery_images__2.jpg" alt="" style="width:100%"/>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>

 
    <img src="A6/mediagallery_images__5.jpg" alt="" style="width:100%"/>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="A6/mediagallery_images__7.jpg" alt="" style="width:100%"/>
    
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
  
    <img src="A6/mediagallery_images__18.jpg" alt="" style="width:100%"/>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>

    <img src="A6/mediagallery_images__15.jpg" alt="" style="width:100%"/>
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(-1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>
            
            
            <div class="row">
    <div class="column">
      <img class="demo cursor" src="A6/mediagallery_images__23.jpg" style="width:100%" onload="currentSlide(1)" alt="">
    </div>
    <div class="column"> 
      <img class="demo cursor" src="A6/mediagallery_images__2.jpg"  style="width:100%" onclick="currentSlide(2)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="A6/mediagallery_images__5.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="A6/mediagallery_images__7.jpg"style="width:100%" onclick="currentSlide(4)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="A6/mediagallery_images__18.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
    </div> 
    <div class="column">
      <img class="demo cursor" src="A6/mediagallery_images__15.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
    </div>
  </div>
        </div>  
       
 
 </div>

        
        <div class="container-fluid mt-5">
            <button type="button" class="btn btn-light float-right" data-toggle="modal"
                    data-target="#modal1">Dimensions</button>
            
            <div class="modal col-8 mt-5 ml-5" id="modal1" data-backdrop="static">
                
                    <div class="modal-content">
                        
                        <div class="modal-header">Dimensions of A-6
                            <span class="close" data-dismiss="modal">&times;</span>
                        </div>
                        
                        <div class="modal-body">
                            
                            <img src="A6/dimensions.jpg" alt="" width="750px" height="450px"/>
                        </div>
                        <div class="modal-footer">
                       <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>   </div>
                    </div>
            
                
            </div>
         
            <div class="container">
                
                <button type="button" class="btn btn-light float-left" data-toggle="modal"
                        data-target="#modal2">Technical Specifications</button>
                
                <div class="modal " id="modal2" data-backdrop="static">
                
                    <div class="modal-content">
                        
                        <div class="modal-header">Specifications of A6
                            <span class="close" data-dismiss="modal">&times;</span>
                        </div>
                   
                        
                        
                        
                        
                        <div class="modal-body">
                            <table>
                                <tr>
                                    <td>
                                        <img src="A6/a6 modal.jpg" alt=""/></td> 
                                    <td> <img src="A6/compare_exterior_front_modal.jpg" alt=""/></td>
                                </tr>
                            </table>
                           <hr>
                           <table>
                               <tr>
                                   <th>Engine <hr></th>
                               </tr>
                                <tr>
                                   <td>Engine type: Inline 4-cylinder spark-ignition engine with gasoline direct injection, exhaust turbocharger and Audi valvelift system<hr> </td>
                               </tr>
                              <tr>
                                   <td>Engine management: Sequential high-pressure direct and multipoint manifold injection with adaptive idle-charge control, overrun fuel cut-off, adaptive lambda control;
                                       mapped ignition with solid-state high-voltage distribution via single-spark coils,
                                       cylinder-selective adaptive knock control; manifold pressure measurement,
                                       active boost-pressure control via an electric wastegate actuator  <hr></td>
                               </tr>
                               
                               
                               <tr>
                                   <td>EExhaust emission control: Close-coupled ceramic catalytic converter, oxygen sensor in front of turbocharger and behind catalytic converter  <hr></td>
                               </tr>
                               
                               <tr>
                                   <th>Performance data <hr></th>
                               </tr>
                              
                                <tr>
                                   <td>Displacement: 1798 cm3<hr></td>
                               </tr>
                                <tr>
                                   <td> Max. output, kW (hp) at rpm: 140 (190)/4200-6200 <hr></td>
                               </tr> 
                               <tr>
                                   <td>Max. torque, Nm at rpm: 320/1400 - 4100  <hr></td>
                               </tr>
                           
                               
                               <tr>
                                   <th>Driveline<hr></th>
                               </tr>
                              
                               <tr>
                                   <td>Drive: Front Wheel Drive   <hr></td>
                               </tr>
                           
                               <tr>
                                   <td>Clutch: Hydraulically operated wet dual clutch axially arranged, dual-mass flywheel with centrifugal pendulum  <hr></td>
                               </tr>
                           
                               <tr>
                                   <td>Transmission: 7-speed dual-clutch transmission  <hr></td>
                               </tr>
                               
                               <tr>
                                   <th>Suspension <hr></th>
                               </tr>
                               
                               <tr>
                                   <td>Front: Adaptive Air Suspension   <hr></td>
                               </tr>
                               <tr>
                                   <td>Rear: Adaptive Air Suspension   <hr></td>
                               </tr>
                               <tr>
                                   <td>Tyres: 245/45 R 18   <hr></td>
                               </tr>
                               <tr>
                                   <td>Wheels: 45.72 cms (R18) 8 J x 18  <hr></td>
                               </tr>
                           
                               
                               
                               <tr>
                                   <th>Brake system<hr></th>
                               </tr>
                              
                               <tr>
                                   <td>Brake system: Dual-circuit brake system with diagonal split, electronic stabilization control (ESC), brake booster, hydraulic brake assist; front: ventilated disks, aluminum composite floating calipers; rear: solid disks, cast floating calipers with electromechanical parking brake    <hr></td>
                               </tr>
                               
                               
                               
                               <tr>
                                   <th>Steering<hr></th>
                               </tr>
                              
                               <tr>
                                   <td>Steering: Electromechanical steering with speed-dependent power assistance   <hr></td>
                               </tr>
                             <tr>
                                   <th>Weights & Performance data<hr></th>
                               </tr>
                              
                               <tr>
                                   <td>SKerb weight: 1740 Kg   <hr></td>
                               </tr>
                               <tr>
                                   <td>Gross weight limit: 2150 Kg  <hr></td>
                               </tr>
                               <tr>
                                   <td>Top speed: 233 kph <hr></td>
                               </tr>
                               <tr>
                                   <td>Acceleration 0-100 kmph: 7,9 Seconds   <hr></td>
                               </tr>
                           </table>
                                </div>
                        
                        <div class="modal-footer">
                       <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>   </div>
                    </div>
            </div>
                
            </div>
        </div>
        

        <br><br>
                <div class="container" align="center">
            <a href="online_booking.php" class="btn btn-success">Book Now</a>
                </div><br>
        
        
        
        
        
         <div class="container-fluid" style="height: 20px">
            <nav class="navbar navbar-expand-md navbar-light bg-light sticky-bottom" id="navbar">
                <ul class="navbar-nav mr-auto">
                    &COPY;2019 SixFox. All Rights Reseverd.</ul>
                <ul class="navbar-nav">
            <li class="nav-item ">
                <a href="#" class="nav-link mr-1"><i class="fab fa-facebook-square"></i></a>
            </li>
             <li class="nav-item ">
                <a href="#" class="nav-link mr-1"><i class="fab fa-twitter-square"></i></a>
            </li>
             <li class="nav-item ">
                <a href="#" class="nav-link mr-1"><i class="fab fa-linkedin"></i></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link mr-1"><i class="fab fa-instagram"></i></a>
            </li>
         
            </ul>
            </nav>
        </div>
        
        
        
        </div>
        </body>
        </html>

