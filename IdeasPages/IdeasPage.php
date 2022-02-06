<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <title>
    Ideas Page
  </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,h1,h2,h3,h4,h5,h6 {
      font-family: "Raleway", sans-serif
    }

    .projectidea{
      width: 100%;
      height: 250px;
      object-fit: cover;
    }
  </style>
  <body class="w3-light-grey w3-content" style="max-width:1600px">
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
      <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
          <i class="fa fa-remove"></i>
        </a>
        <a href = "../home.html" class="w3-button" title="Return to Home Page">
          <img src="IdeaPageImages/EnvironmentLogo.jpg" style="width:45%;" class="w3-round">
        </a>
          <br><br>
        <?php
          if(isset($_SESSION['loggedIn'])){
            echo '<h4 id="welcome-email"><b>'.$_SESSION['username'].'</b></h4>';
            echo '<p class="w3-text-grey" id="welcome-username">Welcome, '.$_SESSION['username'].'</p>';
          }
          
          
          /*
          else if($_SESSION['loggedIn'==false]){
            echo '<h4 id="welcome-email"><b>USERNAME</b></h4>';
            echo '<p class="w3-text-grey" id="welcome-username">Welcome, NAME</p>';
          }*/
        ?>
        
        
      </div>
      
      <div class="w3-bar-block">
        <a href="#ideapage" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal">
          <i class="fa fa-th-large fa-fw w3-margin-right"></i>
          Idea Page
        </a> 
        <a href="#createidea" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">
          <i class="fa fa-user fa-fw w3-margin-right"></i>
          Create Idea
        </a> 
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">
          <i class="fa fa-envelope fa-fw w3-margin-right"></i>
          Contact Us
        </a>
      </div>
      <div class="w3-panel w3-large">
        <a href="https://twitter.com/HackathonBubs?ref_src=twsrc%5Etfw" class="fa fa-twitter w3-hover-opacity w3-hover-opacity" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay">
    </div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">
      <!-- Header -->
      <header id="ideapage">
        <a href="#ideapage">
          <img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity">
        </a>
        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()">
          <i class="fa fa-bars"></i>
        </span>
        <div class="w3-container">
          <h1><b>Idea Page</b></h1>
          <div class="w3-section w3-bottombar w3-padding-16">
            <span class="w3-margin-right">Filter:</span> 
            <button class="w3-button w3-black">ALL</button>
            <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Material</button>
            <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Product</button>
          </div>
        </div>
      </header>
      
      <!-- First Photo Grid-->
      <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
          <img src="/IdeasPages/IdeaPageImages/ReuseFoodContainer.jpg" alt="Reuse Food Containers" style="width:100%" class="w3-hover-opacity projectidea">
          <button class="w3-button w3-block w3-white" onclick="openAccordion('accordion1')"> Click to try this out!</button>
          <div class="w3-container w3-white w3-hide" id="accordion1">
            <p><b>Reusing Food Containers</b></p>
            <p>An eco-friendly way to upcycle your food containers!.</p>
            <h5><u>Materials Needed:</u></h5>
            <li>A single food container</li>
            <h5><u>Steps</u></h5>
            <p>1.&nbsp Grab a food container and wash the insides with soap thoroughly</p>
            <p>2.&nbsp Put anything inside!</p>
          </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
          <img src="/IdeasPages/IdeaPageImages/CandleJars.jpg" alt="Use candle jars to hold things" style="width:100%" class="w3-hover-opacity projectidea">
          <button class="w3-button w3-block w3-white" onclick="openAccordion('accordion2')"> Click to try this out!</button>
          <div class="w3-container w3-white w3-hide" id="accordion2">
            <p><b>Reuse Candle Jars</b></p>
            <p>Eco Friendly</p>
            <h5><u>Materials Needed:</u></h5>
            <li>A single candle jar</li>
            <li>A Knife or Spoon</li>
            <h5><u>Steps</u></h5>
            <p>1.&nbsp Grab a candle jar and take out the wax inside that's left with a spoon or knife</p>
            <p>2.&nbsp Put anything inside!</p>
          </div>
        </div>
        <div class="w3-third w3-container">
          <img src="/IdeasPages/IdeaPageImages/ReuseClothesPillow.jpg" alt="Reuse clothes for pillowcase" style="width:100%" class="w3-hover-opacity projectidea">
          <button class="w3-button w3-block w3-white" onclick="openAccordion('accordion3')"> Click to try this out!</button>
          <div class="w3-container w3-white w3-hide" id="accordion3">
            <p><b>Pillowcase made of clothes</b></p>
            <p>Prasent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            <h5><u>Materials Needed:</u></h5>
            <li>A button up shirt</li>
            <li>A pillow</li>
            <li>A thread</li>
            <h5><u>Steps</u></h5>
            <p>1.&nbsp Measure the shirt. The front and back of the pillow cover need to be one inch larger than the pillow form. For example, with a 14-inch square pillow, the fabric should be 15 inches x 15 inches.</p>
            <p>2.&nbsp Cut two identical pieces of fabric with what you have measured</p>
            <p>3.&nbsp Sew them together with thread and insert the pillow between them!</p>
          </div>
        </div>
      </div>
      <br>
      <!-- Second Photo Grid-->
      <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
          <img src="/IdeasPages/IdeaPageImages/plasticBottlePlant.PNG" alt="Reuse water bottle for planting" style="width:100%" class="w3-hover-opacity projectidea">
          <button class="w3-button w3-block w3-white" onclick="openAccordion('accordion4')"> Click to try this out!</button>
          <div class="w3-container w3-white w3-hide" id="accordion4">
            <p><b>Plastic bottle planters</b></p>
            <p>Present tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            <h5><u>Materials Needed:</u></h5>
            <li>Empty plastic bottle (any size)</li>
            <li>Masking tape</li>
            <li>Googly eyes</li>
            <li>Fine sandpaper (300+ Grit)</li>
            <li>Recycled buttons or other decorations</li>
            <li>Glue stick or hot glue (low setting)</li>
            <li>Plant and soil</li>
            <li>Acrylic paint and/or spray paint for plastic
                In green, blue or white (depending on craft)</li>
            <li>Paint brush</li>
            <li>Chalk marker or permanent marker in black (and pink for Peekaboo Cat)</li>
            <li>Utility knife and scissors</li>
            <li>Glue</li>
                </li>
            <li>Scissors</li>
            <h5><u>Steps</u></h5>
            <p>1.&nbsp Use the masking tape to tape a line around the bottle. This will give you a straight line to cut.</p>
            <p>2.&nbsp Pierce a hole in the bottle with a utility knife. Tip: keep the blade retracted, only exposing the tip for more control.</p>
            <p>3.&nbsp With scissors roughly cut out your shapes.</p>
            <p>4.&nbsp After the top of the bottle is removed go back around and clean up the edges.</p>
            <p>5.&nbsp Lightly sand the outside of the bottle to roughen the surface. This will help the paint to stick. Wipe clean (make sure bottle is clean and dry).</p>
            <p>6.&nbsp Paint the bottle with chosen shade of acrylic paint, this will take several coats. Tip: use a hair dryer to speed drying between coats. Spray paint made for plastic can be used if you already have a can at home.</p>
          </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
          <img src="/IdeasPages/IdeaPageImages/ReuseBottleSprinkler.jpg" alt="Reuse Bottle as sprinkler" style="width:100%" class="w3-hover-opacity projectidea">
          <button class="w3-button w3-block w3-white" onclick="openAccordion('accordion5')"> Click to try this out!</button>
          <div class="w3-container w3-white w3-hide" id='accordion5'>
            <p><b>Plastic Bottle Sprinkler</b></p>
            <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            <h5><u>Materials Needed:</u></h5>
            <li>A plastic bottle</li>
            <li>A drill</li>
            <li>Duct tape</li>
            <h5><u>Steps</u></h5>
            <p>1.&nbsp Use the masking tape to tape a line around the bottle. This will give you a straight line to cut.</p>
            <p>2.&nbsp Pierce a hole in the bottle with a utility knife. Tip: keep the blade retracted, only exposing the tip for more control.</p>
            
          </div>
        </div>
        <div class="w3-third w3-container">
          <img src="/IdeasPages/IdeaPageImages/ReusePillBottle.jpg" alt="Reusing Pill Bottle" style="width:100%" class="w3-hover-opacity projectidea">
          <button class="w3-button w3-block w3-white" onclick="openAccordion('accordion6')"> Click to try this out!</button>
          <div class="w3-container w3-white w3-hide" id="accordion6">
            <p><b>Lorem Ipsum</b></p>
            <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <div class="w3-center w3-padding-32">
        <div class="w3-bar">
          <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
          <a href="#" class="w3-bar-item w3-black w3-button">1</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
        </div>
      </div>

      <div class="w3-container w3-padding-large" style="margin-bottom:32px">
        <header id="createidea">
          <a href="#createidea"></a>  
            <h4><b>Create Idea</b></h4>
            <p>Create Your Own Projects Here!</p>
            <hr>
            <!-- Create Idea Section -->
            <div class="w3-container w3-padding-large w3-light-green">
              <hr class="w3-opacity">
              <form action="createideaconnect.php" method="POST">
                <div class="w3-section">
                  <label>Idea Title</label>
                  <input class="w3-input w3-border" type="text" name="Title">
                </div>
                <div class="w3-section">
                  <label>Description</label>
                  <input class="w3-input w3-border" type="text" name="Description">
                </div>
                <div class="w3-section">
                  <label>Materials Required</label>
                  <input class="w3-input w3-border" type="text" name="Materials">
                </div>
                <div class="w3-section">
                  <label>Upload An Image Here</label>
                  <input class ="w3-input w3-border" type="file" id="myFile" name="Filename">
                </div>
                <br>
                <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Post</button>
              </form>
            </div>

    <!--   <h4>How much I charge: Pricing Tables</h4>
        <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-third w3-margin-bottom">
            <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
              <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
              <li class="w3-padding-16">Web Design</li>
              <li class="w3-padding-16">Photography</li>
              <li class="w3-padding-16">1GB Storage</li>
              <li class="w3-padding-16">Mail Support</li>
              <li class="w3-padding-16">
                <h2>$ 10</h2>
                <span class="w3-opacity">per month</span>
              </li>
              <li class="w3-light-grey w3-padding-24">
                <button class="w3-button w3-teal w3-padding-large w3-hover-black">Sign Up</button>
              </li>
            </ul>
          </div>
          
          <div class="w3-third w3-margin-bottom">
            <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
              <li class="w3-teal w3-xlarge w3-padding-32">Pro</li>
              <li class="w3-padding-16">Web Design</li>
              <li class="w3-padding-16">Photography</li>
              <li class="w3-padding-16">50GB Storage</li>
              <li class="w3-padding-16">Endless Support</li>
              <li class="w3-padding-16">
                <h2>$ 25</h2>
                <span class="w3-opacity">per month</span>
              </li>
              <li class="w3-light-grey w3-padding-24">
                <button class="w3-button w3-teal w3-padding-large w3-hover-black">Sign Up</button>
              </li>
            </ul>
          </div>
          
          <div class="w3-third">
            <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
              <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
              <li class="w3-padding-16">Web Design</li>
              <li class="w3-padding-16">Photography</li>
              <li class="w3-padding-16">Unlimited Storage</li>
              <li class="w3-padding-16">Endless Support</li>
              <li class="w3-padding-16">
                <h2>$ 25</h2>
                <span class="w3-opacity">per month</span>
              </li>
              <li class="w3-light-grey w3-padding-24">
                <button class="w3-button w3-teal w3-padding-large w3-hover-black">Sign Up</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    --> 
            <hr>
            <!-- Contact Section -->
            <div class="w3-container w3-padding-large w3-light-gray">
              <h4 id="contact"><b>Contact Our Team</b></h4>
              <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
                <div class="w3-third w3-dark-gray">
                  <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                  <p>sustainabilityreusability@gmail.com</p>
                </div>
                <div class="w3-third w3-teal">
                  <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
                  <p>Ottawa, Canada</p>
                </div>
                <div class="w3-third w3-dark-grey">
                  <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
                  <p>(613)-581-7601</p>
                </div>
              </div>
              <hr class="w3-opacity">
              <form action="action_page.php" method = "post">
                <div class="w3-section">
                  <label>First Name</label>
                  <input class="w3-input w3-border" type="text" name="first_name" required>
                </div>
                <div class="w3-section">
                  <label>Last Name</label>
                  <input class="w3-input w3-border" type="text" name="last_name" required>
                </div>
                <div class="w3-section">
                  <label>Email</label>
                  <input class="w3-input w3-border" type="text" name="email" required>
                </div>
                <div class="w3-section">
                  <label>Message</label>
                  <br><textarea rows="5" name="message" cols="30" required> </textarea>
                </div>
                <button type="submit" name = "submit" value="Submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
              </form>
            </div>
            <hr>
      <!-- Footer 
      <footer class="w3-container w3-padding-32 w3-green">
      <div class="w3-row-padding">
        <div class="w3-third">
          <h3>Sustainability</h3>
          <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
          <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        </div>
      
        <div class="w3-third">
          <h3>BLOG POSTS</h3>
          <ul class="w3-ul w3-hoverable">
            <li class="w3-padding-16">
              <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
              <span class="w3-large">Lorem</span><br>
              <span>Sed mattis nunc</span>
            </li>
            <li class="w3-padding-16">
              <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
              <span class="w3-large">Ipsum</span><br>
              <span>Praes tinci sed</span>
            </li> 
          </ul>
        </div>

        <div class="w3-third">
          <h3>POPULAR TAGS</h3>
          <p>
            <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">London</span>
            <span class="w3-tag w3-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">DIY</span>
            <span class="w3-tag w3-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Family</span>
            <span class="w3-tag w3-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Shopping</span>
            <span class="w3-tag w3-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Games</span>
          </p>
        </div>

      </div>
      </footer>
    -->
    <!-- End page content -->
          </div>
  </body>
  <script>
  // Script to open and close sidebar
  function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
  }
   
  function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
  }

  function openAccordion(id){
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
  </script>
</html>
