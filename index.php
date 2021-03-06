<? php ?>
<html>
<title>Handscart</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Carter One' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Jacques Francois Shadow' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bonbon' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Inline' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Capriola' rel='stylesheet'>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("1-tcmn.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="hands.html" class="w3-bar-item w3-button w3-wide">LOGO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="hands.html" class="w3-bar-item w3-button"><i class="fa fa-home"></i>HOME</a>
      <a href="mission.html" class=" w3-bar-item w3-button"><i class="fa fa-photo"></i>MISSION</a>
      <a href="team.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i>TEAM</a>
      <a href="portfolio.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PORTFOLIO</a>
      <a href="finalapply.html" class="w3-bar-item w3-button"><i class="fa fa-desktop"></i> APPLY</a>
      <a href="contact.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
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
  <a href="hands.html" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="mission.html" onclick="w3_close()" class="w3-bar-item w3-button">MISSION</a>
  <a href="team.html" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="portfolio.html" onclick="w3_close()" class="w3-bar-item w3-button">PORTFOLIO</a>
  <a href="finalapply.html" onclick="w3_close()" class="w3-bar-item w3-button">APPLY</a>
  <a href="contact.html" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-left w3-text-black" style="padding:60px; padding-top:200px
  ">
    <span class="w3-jumbo w3-hide-small" style="font-family: 'Aclonica' ">Come, Join & Create</span><br>
    
    <span  style="font-family: 'Berkshire Swash';font-size:30px ; padding:15spx"><i><b>Stop wasting valuable time with stuffs that just isn't you.</b></i></span>
    <p><a href="finalapply.html" class=" w3-button w3-red w3-padding-large w3-large w3-margin-top  w3-hover"><b>Apply</b></a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
  </div>
</div>


<!-- The Services section -->
  <div class="w3-black" id="services">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center" style="margin:-35px 0px 0px 0px">MAKE EUROPE GREAT AGAIN</h2>
       <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="ourproject1.jpg" alt="Study material" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Pre Seed</b></p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('studymodal').style.display='block'">Get</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="ourproject2.jpg" alt="Blogs" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>StartUp Visa</b></p>
         <a></a><button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketmodal').style.display='block'">Get</button></a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
        <img src="ourproject3.jpg" alt="Career" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Europe Network Support</b></p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketmodal').style.display='block'">Get</button>
          </div>
        </div>
      </div>
    </div>
  </div>
 




<!-- Investment Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:120px 260px">
  <div class="w3-row-padding">
    <div class="w3-col m6" style="font-family: 'Carter One';font-size: 18px">
      <h1 style="font-family: 'Jacques Francois Shadow' " >We Invest in Social Tech.</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="24065.jpg" alt="Social Tech">
    </div>
  </div>
</div>


<!-- Process Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:100px 16px" id="pricing">
  <h1 style="font-family: 'Aclonica' ">How We Do</h1>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-32">Accelerate</li>
        <li class="w3-white w3-padding-52"><img src="growth-800x420.jpg" style="width: 200px " class="w3-hover-opacity"></li>
        
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Click here</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-section" style="float: right;">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Inspire</li>
         <li class="w3-white w3-padding-52"><img src="pixelunlimitedstoragefeat-800x420.jpg" style="width: 200px " class="w3-hover-opacity"></li>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Click here</button>
        </li>
      </ul>
    </div>
  </div>
</div>

<!---Testimonial Section-->

<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <p  style="font-family: 'Bonbon' ;font-size: 48px "><b>Testimonial</b></p>
      <p>Entrepreneurial, determined and innovative : be creative ,not afraid to fail until you succeed ,<br> visionary and out of the box thinker.<br> Ideally We are looking to make a big difference not a marginal or incremental improvement.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class=" w3-margin-right"></i>Wearable Crafted Products</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class=" w3-margin-right"></i>Domestic Crafted Produts</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class=" w3-margin-right"></i>Eatable Recipies</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>


<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding " style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="jeff-bezos-amazon.jpg" alt="John" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container">
          <h3>Joseph Bejos</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="ChrisFoster_saatchisaatchiMay2011-e1381202330931-700x418.jpg" alt="Jane" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container">
          <h3>Anja Doe</h3>
          <p class="w3-opacity">Art Director</p>
          <p>Phasellu90%us faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Jacquelyn-Tan-high-res-e1365072110562-700x418.jpg" alt="Mike" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container">
          <h3>Mikie Ross</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Maxus_NgKokJong-e1484273115246-700x418.jpg" alt="Dan" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container">
          <h3>Dan Star</h3>
          <p class="w3-opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Poster Section  -->
