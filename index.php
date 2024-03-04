<?php 
$connection=mysqli_connect("localhost","root","","home");
$statement="SELECT * FROM `hometable` WHERE `id`=1";
$fetch=mysqli_query($connection,$statement);
$row=mysqli_fetch_assoc($fetch);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['name']?></title>
    <link rel="icon" href="https://i.ibb.co/zRsTj3p/Frame-1-37.png">
    <script src="https://kit.fontawesome.com/5ed9f8e5e4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" class="stylesheet">

    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="media.css"/>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script> 
</head>
<body>
<header> 
    <!-- <h1>My Portfolio</h1> -->
    <label class="switch">
        <input type="checkbox" id="darkModeToggle">
       <span class="slider round"></span>
    </label>
</header>
    <nav id="desktop_nav">
        <div class="logo"><?php echo $row['name']?></div>
        <div>
            <ul class="nav-links">
                <li><a href="#home" style="--i:1;">Home</a></li>
                <li><a href="#about" style="--i:2;">About</a></li>
                <li><a href="#skill"style="--i:3;">Expertise</a></li>
                <li><a href="#work"style="--i:4;">Skill</a></li>
                <li><a href="#projects"style="--i:5;">Projects</a></li>
                <li><a href="#sp"style="--i:6;">Artwork</a></li>
                <li><a href="#contact"style="--i:7;">Contact</a></li>
            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav">
        <div class="logo"><?php echo $row['name']?></div>
        <div class="hamburger-menu">
          <div class="hamburger-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="menu-links">
            <li><a href="#about" onclick="toggleMenu()">About</a></li>
            <li><a href="#skill" onclick="toggleMenu()">Expertise</a></li>
            <li><a href="#work" onclick="toggleMenu()">skill</a></li>
            <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
            <li><a href="#sp" onclick="toggleMenu()">Artwork</a></li>
            <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
          </div>
        </div>
      </nav>
      <section id="profile">
        <div class="section__pic-container">
          <img src=<?php echo $row['picture']?> alt="sumaiya khan profile picture" id="imgs"/>
        </div>
        <div class="section__text">
          <p class="section__text__p1" style="color: white;"><?php echo $row['h1']?></p>
          <h1 class="title" style="color: orange;"><?php echo $row['name']?></h1>
          <!-- <p class="section__text__p2" style="color: white;">And I'm  <span class="multiple-text" ></span></p> -->
          <h3>And I'm <span class="text" style="color: orange;"> </span></h3>
          <p style="color: white;"><?php echo $row['description']?></p>
          <div class="btn-container">
            <button
              class="btn btn-color-2"
              onclick="window.open('./assets/resume-example.pdf')"
            >
              Download CV
            </button>
            <button class="btn btn-color-1" onclick="location.href='./#contact'">
              Contact Info
            </button>
          </div>
          <div id="socials-container">
            
            <?php
                if($row['email']){ ?>
                <a href=<?php echo $row['email']?> target="_blank" style="--i:8;"><i class="fa fa-envelope"></i></a>
              <?php
                }
            ?>
            <?php
                if($row['github']){ ?>
            <a href= <?= $row['github']?> style="--i:9;"><i class="fa-brands fa-github"></i></a>
            <?php
                }
            ?>
            <?php
                if($row['code']){ ?>
             <a href=<?=$row['code']?> target="_blank" style="--i:10;"><i class="fa fa-code"></i></a> 
             <?php
                }
            ?>
            <?php
                if($row['linkdin']){ ?>
            <a href=<?=$row['linkdin']?>  target="_blank" style="--i:11;"><i class="fa-brands fa-linkedin"></i></a>
            <?php
                }
            ?>
          </div>
        </div>
        <div class="homes"></div>
      </section>
      
      <!-- Add this section after the previous sections -->
          <section id="animated-section">
        <div class="animated-background"></div>
        <div class="center-content">
          <h2 class="animated-text">Get to Know More</h2>
        </div>
        <div class="water-drop drop-1"></div>
  <div class="water-drop drop-2"></div>
  <div class="water-drop drop-3"></div>
  <div class="water-drop drop-4"></div>
  <div class="water-drop drop-5"></div>
      </section>
 <header> 
    <!-- <h1>My Portfolio</h1> -->
    <label class="switch">
        <input type="checkbox" id="darkModeToggle">
       <!-- <span class="slider round"></span> -->
    </label>
