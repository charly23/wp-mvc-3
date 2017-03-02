<?php if( ! class_exists( 'action' ) or wp_die ( 'error found.' ) ) 
{
    
     class action extends db_action
     {
          
          public static $tbls = array( '_tbl' );

          public function __construct () 
          {
                parent::__construct();
          }

          // END
     }
}
?>