<!--Home content goes here. Columns made with Unsemantic Grid System-->
<div class="red-strip-title">
	<div class="wrap">
		<div class="grid-container">
		    <div class="grid-100">
		      <div class="grid-65"><p>Projects</p></div>
		      <div class="grid-35 news-title"><p>News</p>
		      <div class="arrow-down news-title"></div>
		      </div>
		      
		      </div>
		</div>
	</div>
</div>

<div class="wrap">
    <div class="grid-container">
	    <div class="grid-100">
	    <!--Projects-->
	      <div class="grid-65">
	      	<?php include("includes/projects.php"); ?>
		      	<!--Message from the President-->
		       <div class="grid-100 message"><?php include("includes/message.php"); ?></div>
	      </div>

	   <!--Responsive News Strip, since 'News' will be hidden at arounf 760px width resolution -->
		<div class="red-strip-news">
			<div class="wrap">
				<div class="grid-container">
				    <div class="grid-100"><p>News</p>
				      </div>
				      
				      </div>
				</div>
		</div>
	      
	       <!--News-->
	      <div class="grid-35"><?php include("sidebar-home.php"); ?></div>
	      </div>
      </div>
</div>