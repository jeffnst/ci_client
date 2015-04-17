<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>index.php/menu/home">ViACard (Thailand)</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url();?>index.php/menu/home">Home</a></li>
            <li><a href="<?php echo base_url();?>index.php/menu/about">About</a></li>
            <li><a href="<?php echo site_url('menu/contact');?>">Contact us</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">#</a></li>
                <li><a href="#">#</a></li>
                <li><a href="#">#</a></li>
                <li class="divider"></li>
                <li class="dropdown-header"></li>
                <li><a href="#">#</a></li>
                <li><a href="#">#</a></li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('menu/login');?>">Log In</a></li>
            <li><a href="<?php echo site_url('menu/register');?>">Register</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
