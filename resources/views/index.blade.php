
<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Promote Product</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<style>
body,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

.slide-control{color:#fff;font-size:80px;left:30px;margin-top:-70px;position:absolute;top:50%;}
.slide-control.right{left:auto;right:30px;}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("https://images.unsplash.com/photo-1511268559489-34b624fbfcf5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80");
  min-height: 80%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="/" class="w3-bar-item w3-button w3-wide"><i  class="fa fa-home"></i>Home</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button"><i  class="fa fa-eye"></i> ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> INFLUENCER</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="/login" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i> Login</a>
      <a href="/register" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i> Sign up</a>
    </div>

    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">INFLUENCER</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="/login" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
  <a href="/register" onclick="w3_close()" class="w3-bar-item w3-button">SIGN UP</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:150px">
  <div style="background-color:#252885; opacity: 0.6;padding:20px;">
   <h1>Want to promote your product! <br> Then why are you waiting let's promote it</h1>
    <br>

    <h4>Click on promote now button!</h4>
    <br>
  </div> 
   <a href="/register" class="btn btn-primary w3-padding-large w3-large w3-margin-top"><li class="fa fa-level-up">   Promote Now</li></a>
    
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center w3-large">We promote your products</p>
  
  <p class="w3-center w3-large">On/In</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Social Media Platforms</p>
      <p>Youtube,Instagram,Facebook</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-map-marker  w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Public Places</p>
      <p>Essel World,Juhu Beach,Gateway of India,Marine Drive</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Public Transportation</p>
      <p>Bus,Train,Bus/Train Stations</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart  w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Print Media</p>
      <p>Books,Newspapers,Magazines</p>
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container w3-light-grey" >
<div class="w3-container" style="padding:101px 16px" id="team">
  <h3 class="w3-center">An Influencer</h3>
  <p class="w3-center w3-large">That works with us to promote your products</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
  
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  @foreach($influencers as $item)

    <div class="carousel-item {{$item['id']== $ids->id ?'active':''}}">  
    <div class="w3-center">
      <div class="">
        <img src="{{asset('influencerimagesbyadmin/' .$item['influencer_picture'])}}" alt="John" style="width:200px; height: 250px;">
        <div class="w3-container">
          <h3>{{$item['influencer_name']}}</h3>
          <p><a href=""><i class="fa fa-map-marker"></i> {{$item['influencer_location']}}</a></p>
          <a href="{{$item['instagram_link']}}">
            <button class="btn btn-primary">
              <i class="fa fa-instagram"></i>
              Instagram
            </button>
          </a>
          
          <a href="{{$item['facebook_link']}}">
            <button class="btn btn-primary">
              <i class="fa fa-facebook"></i>
              Facebook
            </button>
          </a>

          <a href="{{$item['youtube_link']}}">
            <button class="btn btn-primary">
              <i class="fa fa-youtube"></i>
              Youtube 
            </button>
          </a>
          
          
          <p></p>
        </div>
      </div>
    </div>
    </div>
  @endforeach    


    
</div>
    <a style="color:#354741;" class="left slide-control" href="#carouselExampleControls"  data-slide="prev"><i class="fa fa-arrow-circle-left"></i></a>
    <a style="color:#354741;" class="right slide-control" href="#carouselExampleControls" role="button" data-slide="next"><i class="fa fa-arrow-circle-right"></i></a>
  <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>


  </div>
</div>
</div>



<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>PRICING</h3>
  <p class="w3-large"></p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>Number of quotation</b> 4</li>
        <li class="w3-padding-16"><b>With</b> 6 platforms & 15 Influencers</li>
        
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 46</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <a href="/register" class="w3-button w3-black w3-padding-large" >Sign Up</a>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
        <li class="w3-padding-16"><b>Number of quotation</b> 6</li>
        <li class="w3-padding-16"><b>With</b> 8 platforms & 17 Influencers</li>
        
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="/register" class="w3-button w3-black w3-padding-large" >Sign Up</a>
        </li>
        
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>Number of quotation</b> 8</li>
        <li class="w3-padding-16"><b>With</b> 12 platforms & 19 Influencers</li>
        
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 60</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <a href="/register" class="w3-button w3-black w3-padding-large" >Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large"><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>Ulhasnagar,Thane</p>
  <p class="w3-center w3-large"><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 9146332153</p>
  <p class="w3-center w3-large"><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: pawanlulla021@gail.com</p>
  <div style="w3-center w3-large">
  <p class="w3-center w3-large"> <a href="/home" class="w3-button w3-black" type="submit"><i class="fa fa-paper-plane"></i>want a quotation or already have a quotation</a> 
        
      </p>
    
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>© 2021 pawan lulla</p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
