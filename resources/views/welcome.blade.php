<!DOCTYPE html>
<html>
<title>Lab Project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body,h1,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('/images/construction.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("/images/construction2.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("/images/construction3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#insert" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-cloud-upload"></i> INSERT</a>
    <a href="#runquery" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-send"></i> Run Query</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Huon <span class="w3-hide-small">Contractors</span> Company</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT Huon</h3>
  <p class="w3-center"><em>Construction Company</em></p>
  <p>Huon is a construction company.Huon will be among the first choice for our clients, especially for complex or difficult projects.
      We will be valued partners inspiring long-term relationships.</p>
  <div class="w3-row">

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">14+</span><br>
    Employees
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">5+</span><br>
    Projects
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">4+</span><br>
    Departments
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">10+</span><br>
    Achievements
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">Insert & Show</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="insert">
  <h3 class="w3-center">Data Insertion</h3>
  <p class="w3-center"><em>Here are you can add or show the data table.</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div style=" background-image:url(/images/employee.jpg); width:100% height:600px">
        <h2 style="font-family: Comic Sans MS, serif; font-size:14pt color:black">Employee</h2><br>
        <hr class="w3-clear">
        <p style="font-family: Comic Sans MS, serif; font-size:12pt; color:#b23120">You can add or show the data for the employee table</p>
        <a href={{URL::to('/employee')}}><button type="button" class="btn btn-primary btn-md"><i class="fa fa-server"></i>Insert</button></a>
        <a href={{URL::to('/viewemployee')}}><button type="button" class="btn btn-danger btn-md"><i class="fa fa-comment"></i>  Show</button></a>
    </div>
    <div style=" background-image:url(/images/project.jpg); width:100% height:600px">
      <h2 style="font-family: Comic Sans MS, serif; font-size:14pt color:#dd270f">Project</h2><br>
      <hr class="w3-clear">
      <p style="font-family: Comic Sans MS, serif; font-size:12pt; color:#b23120">You can add or show the data for the project table</p>
      <a href={{URL::to('/project')}}><button type="button" class="btn btn-primary btn-md"><i class="fa fa-server"></i>Insert</button></a>
      <a href={{URL::to('/viewproject')}}><button type="button" class="btn btn-danger btn-md"><i class="fa fa-comment"></i>  Show</button></a>
  </div>
  <div style=" background-image:url(/images/department.jpg); width:100% height:600px">
    <h2 style="font-family: Comic Sans MS, serif; font-size:14pt color:#dd270f">Department</h2><br>
    <hr class="w3-clear">
    <p style="font-family: Comic Sans MS, serif; font-size:12pt; color:#b23120">You can add or show the data for the department table</p>
    <a href={{URL::to('/department')}}><button type="button" class="btn btn-primary btn-md"><i class="fa fa-server"></i>Insert</button></a>
    <a href={{URL::to('/viewdepartment')}}><button type="button" class="btn btn-danger btn-md"><i class="fa fa-comment"></i>  Show</button></a>
</div>
<div style=" background-image:url(/images/address.jpg); width:100% height:600px">
  <h2 style="font-family: Comic Sans MS, serif; font-size:14pt color:#dd270f">Employee Address</h2><br>
  <hr class="w3-clear">
  <p style="font-family: Comic Sans MS, serif; font-size:12pt; color:#b23120">You can add or show the data for the employee address table</p>
  <a href={{URL::to('/address')}}><button type="button" class="btn btn-primary btn-md"><i class="fa fa-server"></i>Insert</button></a>
  <a href={{URL::to('/viewaddress')}}><button type="button" class="btn btn-danger btn-md"><i class="fa fa-comment"></i>  Show</button></a>
</div>
<div style=" background-image:url(/images/salary.png); width:100% height:600px">
  <h2 style="font-family: Comic Sans MS, serif; font-size:14pt color:#dd270f">Employee Salary</h2><br>
  <hr class="w3-clear">
  <p style="font-family: Comic Sans MS, serif; font-size:12pt; color:#b23120">You can add or show the data for the employee salary table</p>
  <a href={{URL::to('/salary')}}><button type="button" class="btn btn-primary btn-md"><i class="fa fa-server"></i>Insert</button></a>
  <a href={{URL::to('/viewsalary')}}><button type="button" class="btn btn-danger btn-md"><i class="fa fa-comment"></i>  Show</button></a>
</div>
<div style=" background-image:url(/images/ftpt.jpg); width:100% height:600px">
  <h2 style="font-family: Comic Sans MS, serif; font-size:14pt color:#dd270f">Full Time Part Time Work</h2><br>
  <hr class="w3-clear">
  <p style="font-family: Comic Sans MS, serif; font-size:12pt; color:#b23120">You can add or show the data for the employee ft_pt work</p>
  <a href={{URL::to('/ftptwork')}}><button type="button" class="btn btn-primary btn-md"><i class="fa fa-server"></i>Insert</button></a>
  <a href={{URL::to('/viewftptwork')}}><button type="button" class="btn btn-danger btn-md"><i class="fa fa-comment"></i>  Show</button></a>
</div>

    
<a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Back To Top</a>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide" style="text-color:black">Run Query</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="runquery">
  <h3 class="w3-center">CHECK YOUR QUERY</h3>
  <p class="w3-center"><em>Run and check your required query</em></p>

  <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading"style="background-color: #481ef4; color:blanchedalmond">
          <h1>1st Query</h1>
        </div>
        <div class="panel-body">
        <p> List the names of all <b>Engineers</b> in <b>Googong Subdivision</b> project located at <b>Googong</b> city</p>
        <a href={{URL::to('/run1stquery')}}><button type="button" class="btn btn-danger"><i class="fa fa-braille"></i>  Run 1st Query</button></a> 
        </div>
      </div>
  </div>   
  <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading"style="background-color: #481ef4; color:blanchedalmond">
          <h1>2nd Query</h1>
        </div>
        <div class="panel-body">
        <p> List the names of all <b>Labour</b> in <b>Googong Subdivision</b> project located at <b>Googong</b> city who work more than <b>20 hours</b> per week. </p>
        <a href={{URL::to('/run2ndquery')}}><button type="button" class="btn btn-danger"><i class="fa fa-braille"></i>  Run 2nd Query</button></a> 
        </div>
      </div>
  </div> 
  <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading"style="background-color: #481ef4; color:blanchedalmond">
          <h1>3rd Query</h1>
        </div>
        <div class="panel-body">
        <p>Retrieve the names and addresses of all employees who work on at least one project located in <b>Burton Canberra</b> but whose department has no location in <b>Canberra</b>.</p>
        <a href={{URL::to('/run3rdquery')}}><button type="button" class="btn btn-danger"><i class="fa fa-braille"></i>  Run 3rd Query</button></a> 
        </div>
      </div>
  </div>  
  <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="background-color: #481ef4; color:blanchedalmond">
          <h1>4th Query</h1>
        </div>
        <div class="panel-body">
        <p> Retrieve the names of employees who work on both the  <b>Googong Subdivision and Burton Highway</b> project.</p>
        <a href={{URL::to('/run4thquery')}}><button type="button" class="btn btn-danger"><i class="fa fa-braille"></i>  Run 4th Query</button></a> 
        </div>
      </div>
  </div> 
  <div class="col-sm-12 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading" style="background-color: #481ef4; color:blanchedalmond">
          <h1>5th Query</h1>
        </div>
        <div class="panel-body">
        <p> Create a view which lists out the emp_name, dept_name, type_of_work, basic, allowance, deduction, salary from the above relational databases.</p>
        <a href={{URL::to('/runviewquery')}}><button type="button" class="btn btn-danger"><i class="fa fa-braille"></i>  Run 5th Query</button></a> 
        </div>
      </div>
  </div>  
</div>

<!-- Footer -->
<footer class="w3-center w3-teal w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="#" title="W3.CSS" target="_blank" class="w3-hover-text-black">huonco.com</a></p>
</footer>
 
<!-- Add Google Maps -->
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
