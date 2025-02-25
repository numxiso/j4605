<?php
include("checklogin.php");
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Album example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<header data-bs-theme="dark">
  <div class="collapse text-bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4>About</h4>
          <p class="text-body-secondary">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4>Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          <li><a href="#" class="text...
            <li><strong><font color="#FFFF00"> <?php echo $_SESSION['s_name'];?></font></strong>
            <li><a href="logout.php"> ออกจากระบบ</a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>CHICCOSMETIC & DIOR..  </strong>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-heart-fill" viewBox="0 0 16 16">
        <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4zM8.5 4h6l.5.667V5H1v-.333L1.5 4h6V1h1zM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
</svg>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">CHICCOSMETIC &amp; DIOR.<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-heart-fill" viewBox="0 0 16 16">
  <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4zM8.5 4h6l.5.667V5H1v-.333L1.5 4h6V1h1zM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
</svg></h1>
        <img src="../images/ChicCosmetic & Dior. (1).jpg"g"width="748" height="384" class="imag>
        <p class="lead text-body-secondary"> Step into [CHICCOSMETIC] for premium beauty products tailored to all skin types and preferences. From skincare to makeup, each product is selected to help you achieve radiant skin and a flawless look. Join us and elevate your beauty routine.
<p>
          <a href="#" class="btn btn-dark">สินค้าทั้งหมด</a>
          <a href="#" class="btn btn-secondary my-2">คำสังซื้อทั้งหมด</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
         <img src="../images/1.jpg"Image description"class="card-img-top">
            <div class="card-body">
              <p>DIOR BACKSTAGE GLOW FACE PALETTE</p>
              <p>Professional performance - pure shimmer, blendable - highlight &amp; blush              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button class="btn btn-secondary"> <i class="bi bi-cart-fill"></i> 
</button>

                  <button type="button" class="btn btn-sm btn-outline-secondary">เพิ่มไปยังรถเข็น</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">ซื้อสินค้า</button>
                </div>
                2300 บาท
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
           <img src="../images/9.jpg"Image description"class="card-img-top">
            <div class="card-body">
              <p>DIOR ADDICT</p>
              <p>Hydrating Shine Lipstick - 90% Natural-Origin Ingredients - Refillable              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-secondary"> <i class="bi bi-cart-fill"></i>
</button>
                   
                  <button type="button" class="btn btn-sm btn-outline-secondary">เพิ่มไปยังรถเข็น</button>
                 
                  <button type="button" class="btn btn-sm btn-outline-secondary">ซื้อสินค้า              </button>
                </div>
              1650 บาท</div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="../images/5.jpg"Image description"class="card-img-top">
            <div class="card-body">
              <p>DIOR BACKSTAGE ROSY GLOW</p>
              <p>Color-Awakening Blush - Natural Healthy Glow Effect              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-secondary"> <i class="bi bi-cart-fill"></i>
</button>
                   
                  <button type="button" class="btn btn-sm btn-outline-secondary">เพิ่มไปยังรถเข็น</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">ซื้อสินค้า</button>
                </div>
                1700 บาท
              </div>
            </div>
          </div>
        </div>
        <div class="col"><img src="../images/6.jpg"Image description"  class="card-img-top">
          <div class="card shadow-sm">
            <div class="card-body">
              <p>DIOR ADDICT LIP GLOW</p>
              <p>Natural Glow Custom Color Reviving Lip Balm - Long* Hydration - 97%** Natural-Origin Ingredients              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-secondary"> <i class="bi bi-cart-fill"></i>
</button>
                   
                  <button type="button" class="btn btn-sm btn-outline-secondary">เพิ่มไปยังรถเข็น</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">ซื้อสินค้า</button>
                </div>
                1650 บาท</div>
            </div>
          </div>
        </div>
        <div class="col"><img src="../images/8.jpg"Image description" class="card-img-top">
          <div class="card shadow-sm">
            
            <div class="card-body">
              <p>DIOR ADDICT</p>
              <p>Hydrating Shine Lipstick - 90% Natural-Origin Ingredients - Refillable              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-secondary"> <i class="bi bi-cart-fill"></i>
</button>
                   
                  <button type="button" class="btn btn-sm btn-outline-secondary">เพิ่มไปยังรถเข็น</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">ซื้อสินค้า</button>
                </div>
1850 บาท</div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="../images/4.jpg" class="card-img-top" alt="Image description">
            <div class="card-body">
              <p>DIORSHOW ICONIC OVERCURL WATERPROOF</p>
              <p>Waterproof Mascara - Spectacular Long Volume &amp; Curl - Lash-Fortifying Care Effect              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-secondary"> <i class="bi bi-cart-fill"></i>
</button>
                   
                  <button type="button" class="btn btn-sm btn-outline-secondary">เพิ่มไปยังรถเข็น</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">ซื้อสินค้า</button>
                </div>
                1650 บาท
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="../images/3.jpg" alt="Image description" class="card-img-top">
            </p>
            <div class="card-body">
              <p class="card-text">DIOR LIP GLOW OIL</p>
              <p class="card-text"> Nourishing glossy lip oil – color awakening - cherry oil infused</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-secondary"> <i class="bi bi-cart-fill"></i>
</button>
                   
                  <button type="button" class="btn btn-sm btn-outline-secondary">เพิ่มไปยังรถเข็น</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">ซื้อสินค้า</button>
                </div>
                1650 บาท
              </div>
            </div>
          </div>
        </div>
        <div class="col"><img src="../images/2.jpg" class="card-img-top" alt="Image description">
          <div class="card shadow-sm">
            <div class="card-body">
              <p>DIOR ADDICT LIP MAXIMIZER</p>
              <p>Plumping Gloss - Instant And Long-Term Volume Effect - 24H Hydration                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-secondary"> <i class="bi bi-cart-fill"></i>
</button>
                   
                  <button type="button" class="btn btn-sm btn-outline-secondary">เพิ่มไปยังรถเข็น</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">ซื้อสินค้า</button>
                </div>
                1650 บาท
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="../images/7.jpg" class="card-img-top" alt="Image description">
</p>       
            <div class="card-body">
              <p class="card-text">DIORSHOW ON STAGE LINER</p>
              <p class="card-text"> Waterproof Felt Tip Liquid Eyeliner - Long Intense Color</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-secondary"> <i class="bi bi-cart-fill"></i>
</button>
                   
                  <button type="button" class="btn btn-sm btn-outline-secondary">เพิ่มไปยังรถเข็น</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">ซื้อสินค้า</button>
                </div>
                1200 
              บาท</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../../../../getting-started/introduction">getting started guide</a>.</p>
  </div>
</footer>
<script src="../../../../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
