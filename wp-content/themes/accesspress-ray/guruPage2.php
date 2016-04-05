<?php /* Template Name: guruPage2 */ ?>
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
			    <h1>Daftar Guru</h1>
			    <p>Yang terbaik dari kami, hanya untuk anda</p>
			 </div>
			<div id="row" style="margin-top:20px;">
				<div class="col-md-4">
					 <div class="form-group">
						  <label for="pilihProv"></label>
						  <select class="form-control" id="pilihProv">
						  	<option>Pilih Provinsi</option>
						    <option>DKI Jakarta</option>
						    <option>D.I Yogyakarta</option>
						    <option>Jawa Barat</option>
						    <option>Jawa Timur</option>
						    <option>Jawa Tengah</option>
						  </select>
					</div>
					<div class="form-group">
						  <label for="pilihReg"></label>
						  <select class="form-control" id="pilihReg">
						  	<option>Pilih Region</option>
						    <option>Bantul</option>
						    <option>Gunung Kidul</option>
						    <option>Kulon Progo</option>
						    <option>Sleman</option>
						    <option>Yogyakarta</option>
						  </select>
					</div>
					<div class="form-group">
						  <label for="pilihTingkat"></label>
						  <select class="form-control" id="pilihTingkat">
						  	<option>Pilih Tingkat</option>
						    <option>SD</option>
						    <option>SMP/MTs</option>
						    <option>SMA/MA/SMK</option>
						    <option>Universitas</option>
						    <option>Umum</option>
						  </select>
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
			    	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#advSearch">Filter</button>
					  <div id="advSearch" class="collapse">
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					  </div>
				</div>
				<div class="col-md-8">
					<?php
				// $a = query_posts('category_name=guru');
	 		// 	$result = count($a);
	 		// 	echo "jumlah= " . $result;
				$catquery = new WP_Query( 'cat=6&posts_per_page=10' );
					while($catquery->have_posts()) : $catquery->the_post();
					?>
							<div class="col-md-6">
								<div class="panel panel-info" style="height:450px;">
									<div class="panel-heading">
										<center><h3 class="panel-title"><b><?php the_title(); ?></b></h3></center>
									</div>
									<div class="panel-body">
										<!-- <div class="kotak"> -->
											<center><?php the_post_thumbnail(array(150,150)); ?></center><br>
										<!-- </div> -->
										<p align="justify"><?php the_content(); ?></p>
										<div class="btn-group pull-right">
											<button type="button" class="btn btn-primary">
			      								<span class="glyphicon glyphicon-user"></span>
			    							</button>
											<button type="button" class="btn btn-success">
      											<span class="glyphicon glyphicon-envelope"></span>
			    							</button>
			    							<button type="button" class="btn btn-warning">
			      								<span class="glyphicon glyphicon-star-empty"></span>
			    							</button>
			    							
										</div>
									</div>
								</div>
							</div>
														

					<?php endwhile; // end of the loop. ?>
				</div>
				
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