</header>  

    <section id="about">
      <!-- <p class="section__text__p1" style="color: aqua;">Get To Know More</p> -->
      <h1 class="title">About<span style="color: orange;"> Me</span> </h1>
      <div class="section-container">
        <div class="section__pics-container">
          <img
            src="about.png"
            alt="Profile picture"
            class="about-pic"
          />
        </div>
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <img
                src="education.png"
                alt="Experience icon"
                class="icon"
              />
              <h3 style="color: orange;">Education</h3>
              <p style="color: white;">Secondary School Certificate Examination (2018)<br /> Higher Secondary Certificate Examination(2020)</p>
            </div>
            <div class="details-container">
              <img
                src="KUET logo.png"
                alt="Education icon"
                class="icon"
              />
              <h3 style="color: orange;">Education</h3>
              <p style="color: white;">B.Sc. in Computer Science and Engineering</p>
              <h2 style="color: rgb(191, 178, 178);">2021-Present</h2>
            </div>
          </div>
          <div class="text-container">
            <p   style="color: white;">
              I am currently enrolled third year first term in the Department of Computer Science and Engineering at Khulna University of Engineering & Technology, where I am actively pursuing my studies and exploring various aspects of the field.

              My academic journey began at Collegiate Girls' High School and college, and I continued to Dinajpur Government College for my intermediate college education. I am proud to be part of the prestigious Khulna University of Engineering & Technology, where I am actively engaged in my coursetravelling and exploring various aspects of computer science.
              
              As I progress through my academic career, I am developing a strong foundation in computer science principles and technologies. I look forward to further opportunities for learning and growth, with a keen interest in the dynamic and evolving field of computer science.
            </p>
          </div>
        </div>
      </div>
      <img
        src="arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#skill'"
      />
    </section>
    
    <section class="skillss_section" id="skill">
      <h1 class="title">My <span style="color: orange;">Expertise</span></h1>
    
      <div class="skillss__container bd-grid">
        <div class="skill-category">
        <style>
              .load0 {
                width: 0%;
              }
              </style>
          <i class="fa-solid fa-code"></i>
          <h3 style="color: orange;">Coding Languages</h3>
          <?php

  $statementSkill="SELECT * FROM `coding`";
  $fetchSkill=mysqli_query($connection,$statementSkill);
  while($rowSkill=mysqli_fetch_assoc($fetchSkill)){
    ?>

  <div class="custom-skill">
  <div class="skill__data">
  <div class="custom-skill-name"><?= $rowSkill['skill_name']?></div>
  <div class="skill-level"><?= $rowSkill['skill_level']."%"?></div>
  </div>
  
  <div class="custom-skill-bar">
    <div class="custom-skill-level load0"></div>
  </div>
</div>

  <?php
}

?>


          
          <!-- Add more frontend skills as needed -->
        
        </div>
    
        <div class="skill-category">
          <i class="fa-solid fa-crop"></i>
          <h3 style="color: orange;">Frontend Development</h3>
          <!-- <div class="ssk"> -->
            <!-- <h3 class="skillss__subtitle">BACKEND</h3> -->
            
            
            <?php

$statementSkill="SELECT * FROM `frontend`";
$fetchSkill=mysqli_query($connection,$statementSkill);
while($rowSkill=mysqli_fetch_assoc($fetchSkill)){
  ?>

  <div class="custom-skill">
  <div class="skill__data">
  <div class="custom-skill-name"><?= $rowSkill['skill_name']?></div>
  <div class="skill-level"><?= $rowSkill['skill_level']."%"?></div>
  </div>
  
  <div class="custom-skill-bar">
    <div class="custom-skill-level load0"></div>
  </div>
</div>

  <?php
}

?>

         
          
          
         
          <img
        src="arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#work'"
      />
          </div>
         
       
          <!-- <img
        src="arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#work'"
      /> -->
      </div>
     
    
    
     </section> 


