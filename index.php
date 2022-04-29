<?php
include 'header.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&family=Bree+Serif&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&family=Bree+Serif&display=swap"
        rel="stylesheet">
  <style>

    *{
      margin:0;
      padding:0;
      box-sizing: border-box;
      font-family: 'Bree Serif', serif;
    }
    #navbar {
      justify-content: center;
      align-items: center;
      display: flex;
      align-items: center;
      position: sticky;
      cursor: pointer;
      margin-top: 31px;
      /* background-color: rgba(0,0,0,0.6); */
      top: 0px;
    }

    #navbar ul {
      display: flex;

      justify-content: space-between;
      font-family: 'Baloo 2', cursive;
    }

    #navbar ul li {
      list-style: none;
      font-size: 1.3rem;
      padding: 1px;


    }

    #navbar ul li a {
      color: white;
      display: block;
      padding: 10px 21px;
      /* border-radius: 25px; */
      text-decoration: none;
      border-color: black;


    }

    #navbar ul li a:hover {
      color: black;
      background-color: white;
    }

    .box-container {
      width: 100%;
      height: auto;
      background: rgb(135, 206, 235, 0.5);
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .box {
      width: 21%;
      height: auto;
      background: white;
      margin: 20px;
      box-sizing: border-box;

    }

    .box ul {
      padding-top: 12px;
      padding-left: 28px;
      list-style-type: none;
    }

    .box ul li {
      color: black;
      padding-top: 2px;
    }
    .content{
      margin-bottom:10px;
      background: rgb(135, 206, 235, 0.5);
    }
    .content_style{
      background:white;
      padding: 10px;
    }
    .idcontent{
      text-align:center !important;
      justify-content:center;
    }
    .borderless{
      border:none;
    }
    .text-xxs{
      font-size:13px;
      word-wrap: break-word;

    }
    .header-area {
    background: white;
    width: 100%;
    padding: 12px 30px;
    z-index: 999;
    border-bottom: 2px solid #909090ad;
    /* box-shadow: 0px 0px 7px 3px red; */
}
.header-container {
    display: table;
    width: 100%;
    margin: auto;
    
}

  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12 nav-1">ANSHIKA CONSULTANCY</div>
        </div>
        <div class="row">
          <div class="col-md-12" style="font-size:20px;">Anshika HR & Compliance Solutions(AHCS)</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">Tel: +91 8920153817</div>
        </div>
        <div class="row">
          <div class="col-md-12">Email: hccs1985@gmail.com</div>
        </div>
      </div>



      <!-- <div>
        <nav id="navbar">

          <ul class="menu_items">
            <li class="items home" id="home" onclick="showTab(event)"><a href="#" class="btn btn-primary home">Home</a>
            </li>
            <li class="items about" id="about" onclick="showTab(event)"><a href="#" class="btn btn-primary about">About
                Us</a></li>
            <li class="items service" id="service" onclick="showTab(event)"><a href="#"
                class="btn btn-primary service">Services</a></li>
            <li class="items job" id="job" onclick="showTab(event)"><a href="#" class="btn btn-primary job">Job
                Search</a></li>
            <li class="items contact" id="contact" onclick="showTab(event)"><a href="#"
                class="btn btn-primary contact">Contact Us</a></li>
            <li class="items site" id="site" onclick="showTab(event)"><a href="#"
                class="btn btn-primary site">Sitemap</a></li>
          </ul>
        </nav>
      </div> -->
      
    <nav class="navbar navbar-expand-lg navbar-light bg-light mr-auto">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active home" aria-current="page" onclick="showTab(event)" href="#">Home</a>
        <a class="nav-link about" onclick="showTab(event)" href="#">About Us</a>
        <a class="nav-link service" onclick="showTab(event)" href="#">Services</a>
        <a class="nav-link Job_Search" onclick="showTab(event)" href="#">Job Search</a>
        <a class="nav-link site" onclick="showTab(event)" href="#">Sitemap</a>
        <a class="nav-link contact" onclick="showTab(event)" href="#">Contact Us</a>  
      </div>
    </div>
  </div>
</nav>
      <!--Box Container-->
      <div class="row box-container">
        <div class="box col-md-3 p-md-2">
          <div class="row">
          <ul class="list-group col-md-12">
            <li class="list-group-item  borderless text-xxs h4 col-md-12" style="border:none !important;">
              <h4>Social Audits</h4>
            </li>
            <li class="list-group-item borderless text-xxs">SEDEX(SEMETA)</li>
            <li class="list-group-item borderless text-xxs">SA8000(SAAS)</li>
            <li class="list-group-item borderless text-xxs">BSCI</li>
            <li class="list-group-item borderless text-xxs">FAIR TRADE</li>
            <li class="list-group-item borderless text-xxs">INDITEX</li>
            <li class="list-group-item borderless text-xxs">WALMART</li>
            <li class="list-group-item borderless text-sm "><span style=" word-wrap: break-word;
;">AMAZON/MYNTRA</span></li>
            <li class="list-group-item borderless text-sm text-wrap">FLIPKART</li>
            <li class="list-group-item borderless text-xxs">DISNEY</li>
            <li class="list-group-item borderless text-xxs">BUYER COC</li>
            <li class="list-group-item borderless text-xxs">HIGG INDEX</li>
            <li class="list-group-item borderless text-xxs">SLCP</li>
            <li class="list-group-item borderless text-xxs">INTERNAL AUDIT</li>
            
          </ul>
          </div>
         
        </div>
        <div class="box col-md-3 p-md-2">
          <ul class="list-group">
            <li class="list-group-item borderless text-xxs">
              <h4>Technical/Security</h4>
            </li>
            <li class="list-group-item borderless text-xxs">ISO 9001:2015</li>
            <li class="list-group-item borderless text-xxs">BUYER TECHNICAL</li>
            <li class="list-group-item borderless text-xxs">ISO 14001</li>
            <li class="list-group-item borderless text-xxs">C-TPAT</li>
            <li class="list-group-item borderless text-xxs">WRAP</li>
          </ul>
        </div>
        <div class="box col-md-3 p-md-2">
          <ul class="list-group">
            <li class="list-group-item borderless text-xxs">
              <h4>Organic</h4>
            </li>
            <li class="list-group-item borderless text-xxs">GOTS</li>
            <li class="list-group-item borderless text-xxs">GRS</li>
            <li class="list-group-item borderless text-xxs">RCS</li>
            <li class="list-group-item borderless text-xxs">OCS</li>
            <li class="list-group-item borderless text-xxs">BRC</li>
            <li class="list-group-item borderless text-xxs">FSI</li>
            <li class="list-group-item borderless text-xxs">FSSI</li>
            <li class="list-group-item borderless text-xxs">OEKOTEX</li>
          </ul>
        </div>
        <div class="box col-md-3 p-md-2">
          <ul class="list-group">
            <li class="list-group-item borderless text-xxs">
              <h4>Legal/HR</h4>
            </li>
            <li class="list-group-item borderless text-xxs">ESI/EPF RETURN/CHALLAN</li>
            <li class="list-group-item borderless text-xxs">MONTHLY SALARY PROCESS</li>
            <li class="list-group-item borderless text-xxs">FACTORY LEGAL SETUP</li>
            <li class="list-group-item borderless text-xxs">HR POLICIES AND PROCEDURES</li>
            <li class="list-group-item borderless text-xxs">FIRE,HEALTH AND SAFETY,ANTISEXUAL HARASSEMENT,HR WORK,AWARENESS TRAINING PROGRAM</li>
          </ul>
        </div>
      </div>

      <!-- Slider -->
      <div class="row my-md-3">
        <div class="col-md-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="slide1.jpg" class="d-block w-100 " style="height: 470px !important;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="slide2.jpg" class="d-block w-100 " style="height: 470px !important;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="slide3.jpg" class="d-block w-100 " style="height: 470px !important;" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>

      <!-- Content -->



     <div class="content">
     <div class="row mt-4 p-md-3 idcontent" id="home_box">
        <div class="offset-md-2 col-md-8 content_style">
          <h3 class="mt-3">ANSHIKA CONSULTANCY</h3>
          <p>Experience of nearly 2 decades in different fields.
            Providing services to entire India.
            More than 14 Years of experience in Social Compliance activities as per the requirements of all major US &
            EUROPIAN customers and buying houses.
            More than 14 Years of experience in Social Audits, Ethical Audits, C-TPAT audits, FCCA audits and other
            Management Systems Audits.
            Experience in Developing HR Policies and procedures for Factories and organizations.
            Team of Industries top professionals in front row of Advisory part.
            More than 15 years of experience in complete setup of Export Oriented factory in Textile, Garments,
            Accessory Industry.
            Working with action plan and timely delivery of Services.
            Highly experienced in Developing social compliance activities in supplier management
            Liaising with Govt. departments for all Licenses and Consent.</p>
        </div>
      </div>


      <div class="row  mt-4 idcontent p-md-3" style="display:none;" id="about_box">
        <div class="offset-md-2 col-md-8 content_style">
          <h3>ABOUT US</h3>
          <P>ISO,SA,8000,BSCI,SEDEX,C-TPAT,SLCP and SASO Audits Professional with 14 Years of Experience into Various Roles</P>
        </div>

      </div>
      <div class="row mt-4 idcontent p-md-3" style="display:none" id="service_box">
        <div class="offset-md-2 col-md-8 content_style">
          <h3>SERVICES</h3>
          <p>We provide consultancy services everywhere in India, in the fields of Social Compliance Services, Audit
            Services, HR Services, Implementation of C-TPAT (Customs Trade Practices Against Terrorism) requirements,
            Implementation of FCCA (Factory Capacity and Capability Audit) requirements, Setup of Export Oriented
            Factories etc. apart from Factory Act, Statutory Benefits & Deductions & other required labour laws as
            necessary.We also provide consultancy services to meet the requirements of audit as per COC / standards /
            certifications like SEDEX (SMETA), BSCI, FLA, ICS, WCA, SA8000, WRAP, ISO9001, ISO14001 & OHSAS etc & other
            management trainings and Company Policy & Procedures.</p>
        </div>

      </div>
      <div class="row mt-4 idcontent p-md-3" style="display:none;" id="job_box">
        <div class="offset-md-2 col-md-8 content_style">
          <h3>JOBS</h3>
          <P>WILL BE UPDATED SOON................</P>

        </div>

      </div>
      <div class="row mt-4 idcontent p-md-3" style="display:none" id="contact_box">
        <div class="offset-md-2 col-md-8 content_style">
          <form action="create.php" method="post" name="myForm">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="fn">Name</label><span class="text-muted fw-bold text-xs pl-md-1">*</span>
                <input type="text" class="form-control form-control-sm" name="fn" id="fn" placeholder="">
                <span class="text-xs pl-md-1 fw-bold text-danger" id="fn_error"></span>
              </div>
              <div class="form-row">
                <div class=" col-md-12">
                  <label for="wn">Email Address</label>
                  <input type="email" class="form-control form-control-sm" name="ea" id="ea" placeholder="" value="">
                </div>
              </div>
              <div class="form-row">
                <div class=" col-md-12">
                  <label for="fn">First Name</label><span class="text-muted fw-bold text-xs pl-md-1">*</span>
                  <input type="text" class="form-control form-control-sm" name="fn" id="fn" value="">
                  <span class="text-xs pl-md-1 fw-bold text-danger" id="fn_error"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="cn">Your Message</label><span class="text-muted fw-bold text-xs pl-md-1">*</span>
                  <textarea class="form-control" name="ad" id="ad" rows="2" placeholder=""
                    oninput="autoArea(this)"></textarea>
                  <span class="text-xs pl-md-1 fw-bold text-danger" id="ad_error"></span>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <div class="text-center">
                    <button type="submit" class="btn btn-info bg-gradient-info mt-4" id="createBtn"
                      name="create_order">Send</button>
                  </div>
                </div>
              </div>

            </div>
          </form>
        </div>

      </div>
      <div class="row mt-4 p-md-3 idcontent" style="display:none;" id="site_box">
        <div class="offset-md-2 col-md-8 content_style">
        <h3>SITTEMAP</h3>
        <P><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7004.43190759014!2d77.0561813733492!3d28.623289097357492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sD-24%2C4th%20floor%20Uttam%20Nagar%20west%20delhi%20-110059!5e0!3m2!1sen!2sin!4v1651252898936!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></P>
        </div>
        
      </div>


     </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

      <script>
        function showTab(event) {
          let sec = event.target.className;

          if (sec == 'nav-link active home') {
            console.log(sec);
            document.querySelector('#home_box').style.display = "block";
            document.querySelector('#about_box').style.display = "none";
            document.querySelector('#service_box').style.display = "none";
            document.querySelector('#job_box').style.display = "none";
            document.querySelector('#contact_box').style.display = "none";
            document.querySelector('#site_box').style.display = "none";
          }
          else if (sec == 'nav-link about') {
            console.log(sec);
            document.querySelector('#home_box').style.display = "none";
            document.querySelector('#about_box').style.display = "block";
            document.querySelector('#service_box').style.display = "none";
            document.querySelector('#job_box').style.display = "none";
            document.querySelector('#contact_box').style.display = "none";
            document.querySelector('#site_box').style.display = "none";

          }
          else if (sec == 'nav-link service') {
            console.log(sec);
            document.querySelector('#home_box').style.display = "none";
            document.querySelector('#about_box').style.display = "none";
            document.querySelector('#service_box').style.display = "block";
            document.querySelector('#job_box').style.display = "none";
            document.querySelector('#contact_box').style.display = "none";
            document.querySelector('#site_box').style.display = "none";

          }
          else if (sec == 'nav-link Job_Search') {
            console.log(sec);
            document.querySelector('#home_box').style.display = "none";
            document.querySelector('#about_box').style.display = "none";
            document.querySelector('#service_box').style.display = "none";
            document.querySelector('#job_box').style.display = "block";
            document.querySelector('#contact_box').style.display = "none";
            document.querySelector('#site_box').style.display = "none";

          }
          else if (sec == 'nav-link contact') {
            console.log(sec);
            document.querySelector('#home_box').style.display = "none";
            document.querySelector('#about_box').style.display = "none";
            document.querySelector('#service_box').style.display = "none";
            document.querySelector('#job_box').style.display = "none";
            document.querySelector('#contact_box').style.display = "block";
            document.querySelector('#site_box').style.display = "none";

          }
          else if (sec == 'nav-link site') {
            console.log(sec);
            document.querySelector('#home_box').style.display = "none";
            document.querySelector('#about_box').style.display = "none";
            document.querySelector('#service_box').style.display = "none";
            document.querySelector('#job_box').style.display = "none";
            document.querySelector('#contact_box').style.display = "none";
            document.querySelector('#site_box').style.display = "block";

          }

        };
      </script>

</body>

</html>