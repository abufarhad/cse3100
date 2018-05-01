<!DOCTYPE html>
<html>
<title>cse3100</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link id="bootstrap-style" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href={{URL::to('/')}} class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>CSE3100</a>
  <a href="#aboutus" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="About Us"><i class="fa fa-globe"></i></a>
  <a href="#insert" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Insert"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Show Data"><i class="fa fa-print"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Check Query"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">4</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">1st Query</a>
      <a href="#" class="w3-bar-item w3-button">2nd Query</a>
      <a href="#" class="w3-bar-item w3-button">3rd Query</a>
      <a href="#" class="w3-bar-item w3-button">4th Query</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="images/ruetlogo.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">PROJECT</h4>
         <p class="w3-center"><img src="/images/cselogo.png" class="w3-circle" style="height:106px;width:106px" alt="Picture"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>Database Lab Projects</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme">CSE3100</i></p>
         <p><i class="fa fa-tasks fa-fw w3-margin-right w3-text-theme"></i> April 17, 2018</p>
        </div>
      </div>
      <br>
      
      
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <ul class="list-group">
                <li class="list-group-item">Md Sabbir Hossain Pulok 1503118</li>
                <li class="list-group-item">Abu Farhad 1503116</li>
                <li class="list-group-item">Sadia Kabir Dina 1503117</li>
                <li class="list-group-item">Urmi Sen 1503119</li>
              </ul>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
        </div>      
      </div>
      <br>
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">CSE 3100</span>
            <span class="w3-tag w3-small w3-theme-d4">Googong Subdivision Project</span>
            <span class="w3-tag w3-small w3-theme-d3">Canberra Highway Project</span>
            <span class="w3-tag w3-small w3-theme-d2">Googong</span>
            <span class="w3-tag w3-small w3-theme-d1">Burton Canberra</span>
            <span class="w3-tag w3-small w3-theme">Canberra</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>CSE 3100</strong></p>
        <p>Sessional Based On Database Course</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    <div class="w3-col m7">
        @yield('content')
    </div>
    <!-- Right Column -->
    {{-- <div class="w3-col m2"> --}}
            {{-- <div class="w3-card w3-round w3-white w3-center">
              <div class="w3-container">
                <p>Upcoming Events:</p>
                <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
                <p><strong>Project Showcasing</strong></p>
                <p>Tuesday 10:50</p>
                <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
              </div>
            </div>
            <br>
            
            <div class="w3-card w3-round w3-white w3-center">
              
            </div>
            <br>
            
            <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
              <p>ADS</p>
            </div>
            <br>
            
            <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
              <p><i class="fa fa-bug w3-xxlarge"></i></p>
            </div> --}}
            
          <!-- End Right Column -->
          </div>
          
        <!-- End Grid -->
        </div>
        
      <!-- End Page Container -->
      </div>
      <br>
      
      <!-- Footer -->
      <footer class="w3-container w3-theme-d3 w3-padding-16" id="aboutus">
        <h5>Huon Construction Co.</h5>
      </footer>
      
      <footer class="w3-container w3-theme-d5">
        <p>Powered by <a href="https://www.facebook.com" target="_blank"> Section BGroup 4</a></p>
      </footer>
       
      <script>
      // Accordion
      function myFunction(id) {
          var x = document.getElementById(id);
          if (x.className.indexOf("w3-show") == -1) {
              x.className += " w3-show";
              x.previousElementSibling.className += " w3-theme-d1";
          } else { 
              x.className = x.className.replace("w3-show", "");
              x.previousElementSibling.className = 
              x.previousElementSibling.className.replace(" w3-theme-d1", "");
          }
      }
      
      // Used to toggle the menu on smaller screens when clicking on the menu button
      function openNav() {
          var x = document.getElementById("navDemo");
          if (x.className.indexOf("w3-show") == -1) {
              x.className += " w3-show";
          } else { 
              x.className = x.className.replace(" w3-show", "");
          }
      }
      </script>
      
      </body>
      </html> 
      
