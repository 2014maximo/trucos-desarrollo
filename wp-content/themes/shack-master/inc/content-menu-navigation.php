<?php 
    if(has_custom_logo()):
        the_custom_logo();
    else:
        echo'<a href="'.esc_url(home_url('/')).'">'.
        get_bloginfo('name').'</a>';
    endif;
?>