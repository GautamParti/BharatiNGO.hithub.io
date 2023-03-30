<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style12.css">
    <title>welcome</title>
  </head>
  <body>
  <nav class="navbar h-nav-responsive" >
       
       <ul class="nav-list v-nav-responsive">
        <div class="logo"><img src="img/logo2.png" alt="logo"></div>
           <li><a href="#home">home</a> </li>
           <li><a href="#childcare">childcare</a> </li>
           <li><a href="#animalcare">animalcare</a></li>
           <li><a href="#contactus">contact us</a></li>
       </ul>
       <div class="login-signup v-nav-responsive">
       <?php 
      session_start();
      if(!isset($_SESSION['username'])&& empty($_SESSION['username'])){
        echo '
        <a href="#"  id="button"><button class="btn">Login</button></a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn" id="button1">signup</button>
        &nbsp;&nbsp;&nbsp;&nbsp;
        ';
      }else{
        echo '
        <a href="logout.php"><button class="btn" id="button2" action="logout.php">logout</button></a>
      ';
    }
     ?>

     </div>
       <div class="burger">
         <div class="line"></div>
         <div class="line"></div>
         <div class="line"></div>
       </div>
   </nav>
   <div class="popup">
   <div class="popup-content" >
    <form action="login.php" method="post">
     <div class="logo2">
       <img  src="img/logo2.png" alt="user">
       <img src="img/close.png" alt="close" class="close">
       <input type="text" id="username" name="username" placeholder="Username">
       <input type="password" id="password" name="password" placeholder="Password">
       <a href="#"><button class="btn1">login</button></a>
    
     </div>
     </form>
   </div>
 </div>
 <div class="popup1">
   <div class="popup-content1" >
   <form  method="post">
     <div class="logo2">
       <img  src="img/logo2.png" alt="user">
       <img src="img/close.png" alt="close" class="close1">
       <input type="text" id="username" name="username" placeholder="username">
       <input type="password" id="password" name="password" placeholder="Password">
       <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password">
       <button type="submit" class="btn1">signup</button>
     </div>
</form>
   </div>
 </div> 
 
     <!-- first section -->
    
     <section  class="firstSection background" id="home" >
        <div class="box-main ">
            <div class="firstHalf">
                <p class="text-big">PREVENT DISEASE , SAVE THE CHILDREN</p>
               
                  <p>Affordable, non-discriminatory access to the vaccine is a human right. 
                  Ensuring access to the vaccine is not only the right thing to do.</p>
                 <p> Many children lose their life because of inadquate vaccination</p>
                 <p>To fight this our NGO,BharatiNGO is providing free vaccination which includes :-</p>
                 <p>
                 <ul>
                  <li> polio</li>
                  <li> Measles</li>
                  <li> typhoid</li>
                  <li> hepatits</li>
                 </ul>
                </p>
              
              <div class="buttons">
                <button class="btn" id="watchbutton" onclick="location.href='https://www.youtube.com/watch?v=G0-98gJsVR0'"> Watch the video</button>
              </div>
            </div>
            <div class="secondHalf">
                <img src="img/polio vaccination.jpg">
            </div>
        </div>
    </section> 


<!-- second section -->
<section  class="secondSection" id="childcare">

<div class="paras">
<p class="sectionTag text-big">PREVENT HUNGER , SAVE HUMANITY</p><br>
<p class="sectionSubTag text-small">Proper nutrition is necessary for human developement both physically or mentally</p>
<p class="sectionSubTag text-small">Our organization provide free mid-day meals to many schools in all over India, it is partially funded by Government of India</p>  
 <div class="buttons">
  <button class="btn" id="watchbutton" style="background-color: red;" onclick="location.href='https://www.youtube.com/watch?v=OvcvWyh5-T4'" > Watch the video</button>
 </div>
</div>
<div class="thumbnail">
  <img src="img/Background.jpg">
</div>

</section>

<!-- third section -->
<section class="background2">
<section class="secondSection sec-left " id="animalcare">

  <div class="param">
  <p class="sectionTag text-big">PREVENT DISEASE , SAVE ANIMALS</p><br>
  <p class="sectionSubTag text-small">Many street animals have very tough lives.Disease are very much prevalent among them</p>
  <p class="sectionSubTag text-small">By giving them vaccinations , we make there life a little bit easy and also help in preventing zoonotic diseases to react out to humans. we offer vaccinations for these disease</p>  
  <p>
    <ul>
     <li> Rabies</li>
     <li> whooping cough</li>
     <li> canine distemper </li>
    </ul>
   </p>
   <div class="buttons">
    <button class="btn" id="watchbutton" onclick="location.href='https://www.youtube.com/watch?v=y_V9KYrwJmk'"> Watch the video</button>
  </div>
</div>

  <div class="thumbnail2">
    <img src="img/Dog.jpg">
  </div>
</section>
</section>
<!-- forth section  -->
<section class="secondSection">

  <div class="paras">
  <p class="sectionTag text-big">OUR ORGANIZATION AND YOUR HELP </p><br>
  <p class="sectionSubTag text-small"></p>
  <p class="sectionSubTag text-small">If you want a free vaccination or food campaign in your colony or locality . Give your address and phone number in below form to get in contact with us</p>  

  </div>
  <div class="thumbnail2">
    <img src="img/4thsec.jpg">
  </div>
</section>

<section class="contact" id="contactus">
  <h2 class="center"> CONTACT US</h2>
  <div class="form">
    <!-- <img src="close.png" alt="close" class="close"> -->
  <form action="index.php" method="post">
    <input class="form-inp"type="text" name="name" id="name" placeholder="name">
    <input class="form-inp" type="text" name="phone" id="phone" placeholder="phone">
    <input class="form-inp" type="email" name="email" id="email" placeholder="email">
    <textarea class="form-inp" type="text" name="address" id="address" cols="30" rows="10" placeholder="address"></textarea><br>
    <button class="btn btn-grey">Submit</button>
  </form>
  </div>
</section>

<footer>
   <p class="text-footer">
     NGO registered by Government of india
   </p>
</footer>
 <script src="script.js"></script>
  </body>
</html>