<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <div class="fk_width" id="">
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="overlay-content">
              <a href="#">Home</a>
              <a href="#">About</a>
              <a href="#">Packages</a>
              <a href="#">Testimonial</a>
            </div>
          </div>
        </div>
        <a class="navbar-brand" href="/">
          <img src="{{asset('thems')}}/images/logo.png" alt="" />
        </a>
        <div class="user_option">
          <a href="#">
            <img src="{{asset('thems')}}/images/user-icon.png" alt="" />
          </a>
          <form class="form-inline my-2 my-lg-0  mb-3 mb-lg-0">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </div>
      </nav>
    </div>
  </header>