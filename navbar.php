    <nav class="navbar navbar-expand-lg <?php if($is_home) echo "navbar-home"; ?>">
      
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="./index.php" class="navbar-brand">
        <img src="./images/logo.png" alt="icon" style="width: 100px;">
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <button type="button" class="btn btn-outline-dark " >
            <a href="./contact.php" target="blank" class="nav-link">Contact</a>
          </button>
          <?php
                     if(isset($_SESSION['name'])){
                          echo " <button type='button' class='btn btn-outline-dark ' >
                          <a href='profile.php' target='blank' class='nav-link'>Profile</a>
                          </button>
                          ";

                     }

                    ?>

          <button type="button" class="btn btn-outline-dark">
            <a href="#cta" class="nav-link">Download</a>
          </button>
          <button type="button" class="btn btn-outline-dark">
            <a href="./Product_Page.php" class="nav-link">Content</a></button>
          </li>
        </ul>
      </div>
  
    </nav>