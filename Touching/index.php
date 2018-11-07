<?php
include "db.php";
if (isset($_POST['submit'])) {
$username=$_POST['username'];
$password=$_POST['password'];
$query="insert into users(username,password)";
$query.="values('$username','$password')";
$result=mysqli_query($connection,$query);
if(!$result)
{
  die('query failed'.mysqli_error($connection)); 
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Touching Humanity</title>
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
    <div class="container">
      <a href="index.html" class="navbar-brand">TOUCHING HUMANITY</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="login_update.php" class="nav-link">UPDATE</a>
          </li>
          <li class="nav-item">
            <a href="login_update.php" class="nav-link">DONATE</a>
          </li>
          <li class="nav-item">
            <a href="#create-head-section" class="nav-link">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a href="#share-head-section" class="nav-link">SHARE</a>
          </li>
          <li class="nav-item">
            <a href="#share-head-section" class="nav-link">LOGIN</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME SECTION -->
  <header id="home-section">
    <div class="dark-overlay">
      <div class="home-inner container">
        <div class="row">
          <div class="col-lg-8 d-none d-lg-block">
            <h1 class="display-4">
              <strong>Touching Humanity</strong> cares about India's health, education, livelihood and disaster
            </h1>
            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
                 <bold>Health & Nutrition</bold>
               We provide robust health and nutrition benefits to the children coming from the most marginalised communities
              </div>
            </div>

            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
                <bold>Education</bold>
              We help children with limited means get access to quality education, with a focus on street children and girls. 
              </div>
            </div>

            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
               <bold>Child protection</bold>
              All children have the right to a healthy, happy and fulfilling life. Donate Money & Support Charity to Keep children safe & free from harm.
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card bg-primary text-center card-form">
              <div class="card-body">
                <h3>Sign Up Today</h3>
                <p>Please fill out this form to register</p>
                <form action="index.php" method="post">
          <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control">
          </div>
          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
          

          </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- EXPLORE HEAD -->
  <section id="explore-head-section">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <h1 class="display-4">Explore</h1>
          <p class="lead">You need not have abundant surplus income to donate and remove inequality. All you need, is a sense of responsibility to donate whatever you can, to help bring significant and serious change.</p>
          <a href="#" class="btn btn-outline-secondary">Find Out More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPLORE SECTION -->
  <section id="explore-section" class="bg-light text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/explore-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6">
          <h3>Explore & Connect</h3>
          <p>In our Smile on Wheels mobile hospital programme, we provide free health care service to the less privileged. Recently, in one of our health camps, we met Panbai, 105 years old lady.</p>
          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Touching Humanity has been certified as being equivalent to a U.S. public charity by NGOSource. NGOsource, a project of the Council on Foundations and TechSoup, helps streamline international giving by evaluating whether a non-U.S. organization is the equivalent of a U.S. public charity, through the process of equivalency determination (ED).
            </div>
          </div>

          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Touhing Humanity has been accredited as a GlobalGiving validated charity
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CREATE HEAD -->
  <section id="create-head-section" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <h1 class="display-4">Details</h1>
          <p class="lead">Accreditation with India Development Foundation of Overseas Indians (IDF-OI), under the Ministry of Overseas Indian Affairs, Government of India</p>
          <a href="#" class="btn btn-outline-light">Find Out More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CREATE SECTION -->
  <section id="create-section" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-2">
          <img src="img/create-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6 order-1">
          <h3>Create Your Passion</h3>
          <p>Organization in Special Consultative Status with the United Nations Economic and Social Council (ECOSOC) since 2012</p>
          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Touching Humanity has been empanelled with the National CSR Hub at TISS
            </div>
          </div>

          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
            Touching Humanity has been conferred the Social Impact Award for Outstanding Contribution in the field of Child Education by 'Pratigya' an initiative by Brands Impact
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SHARE HEAD -->
  <section id="share-head-section" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <h1 class="display-4">Share</h1>
          <p class="lead">In order that corporate can connect with good quality and well established Implementing Agencies, IICA has set up a CSR Implementing Agency (IA) Hub. This would seek to meet the urgent requirement by corporate who would look out for trustworthy and reliable implementing agencies.</p>
          <a href="#" class="btn btn-outline-light">Find Out More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SHARE SECTION -->
  <section id="share-section" class="bg-light text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/share-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6">
          <h3>Share What You Create</h3>
          <p>Touching Humanity has been listed as a member organisation with Give India and Give USA, donation platforms that identify non-profit organisations from around the country and connect them with prospective donors and like-minded institutions</p>
          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Touching Humanity has been recognized by ASSOCHAM for its “outstanding contribution to skill development training & placement in the country” through a Certificate of Merit in Best NGO category.
            </div>
          </div>

          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Touching Humanity has received recognition at the 1st ICAI CSR Awards for the ‘Best CSR Project in Women Empowerment’. The award has been instituted by the Committee for Cooperative and NPOS Sector and IND (AS) Implementation Committee of the Institute of Chartered Accountants of India, the national professional accounting body of India.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="main-footer" class="bg-dark">
    <div class="container">
      <div class="row">
        <div class="col text-center py-4">
          <h3>Touching Humanity</h3>
          <p>Copyright &copy;
            <span id="year"></span>
          </p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#contactModal">Contact Us</button>
        </div>
      </div>
    </div>
  </footer>

  <!-- CONTACT MODAL -->
  <div class="modal fade text-dark" id="contactModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Contact Us</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary btn-block">Submit</button>
        </div>
      </div>
    </div>
  </div>


  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // Init Scrollspy
    $('body').scrollspy({ target: '#main-nav' });

    // Smooth Scrolling
    $("#main-nav a").on('click', function (event) {
      if (this.hash !== "") {
        event.preventDefault();

        const hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function () {

          window.location.hash = hash;
        });
      }
    });
  </script>
</body>

</html>