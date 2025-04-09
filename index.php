<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Tuts Portfilio</title>
</head>

<body>
  <?php
  
  ?>

  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>M</span>yrvin <span>J</span>acildo</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Skills</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Hero Section -->
  <section id="hero">
    <div class="hero container">
      <div class="content">
        <h1>Hello,<span></span></h1>
        <h1>my name is<span></span></h1>
        <h1><?php echo "Myrvin Jacildo"; ?><span></span></h1>
        <a href="#about" type="button" class="cta">About me</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Skills<span> & </span>Services</h1>
        <p>I offer a range of creative services, including hand-crafted traditional art, intuitive UI/UX design for seamless digital experiences, efficient coding for functional websites and applications, and expert picture and video editing to create visually striking content.</p>
      </div>
      <div class="service-bottom">
        <?php
        $services = [
          ["UI/UX Design", "I offer UI/UX design services that focus on creating intuitive, user-centered experiences, blending creativity with functionality to deliver visually engaging.", "web-design.png"],
          ["Traditional Arts", "I offer traditional art services that bring creativity to life through hands-on techniques, delivering authentic and visually captivating designs.", "paint-palette.png"],
          ["Coding", "I offer coding services that transform ideas into fully functional websites and applications, efficient code to bring projects to life and ensure optimal performance.", "code.png"],
          ["Picture & Video Editing", "I offer picture and video editing services that enhance visual content, using advanced techniques to create engaging, and impactful media tailored to your needs.", "windows10-personalization.png"],
        ];

        foreach ($services as $service) {
          echo '
          <div class="service-item">
            <div class="icon"><img width="100" height="100" src="https://img.icons8.com/fluency-systems-regular/100/FFFFFF/' . $service[2] . '" alt="' . $service[0] . '"/></div>
            <h2>' . $service[0] . '</h2>
            <p>' . $service[1] . '</p>
          </div>';
        }
        ?>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Projects <span>& </span>Certificates</h1>
      </div>
      <div class="all-projects">
        <?php
        $projects = [
          ["CISCO Networking Academy", "Network Support and Security", "Network.jpg", "I completed the Network Support and Security course offered by Cisco Networking Academy. 
              Through this program, I gained valuable skills in effective troubleshooting methodologies, implementing 
              help desk best practices, and addressing common threats, vulnerabilities, and attacks on endpoints. 
              Furthermore, I acquired hands-on experience in configuring secure user access on networks, 
              which enhances my ability to manage and protect network infrastructures efficiently."],

          ["Microsoft Office Specialist", "Excel 2019", "Ms.png", "This certification demonstrates my proficiency in utilizing Excel's advanced features for 
              data management, analysis, and visualization. It also reflects my ability to create efficient 
              workflows, automate processes, and effectively manage large datasets, showcasing my expertise 
              in this essential business productivity tool."],

          ["Posters", "Defending Champion in Poster making (2016-2019)", "posters.png", "I enjoy creating posters because it allows me to combine creativity with visual storytelling. 
              Poster making is a powerful way to communicate messages, whether for promoting events, sharing 
              information, or capturing attention through compelling designs. I focus on balancing aesthetics, 
              clear messaging, and impactful visuals to ensure that every poster effectively engages the audience
              and delivers its purpose. It is a skill that challenges me to think creatively while considering the 
              needs and interests of the viewers."],

          ["App and Websites", "Figma Projects and Visual Studio", "appweb.png", "I enjoy designing and developing websites using both Figma and Visual Studio because it allows me to 
              combine creativity with technical implementation. Figma is my go-to tool for creating intuitive and 
              visually appealing designs, where I can experiment with layouts, color schemes, and user interface elements 
              in a collaborative environment. Once the design is finalized, I bring it to life in Visual Studio, 
              where I focus on coding the functionality and structure of the website."],

          ["Drafting", "Autocad and Book Cover Designs", "Last.png", "I enjoy working on both engineering plates and book cover designs as they blend creativity with precision. 
              Engineering plates challenge me to apply technical skills to create detailed visual representations for
              real-world projects. Meanwhile, designing book covers allows me to capture a story’s essence through 
              striking visuals and typography. Both pursuits let me combine technical expertise and artistic 
              expression in meaningful ways."]
        ];

        foreach ($projects as $project) {
          echo '
          <div class="project-item">
            <div class="project-info">
              <h1>' . $project[0] . '</h1>
              <h2>' . $project[1] . '</h2>
              <p>' . $project[3] . '</p>
            </div>
            <div class="project-img">
              <img src="' . $project[2] . '" alt="' . $project[0] . '">
            </div>
          </div>';
        }
        ?>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->
  
  
<?php
// Array of portfolio items
$portfolioItems = [
    [
        "image" => "1.jpeg",
        "title" => "Harlan and Holden (BGC)",
        "description" => "This image was captured in Bonifacio Global City Taguig on April 2024."
    ],
    [
        "image" => "2.jpeg",
        "title" => "The Vibe bar and Cafe (QC)",
        "description" => "This image was captured in Quezon City on November 2023."
    ],
    [
        "image" => "3.jpeg",
        "title" => "Morato Street Quezon City",
        "description" => "This image was captured in Quezon City on November 2023."
    ],
    [
        "image" => "4.jpeg",
        "title" => "Starbucks (Malolos, Bulacan)",
        "description" => "This image was captured in Malolos, Bulacan on December 2023."
    ],
    [
        "image" => "5.jpeg",
        "title" => "Bricks and Brew Cafe (Sta. Mesa, Manila)",
        "description" => "This image was captured in Sta. Mesa Manila on January 2024"
    ],
    [
        "image" => "6.jpeg",
        "title" => "Bonifacio High Street (BGC)",
        "description" => "This image was captured in Bonifacio Global City Taguig on April 2024."
    ],
];
?>

<!-- PORTFOLIO SECTION DESIGN -->
<section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Fashion<span> & </span>Updates</h1>
        <p>As a computer engineer and graphic designer, I fuse sleek, modern aesthetics with a touch of creative flair in every outfit I wear. My personal style is a gallery of bold, coordinated looks that reflect both my passion for innovation and my eye for design.</p>
      </div>
      <div class="service-bottom">
    <div class="portfolio-container">
        <?php foreach ($portfolioItems as $item): ?>
            <div class="portfolio-box">
                <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="">
                <div class="portfolio-layer">
                    <h4><?php echo htmlspecialchars($item['title']); ?></h4>
                    <p><?php echo htmlspecialchars($item['description']); ?></p>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>



  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="stand.jpeg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2><?php echo "Myrvin Jacildo Labrador"; ?></h2>
        <p>Hello, I’m Myrvin Jacildo Labrador, a computer engineer and graphic designer.  
          With a keen eye for detail and a love for creativity, I specialize in providing tailored solutions that blend 
          technical expertise with artistic expression. I offer a range of creative services including hand-crafted traditional art, intuitive UI/UX design for seamless digital experiences, efficient coding for 
          functional websites and applications, and expert picture and video editing to create visually striking content. </p>
          <p>With my unique blend of technical expertise and artistic passion, I aim to bring your ideas to life through innovative 
          and impactful solutions.</p>
        <a href="MyrvinCV.pdf" download class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img width="100" height="100" src="https://img.icons8.com/material-outlined/100/4D4D4D/ringer-volume.png" alt="ringer-volume"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2><?php echo "+63 9617 886 378"; ?></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img width="100" height="100" src="https://img.icons8.com/material-outlined/100/4D4D4D/filled-message.png" alt="filled-message"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2><?php echo "myrvinjacildo@gmail.com \nlabradormyrvin12@gmail.com"; ?></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img width="100" height="100" src="https://img.icons8.com/material-outlined/100/4D4D4D/map--v1.png" alt="map--v1"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2><?php echo "Bocaue, Bulacan, Philippines"; ?></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>M</span>yrvin <span>J</span>acildo</h1>
      </div>
      <h2>Follow me for insights on fashion, creativity, and life updates!</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/myrvsjacildo"><img width="45" height="45" src="https://img.icons8.com/fluency/48/facebook-new.png" alt="facebook-new"/></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/tutojacildo"><img width="48" height="48" src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new"/></a>
        </div>
        <div class="social-item">
          <a href="https://github.com/TutoJacildo"><img width="100" height="100" src="https://img.icons8.com/glyph-neue/100/FFFFFF/github.png" alt="github"/></a>
        </div>
      </div>
      <p>Get connected.</p>
    </div>
  </section>
  <!-- End Footer -->

  <script src="app.js"></script>
</body>

</html>
