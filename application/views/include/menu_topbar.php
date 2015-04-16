<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>index.php/menu_c"">IGet Codeiginter</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url();?>index.php/menu_c">หน้าแรก</a></li>
            <li><a href="<?php echo base_url();?>index.php/menu_c/about">เกียวกับผม</a></li>
            <li><a href="<?php echo site_url('menu_c/contact');?>">ติดต่อผม</a></li>
            <li><a href="<?php echo site_url('menu_c/querydb');?>">Query</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ผลงานของผม <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">เว็บไซต์ ซื้อขายรถยนต์มือสอง</a></li>
                <li><a href="#">เว็บไซต์ บริษัท บดินทร พร็อพเพอร์ตี้</a></li>
                <li><a href="#">เว็บไซต์ 4KUS Sukiyaki & Sabu sabu</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">ว่าง ว่าง</li>
                <li><a href="#">ว่าง ว่าง</a></li>
                <li><a href="#">ว่าง ว่าง</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('menu_c/login');?>">Log In</a></li>
            <li><a href="<?php echo site_url('menu_c/register');?>">Register</a></li>
            <li class="active"><a href="./">ขึ้นไปบนสุด <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
