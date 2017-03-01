<?php if( ! class_exists( 'form' ) or wp_die ( 'error found.' ) ) 
{    
    class form extends input
    {
          var $html = null;
                
          public function __construct() 
          {
               parent::__construct();
               new page_rounter( true );
          }

          // END
    }
}
?>