<div class="w3-container w3-row w3-center w3-dark-white" style="height: 800px; width: auto">
  <img src="hands.jpg" style="width: auto; height: 800px" class="w3-hover-opacity">
</div>


<!-- Media Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="work">
  <h1 class="w3-center" style="font-family: 'Capriola' ">IN Media</h1>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="Main.jpg" style="width:100% ; height: 325px" onclick="onClick(this)" class="w3-hover-opacity" alt="1st FRIENDS">
    </div>

    <div class="w3-col l3 m6" style="padding:70px">
      <img src="images (2).jpg" style="width:100% ; height: 325px" onclick="onClick(this)" class="w3-hover-opacity" alt="1st FRIENDS">
    </div>
    <div class="w3-col l3 m6" style="padding:70px">
      <img src="newspapermontage.jpg" style="width:100% ; height: 325px" onclick="onClick(this)" class="w3-hover-opacity" alt="1st FRIENDS">
    </div>
    
    <div class="w3-col l3 m6" style="float: right">
      <img src="orlando-sentinel-naples-daily-news-palm-beachpost-front-page-jef-180215_12x7_992.jpg" style="width:100%; height: 325px" onclick="onClick(this)"class="w3-hover-opacity" alt="4th FRIENDS">
    </div>
  </div>

  
  </div>
</div>



<!-- Friends Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h2 class="w3-center" style="font-family: 'Bungee Inline' ">OUR FRIENDS</h2>
  <p class="w3-center w3-large">These are the People who have collborted with our Company to get Facilated and facilitate other with the services.</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="images.jpg" style="width:100% ; height: 225px" onclick="onClick(this)" class="w3-hover-opacity" alt="1st FRIENDS">
    </div>
    <div class="w3-col l3 m6">
      <img src="azimpremji_1386585743.jpg" style="width:100% ; height: 225px" onclick="onClick(this)" class="w3-hover-opacity" alt="2nd FRIENDS">
    </div>
    <div class="w3-col l3 m6">
      <img src="laskhmimittal_1386316652.jpg" style="width:100% ; height: 225px" onclick="onClick(this)" class="w3-hover-opacity" alt="3rd FRIENDS">
    </div>
    <div class="w3-col l3 m6">
      <img src="womenentrepreneursinindia-jpg.png" style="width:100%; height: 225px" onclick="onClick(this)" class="w3-hover-opacity" alt="4th FRIENDS">
    </div>
  </div>

  
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>




<!-- Footer -->
<div class="w3-container w3-black" style="padding:5px 3px" id="contact">
  <h3 class="w3-center" style="float: left"><u>CONTACT</u></h3><br>
  <div class="w3-row-padding" style="margin-top:8px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> 11 Rue De Carnot, Kremlin Bicentre, Paris, France</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +33-755757571 +91-9024386464</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: support@handscart.com</p>
      <br>
      <form action="action_page.php" target="_blank">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>

    <div class="w3-half" style="padding-left:300px">
      <p class=" w3-xxlarge w3-margin-right" style="float: right">About Us</p><br><br><br>
      <p class=" w3-medium w3-margin-right" style="float: right">India is a land of diversity. Everything starting from <br>language dialect, clothes , traditions , art to festivals has its own flavour and essence .<br> So we at “handscart.com” help to connect Indian artisans and designers - communities throughout the developing world.<br>  With the help of people who have carried these century long art form one generation to other,we make exquisite products which are the perfect blend of design and culture.
</p>

    
  </div>
</div>
<footer class="w3-center w3-black w3-padding-8">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xxlarge w3-section">
    <a href="https://www.facebook.com/login.php" target="blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/?hl=en" target="blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome" target="blank"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="https://in.pinterest.com/" target="blank"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/" target="blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/feed/" target="blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
  <p>Copyright © 2018 - All Rights Reserved - <a href="http://www.handscart.com/" title="W3.CSS" target="_blank" class="w3-hover-text-green">Handscart.com</a></p>
</footer>

</body>
</html>
