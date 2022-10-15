
<?php 
 $fileName = basename(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
//  var_dump($fileName);
// $urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// 	  $segments = explode('/', $urlArray);
// 	  $numSegments = count($segments); 
// 	  $currentSegment = $segments[$numSegments - 2];
// 	  var_dump($currentSegment);
?>

  

<!-- Header -->
 <!-- loader start -->
 <div class="loader">
    <div class="loader-img">
      <img src="assets/images/loader.png" alt="loader">
    </div>
  </div>
  <!-- loader end  -->

  <!-- header section start  -->
  <section class="top_header p-0">
    <div class="status_bar">
      <p class="m-0">Applications are now open for 2022-2023. </p>
      <ul class="social_media">
        <li>
          <a href="">
            <img src="assets/images/twitter.svg" alt="twitter">
          </a>
        </li>
        <li>
          <a href="">
            <img src="assets/images/facebook-f.svg" alt="facebook">
          </a>
        </li>
        <li>
          <a href="">
            <img src="assets/images/instagram.svg" alt="instagram">
          </a>
        </li>
        <li>
          <a href="">
            <img src="assets/images/linkedin-in.svg" alt="linkedin">
          </a>
        </li>
      </ul>
    </div>
  </section>

  <header id="header_section" class="w-100">
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-xl navbar-dark p-0">
        <div class="container">
          <a class="navbar-brand pt-0" href="index.html"><img src="assets/images/og-logo.webp" alt="OG Healthcare"
              class="header_logo" /> </a>
          <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars menu_icon"></i>
          </button>
          <div class="collapse navbar-collapse  justify-content-start" id="main_nav">
            <ul class="navbar-nav">
              <li class="nav-item active"> <a class="nav-link inner_nav_link <?= ($fileName == 'index.php' || $fileName == '') ? 'active':'' ?>" href="index.php">Home </a> </li>

              <!-- about menu start  -->
              <li class="nav-item dropdown has-megamenu dropdown_hover">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> About
                </a>
                <div class="dropdown-menu megamenu px-4" role="menu">
                  <div class="container">
                  <div class="row g-3">
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu">
                        <h6 class="title megamenu_inner_title">More Text Header</h6>
                        <p class="megamenu_inner_content text-align-justify">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book. It has survived not only five
                          centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
                          was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                          passages, and more recently with desktop publishing software like Aldus PageMaker including
                          versions of Lorem Ipsum.
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu col-megamenu-inner">
                        <h6 class="title megamenu_inner_title">Product Header</h6>
                        <ul class="list-unstyled">
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu col-megamenu-inner">
                        <h6 class="title megamenu_inner_title">Title Menu Three</h6>
                        <ul class="list-unstyled">
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu col-megamenu-inner">
                        <h6 class="title megamenu_inner_title">Title Menu Four</h6>
                        <ul class="list-unstyled">
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </li>
              <!-- about menu end  -->


              <!-- Careers menu start  -->
              <li class="nav-item dropdown has-megamenu dropdown_hover">
                <a class="nav-link dropdown-toggle <?= ($fileName == 'career.php') ? 'active':'' ?>" href="#" data-bs-toggle="dropdown"> Careers </a>
                <div class="dropdown-menu megamenu px-4" role="menu">
                  <div class="container">
                  <div class="row g-3">
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu">
                        <h6 class="title megamenu_inner_title">More Text Header</h6>
                        <p class="megamenu_inner_content text-align-justify">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book. It has survived not only five
                          centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
                          was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                          passages, and more recently with desktop publishing software like Aldus PageMaker including
                          versions of Lorem Ipsum.
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu col-megamenu-inner">
                        <h6 class="title megamenu_inner_title">Product Header</h6>
                        <ul class="list-unstyled">
                          <li><a href="career.php" class="inner_nav_link <?= ($fileName == 'career.php') ? 'active':'' ?>">Career</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu col-megamenu-inner">
                        <h6 class="title megamenu_inner_title">Title Menu Three</h6>
                        <ul class="list-unstyled">
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu col-megamenu-inner">
                        <h6 class="title megamenu_inner_title">Title Menu Four</h6>
                        <ul class="list-unstyled">
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </li>
              <!-- Careers menu end  -->


              <!-- Life menu start  -->
              <li class="nav-item dropdown has-megamenu dropdown_hover">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Life </a>
                <div class="dropdown-menu megamenu px-4" role="menu">
                  <div class="container">
                  <div class="row g-3">
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu">
                        <h6 class="title megamenu_inner_title">More Text Header</h6>
                        <p class="megamenu_inner_content text-align-justify">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                          galley of type and scrambled it to make a type specimen book. It has survived not only five
                          centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
                          was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                          passages, and more recently with desktop publishing software like Aldus PageMaker including
                          versions of Lorem Ipsum.
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu col-megamenu-inner">
                        <h6 class="title megamenu_inner_title">Product Header</h6>
                        <ul class="list-unstyled">
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu col-megamenu-inner">
                        <h6 class="title megamenu_inner_title">Title Menu Three</h6>
                        <ul class="list-unstyled">
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-3 col-12">
                      <div class="col-megamenu col-megamenu-inner">
                        <h6 class="title megamenu_inner_title">Title Menu Four</h6>
                        <ul class="list-unstyled">
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                          <li><a href="#" class="inner_nav_link">Custom Menu</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </li>
              <!-- Life menu end  -->

              <li class="nav-item"><a class="nav-link inner_nav_link" href="#">News</a></li>
              <li class="nav-item"><a class="nav-link inner_nav_link" href="#">Help</a></li>
              <li class="nav-item"><a class="nav-link inner_nav_link" href="#contactForm">Contact Us</a></li>
          
            </ul>
            <div class="apply_btn inner_nav_link"><a href="#">Apply Here</a> </div>
          </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
      
        <div class="theme_mode d-flex">
          <input type="checkbox" id="switch" onclick="switchTheme()" class="theme_check" />
          <img src="assets/images/moon.svg" alt="light" class="light_mode">
          <img src="assets/images/sun.svg" alt="dark" class="dark_mode">
          
        </div>
      </nav>
    </div>
  </header>
  <!-- header section End  -->
   <!-- Header End -->