<?php
    $page = 'index';
	define("current_page", "index");
    include('templates/header.php');
?>
    <div class="content-wrapper">
	    <div class ="text-wrapper">
			<div class="main-content">
				<h1 class="page-title"><?php echo $INDEX_TITLE; ?></h1>
				<div class="pararg-wrapper">
					<h4>
					<?php echo $INDEX_APPLAUS_DANCE; ?>
					</h4>
					<p>
					<span><?php echo $INDEX_APPLAUS_DANCE1; ?>
					</p>
				</div><!-- end of .pararg-wrapper -->
				<div class="image-wrapper">
					<img src="images/bibi_mitio_300_200.png" alt="Image">
					<img src="images/bobi_ive_300_200.png" alt="Image">
					<img src="images/bibi_nace_300_200.png" alt="Image">
				</div><!-- end of .image-wrapper -->
				<div class="pararg-wrapper">
					<h2><?php echo $INDEX_TITLE2; ?></h2>
					<p><?php echo $INDEX_APPLAUS_DANCE2; ?>
					</p>
				</div><!-- end of .pararg-wrapper -->
				<div class="image-wrapper">
					<img src="images/bibi_poza_200_300.png" alt="Image">
					<img src="images/iva_slavi_200_300.jpg" alt="Image">
					<img src="images/yani_krasi_300_300.jpg" alt="Image">
					<img src="images/petya_marto_200_300.png" alt="Image">
				</div><!-- end of .image-wrapper -->
                        
    		</div> <!-- end of .main-content -->
    	</div> <!-- end of .text-wrapper -->

	<?php include('templates/aside.php') ?>
	</div>
<?php include('templates/footer.php') ?>
