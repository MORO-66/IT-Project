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
            <a href="./contact.php" target="blank" class="nav-link">contact</a>
          </button>
           <button type="button" class="btn btn-outline-dark">
            <a href="#footer" class="nav-link">about</a>
           </button>
          <button type="button" class="btn btn-outline-dark">
            <a href="#cta" class="nav-link">download</a>
          </button>
          </li>
        </ul>
      </div>
  
    </nav>