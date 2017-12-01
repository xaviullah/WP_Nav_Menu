

Write down it into menu or nav div  and delete ul>li>a markup


<?php
  // display nevagetion menu
      wp_nav_menu( array(
          'theme_location' => 'menu-1',
          'menu_class' => 'nav navbar-nav navbar-right',
      ) );
  ?>
    
    
    
    //like theat
    
    <div class="collapse navbar-collapse" id="navbar-menu">
                        
          <?php
          // display nevagetion menu
              wp_nav_menu( array(
                  'theme_location' => 'menu-1',
                  'menu_class' => 'nav navbar-nav navbar-right',
              ) );
          ?>
    </div>
