<?php /* Template Name: trainingPage */ ?>
<?php

get_header(); 
global $post;
if(is_front_page()){
	$post_id = get_option('page_on_front');
}else{
	$post_id = $post->ID;
}
$post_class = get_post_meta( $post_id, 'accesspress_ray_sidebar_layout', true );
?>

<div class="ak-container">

<div class="inner-pages-wrapper clearfix">

<?php 
	if ($post_class=='both-sidebar') { ?>
		<div id="primary-wrap" class="clearfix"> 
	<?php }
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
			  <div class="jumbotron">
			    <h1>Kursus Kelompok</h1>
			    <p>Paket Kursus Kelompok Bersertifikat</p>
			  </div>
			<div id="row" style="margin-top:20px;">
				<div class="col-md-12">
					<form class="form-inline well" role="form">
				  <div class="form-group">
				    <input type="judul" class="form-control" id="judul" placeholder="judul materi">
				  </div>
				  <div class="form-group">
						  <label for="pilihMapel"></label>
						  <select class="form-control" id="pilihMapel">
						  	<option>Pilih Mata Pelajaran</option>
						    <option>Matematika</option>
						    <option>Fisika</option>
						    <option>Kimia</option>
						    <option>Biologi</option>
						    <option>Sosiologi</option>
						    <option>Geografi</option>
						    <option>Ekonomi</option>
						    <option>Bahasa Indonesia</option>
						    <option>Bahasa Inggris</option>
						  </select>
					</div>
				  <button type="button" class="btn btn-primary center-block">
			      		<span class="glyphicon glyphicon-search"></span>
			      		  Cari
			    	</button>
				</form>
				</div>
				 
				<?php
				// $a = query_posts('category_name=guru');
	 		// 	$result = count($a);
	 		// 	echo "jumlah= " . $result;
				$catquery = new WP_Query( 'cat=9&posts_per_page=10' );
					while($catquery->have_posts()) : $catquery->the_post();
					?>
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<center><h3 class="panel-title"><b><?php the_title(); ?></b></h3></center>
									</div>
									<div class="panel-body">
										<!-- <div class="kotak"> -->
											<!-- <center><?php the_post_thumbnail(array(150,150)); ?></center><br> -->
										<!-- </div> -->
										<p class="text-justify"><?php the_content(); ?></p>
										<div class="pull-left">
											<p><span class="glyphicon glyphicon-user"></span> Sekolah lorem ipsum</p>
											<p><span class="glyphicon glyphicon-map-marker"></span> Yogyakarta</p>
											<p><span class="glyphicon glyphicon-star-empty"></span> 0 review</p>
										</div>
										

										<div class="btn-group pull-right">
											<button type="button" class="btn btn-success">
      											<span class="glyphicon glyphicon-shopping-cart"></span>
      											Pesan
			    							</button>
			    							<button type="button" class="btn btn-warning">
			      								<span class="glyphicon glyphicon-eye-open"></span>
			      								Lihat Detail
			    							</button>
										</div>
										
									</div>
								</div>
							</div>					

			<?php endwhile; // end of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_sidebar('left'); 

	if ($post_class=='both-sidebar') { ?>
		</div> 
	<?php }

get_sidebar('right'); ?>
</div>
</div>
<?php get_footer(); ?>