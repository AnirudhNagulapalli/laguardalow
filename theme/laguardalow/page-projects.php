<?php get_header(); ?>
	<nav class="row-fluid project-nav">
		<ul>
			<li class="col-md-1 project-nav-article allProjects">
				<a>ALL PROJECTS</a>
			</li> 
			<li class="col-md-1 project-nav-article current">
				<a>CURRENT</a>
			</li> 
			<li class="col-md-1 project-nav-article planning">
				<a>PLANNING</a>
			</li> 
			<li class="col-md-1 project-nav-article mixedUse">
				<a>MIXED USE</a>
			</li> 
			<li class="col-md-1 project-nav-article retail">
				<a>RETAIL</a>
			</li> 
			<li class="col-md-1 project-nav-article transit">
				<a>TRANSIT</a>
			</li> 
			<li class="col-md-1 project-nav-article office">
				<a>OFFICE</a>
			</li> 
			<li class="col-md-1 project-nav-article resedential">
				<a>RESIDENTIAL</a>
			</li> 
			<li class="col-md-1 project-nav-article hospitality">
				<a>HOSPITALITY</a>
			</li> 
			<li class="col-md-1 project-nav-article renovation">
				<a>RENOVATION</a>
			</li> 
			<li class="col-md-1 project-nav-article public">
				<a>PUBLIC</a>
			</li> 
			<li class="col-md-1 project-nav-article archive">
				<a>ARCHIVE</a>
			</li>
		</ul>
	</nav> 
	<div class="row-fluid project-grid">
		<?php echo do_shortcode("[post_grid id='93']"); ?>
	</div>
	<!-- <script type="text/javascript">
		$( document ).ready(function() {
    	$(".band").toggleClass("hovered");
		});
	</script> -->

<?php get_footer(); ?>