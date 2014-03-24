<!--Home content goes here. Columns made with Unsemantic Grid System-->
<div class="red-strip-title">
	<div class="wrap">
		<div class="grid-container">
		    <div class="grid-100">
		      <div class="grid-70"><p>Projects</p></div>
		      <div class="grid-30"><p>News</p></div>
		      </div>
		</div>
	</div>
	
</div>
<div class="wrap">
    <div class="grid-container">
	    <div class="grid-100">
	    <!--Projects-->
	      <div class="grid-70">
	      	<?php include("includes/projects.php"); ?>
		      	<!--Message from the President-->
		       <div class="grid-100 message"><?php include("includes/message.php"); ?></div>
	      </div>
	      
	       <!--News-->
	      <div class="grid-30"><?php include("includes/sidebar-home.php"); ?></div>
	      </div>
      </div>
</div>