<section class="skills section" id="work">
 
  
  <h2 class="title">MY <span style="color: orange;">SKILLS</span></h2>
  <div class="skills__container bd-grid">
    <div class="skills__content">
      <i class="bx bx-code forte__icon"></i>
      <h3 class="skills__subtitle">Frontend Development</h3>
      <p class="skills__description">
        Proficient in HTML, CSS, and JavaScript. Experience with front-end frameworks like Bootstrap and React.
      </p>
    </div>
    <div class="skills__content">
      <i class="bx bx-data forte__icon"></i>
      <h3 class="skills__subtitle">Backend Development</h3>
      <p class="skills__description">
        Skilled in server-side scripting languages like PHP and Python. Familiar with databases like MySQL and MongoDB.
      </p>
    </div>
    <div class="skills__content">
      <i class="bx bxl-android forte__icon"></i>
      <h3 class="skills__subtitle">App Development</h3>
      <p class="skills__description">
        Experience in mobile app development using frameworks like React Native and Flutter.
      </p>
    </div>
    <div class="skills__content">
      <i class="bx bx-pencil forte__icon"></i>
      <h3 class="skills__subtitle">UI/UX Design</h3>
      <p class="skills__description">
        Proficient in creating user-friendly interfaces. Skilled in wireframing, prototyping, and design tools like Adobe XD.
      </p>
      <!-- <img
      src="arrow.png"
      alt="Arrow icon"
      class="icon arrow"
      onclick="location.href='./#projects'"
    />  -->
    </div>
    
     
  </div>
      
 
   
</section>

    <section id="projects">
        <p class="section__text__p1" style="color: aqua;">Browse My Recent</p>
        <h1 class="title" style="color: orange;">PROJECTS</h1>
        <div class="experience-details-container">
          <div class="about-containers">
            
          <?php

  $statementProject="SELECT * FROM `project`";
  $fetchProject=mysqli_query($connection,$statementProject);
  while($rowProject=mysqli_fetch_assoc($fetchProject)){
    ?>

<div class="details-container color-container">
              <div class="article-container">
                <img
                  src=<?= $rowProject['image']?>
                  alt="Project 1"
                  class="project-img"
                />
              </div>
             
              <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='<?= $rowProject['link']?>'">Github</button>

                
              </div>
              <div class="project-slider">
              <span>
                <?= $rowProject['sider']?>
              </span>
              </div>
            </div>

  <?php
}

?>



       
            
          </div>
        </div>
        <img
          src="arrow.png"
          alt="Arrow icon"
          class="icon arrowed"
          onclick="location.href='./#sp'"
        />
        
    </section>

<h1 class="section-title" style="color: orange;">MY <span style="color: white;">ARTWORK</span></h1>
<section class="slide-pic" id="sp">
  
  
  <div class="center slideshow">
  <img
          src="arrow.png"
          alt="Arrow icon"
          class="icon arrowed"
          onclick="location.href='./#contact'"
        />
  </div>
  
</section>

      <section id="contact">
        <p class="section__text__p1" style="color: aqua;">Get In Touch</p>
        <h1 class="title" style="color: orange;">Contact <span style="color:white;">Me</span></h1>
        <div class="contact-container">
          <div class="contact-form">

            <form action="index.php" method="POST">
              <input type="text" name="name" placeholder="Your Name" required>
              <input type="email" name="email" placeholder="Your Email" required>
              <textarea type="text" name="message" placeholder="Your Message" rows="5" required></textarea>
              <button type="submit" name="submit">Send Message</button>
            </form>
            
          <?php
          if (isset($_POST["submit"])) {

          $sendername = $_POST['name'];
          $email = $_POST['email'];
          $message = $_POST['message'];
          if ($sendername && $email && $message) {
            $query = "INSERT INTO contact (name, email, msg) VALUES ('$sendername','$email','$message')";
            $result = mysqli_query($connection, $query);
            mysqli_close($connection);
          }
        }
        ?>
          </div>


          <div class="contact-info">
            <h2 style="color: aqua;">Contact Information</h2>
            <ul>
              <li><i class="fas fa-phone"></i> Phone: 01789606722</li>
              <li><i class="fas fa-envelope"></i> Email: sumaiyakhan3572213@gmail.com</li>
              <li><i class="fas fa-map-marker-alt"></i> Location: rokeya hall,KUET</li>
            </ul>
          </div>
        </div>
      </section>      



    <footer>
      <div class="footer-container">
        <div class="footer-logo" style="color: orange;">Sumaiya Khan</div>
        <div class="thank-you-message" style="color: aqua;">
          Thank you for visiting my portfolio!
        </div>
        <div class="footer-links">
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skill">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="social-links">
          <a href="#" ><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="ss-go-top">
          <a class="smoothscroll" title="Back to Top" href="#top">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="17 11 12 6 7 11"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
          </a>
      </div> 
      </div>
    </footer>
 
    
    <script src="script.js"></script>
   
    
    
      
    </body>
  </html>
