<?php 
class Redirect{
 
    static function  to($page){
        echo '<script>window.location.href = "'.$page.'";</script>';

    }
    
}
