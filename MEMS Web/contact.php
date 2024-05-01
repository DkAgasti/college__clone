<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="modern.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


</head>

<body style=" background-color: rgba(188, 188, 188, 0.67);">

<nav class="navbar navbar-expand-lg navbar-dark px-5" style="background-color: darkgreen;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="IMAGE/laga.png" width="100px;" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="modern.php">HOME <i class="fa-solid fa-house"></i></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ABOUT US
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="About.php">About MEMS </a></li>
              <li><a class="dropdown-item" href="#">Why MEMS</a></li>
              <li><a class="dropdown-item" href="vision.php">Mission and Vission</a></li>
              <li><a class="dropdown-item" href="chairperson.php">Chairperson</a></li>
              <li><a class="dropdown-item" href="principal.php">Principal</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              COURSES <i class="fa-solid fa-book"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="course.php">Btech</a></li>
              <li><a class="dropdown-item" href="MBA.php"> MBA</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="galery.php">GALLERY <i class="fa-solid fa-image"></i></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              FACILITIES
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="library.php">Library</a></li>
              <li><a class="dropdown-item" href="seminar.php"> Seminar</a></li>
              <li><a class="dropdown-item" href="transportation.php">Transportation</a></li>
              <li><a class="dropdown-item" href="Hostel.php">Hostel</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="contact.php">CONTACT US <i class="fa-solid fa-phone"></i></a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="whatsapp" style="position: fixed; bottom: 40px; right:20px">
    <a href="https://wa.me/917847027306" target="_blank">
    <img src="IMAGE/WHATSAPP.png" style="width: 50PX; " alt="">
    </a>
  </div>

    <div class="w-50 m-auto" >
      <h1>Get in touch</h1>
      <form action="userinfo.php" method="post">
        <div class="from-group">
          <label> Name</label>
          <input type="text" name="user" class="form-control">
        </div>

        <div class="from-group">
          <label> Emailid</label>
          <input type="text" name="email" class="form-control">
        </div>

        <div class="from-group">
          <label> Mobile no.</label>
          <input type="text" name="mobile" class="form-control">
        </div>

        <div class="from-group">
          <label> Comments</label>
         <textarea class="form-control" name="comments"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 15px;"> Submit</button>
      </form>
    </div>

    <footer class="footer">
    <div class="container1">
      <div class="row">
        <div class="footer-col">
          <h4>Best Institute For Education</h4>
          <p style="color: #fff;text-align: justify;">Contrary to popular belief, Lorem Ipsum is not simply random text.
            It has roots in a piece of classical Latin
            literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>
        </div>
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="modern.php">Home</a></li>
            <li><a href="About.php">About Us</a></li>
            <li><a href="course.php">Courses</a></li>
            <li><a href="galery.php">Gallery</a></li>
            <li><a
                href="#">Facilities</a>
            </li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href=" https://antiragging.in/affidavit_registration_disclaimer.html#">Anti ragging</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact Info</h4>
          <ul>
            <li><a href="#">Mail :principal@mems.net.in <br>
            principaloffice@mems.net.in</a></li>
            <li><a href="#">Call :6290-456194</a></li>
            <li><a href="#">Fax : +91 -123 4567890</a></li>
            <li><a href="#">visit us : www.mems.org.in</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/mems.edu.in?mibextid=ZbWKwL#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href=" https://wa.me/917847027306"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>