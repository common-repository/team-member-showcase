<?php
	// Added Shortcode with ID
add_filter( 'manage_rd_team_member_posts_columns', 'rd_team_member_add_id_column', 10 );
add_action( 'manage_rd_team_member_posts_custom_column', 'rd_team_member_id_column_content', 10, 2 );

function rd_team_member_add_id_column( $columns ) {
   $columns['rd_team_member'] = 'Team Shortcode';
   return $columns;
}

function rd_team_member_id_column_content( $column, $id ) {
  if( 'rd_team_member' == $column ) {
     $shortcode_render ='[team id="'.$id.'"]';
     
    echo '<input style="min-width:210px" type=\'text\' onClick=\'this.setSelectionRange(0, this.value.length)\' value=\''.$shortcode_render.'\' /> ';   
  }
}
// Gallery custom messages
add_filter( 'post_updated_messages', 'rd_team_member_updated_messages' );
function rd_team_member_updated_messages( $messages ){
        
    global $post;
    $post_ID = get_the_ID();
	  
 $messages['rd_team_member'] = array(
            0 => '', 
            1 => sprintf( __('Team Member Shortcode published. Shortcode is: %s'), '' . '
<script type="text/javascript">
(function() {
    "use strict";
  // click events
  document.body.addEventListener("click", copy, true);

    // event handler
    function copy(e) {

    // find target element
    var 
      t = e.target,
      c = t.dataset.copytarget,
      inp = (c ? document.querySelector(c) : null);
      
    // is element selectable?
    if (inp && inp.select) {
      
      // select text
      inp.select();

      try {
        // copy text
        document.execCommand("copy");
        inp.blur();
        
        // copied animation
        t.classList.add("copied");
        setTimeout(function() { t.classList.remove("copied"); }, 1500);
      }
      catch (err) {
        alert("please press Ctrl/Cmd+C to copy");
      }    
    } 
    }

})();	
</script>
	
			' . '<input style="height: 30px; margin-right: 5px;" type="text" id="website" value="[team id=\''.$post_ID.'\']" /><button  class="button button-primary button-large" data-copytarget="#website">copy</button>' ),
            6 => sprintf( __('Team Shortcode published. Shortcode is: %s'), '' . '  ' . '
<script type="text/javascript">
(function() {
    "use strict";
  // click events
  document.body.addEventListener("click", copy, true);

    // event handler
    function copy(e) {

    // find target element
    var 
      t = e.target,
      c = t.dataset.copytarget,
      inp = (c ? document.querySelector(c) : null);
      
    // is element selectable?
    if (inp && inp.select) {
      
      // select text
      inp.select();

      try {
        // copy text
        document.execCommand("copy");
        inp.blur();
        
        // copied animation
        t.classList.add("copied");
        setTimeout(function() { t.classList.remove("copied"); }, 1500);
      }
      catch (err) {
        alert("please press Ctrl/Cmd+C to copy");
      }    
    } 
    }

})();	
</script>
			<input style="height: 30px; margin-right: 5px;" type="text" id="website" value="[team id=\''.$post_ID.'\']" /><button  class="button button-primary button-large" data-copytarget="#website">copy</button>'),
			  );

    
    return $messages;
        
}