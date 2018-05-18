<header class="site-header">
  <div class="band row-fluid">
    <div class="logo col-md-3">
      <a href="http://localhost:8888/wordpress/">
        <!-- <img class ="logo" alt="LaguardaLow"> -->
      </a>
    </div>
    <div class="col-md-3">
      <!-- Search bar -->
      <div class="search-container">
        <form action="/action_page.php">
          <input id="input-area" type="text" placeholder="" name="search">
          <button class="search" type="submit"></button>
          <!-- <div id="input-area-slider"></div> -->
        </form>
      </div>
    </div>
    <div class="col-md-4">
      <nav class="site-nav">
        <!-- <a class="site-nav-item active" href="#">Home</a> -->
        <?php wp_nav_menu(); ?>
      </nav>
    </div>
    <div class="col-md-2">
      <!-- English/Chinese -->
      <div class="lang-toggle">
        <!-- <p><span style="color: #ED2939">English</span> &nbsp; 中文</p> -->
        <div id="lang-en">ENGLISH</div>
        <div id="lang-zh">中文</div>
      </div>
    </div>
  </div>
  <div class="row-fluid slider-wrapper theme-laguardalowSlider">
    <div id="slider" class="nivoSlider">
      <img src="http://localhost:8888/wordpress/wp-content/uploads/2018/05/LLA_Homepage1.jpg" alt=""  title="#htmlcaption"/>
      <img src="http://localhost:8888/wordpress/wp-content/uploads/2018/05/LLA_Homepage2.jpg" alt=""  title="#htmlcaption"/>
      <img src="http://localhost:8888/wordpress/wp-content/uploads/2018/05/LLA_Homepage3.jpg" alt=""  title="#htmlcaption"/>
      <img src="http://localhost:8888/wordpress/wp-content/uploads/2018/05/LLA_Homepage4.jpg" alt=""  title="#htmlcaption"/>
    </div>
    <div id="htmlcaption" class="nivo-html-caption">
      <p>Laguarda.Low is a global</br>architectural practice focused on</br>creating exciting experiments.</p> 
    </div>
  </div>
</header>

    