<?php
    $page = 'Dances';
    include('templates/header.php');
?>

<div class="content-wrapper">

	<div class ="text-wrapper">
		<div class="main-content">
			<h1 class="page-title"><?php echo $QANDA_TITLE; ?></h1>
				<div class="question-wrapper">
					<ol>
						<li class="question"><?php echo $QANDA_1_QUESTION; ?>
							<ul>
								<li class="answer"><?php echo $QANDA_1_ANSWER; ?> <a href="contact-page.php"><?php echo $CONTACT_TITLE; ?></a><br /></li>
							</ul>
						</li>
						<li class="question"><?php echo $QANDA_2_QUESTION; ?>
							<ul>
								<li class="answer"><?php echo $QANDA_2_ANSWER; ?></li>
							</ul>
						</li>
						<li class="question"><?php echo $QANDA_3_QUESTION; ?>
							<ul>
								<li class="answer"><?php echo $QANDA_3_ANSWER; ?></li>
							</ul>
						</li>
						<li class="question"><?php echo $QANDA_4_QUESTION; ?>
							<ul>
								<li class="answer"><?php echo $QANDA_4_ANSWER; ?></li>
							</ul>
						</li>
						<li class="question"><?php echo $QANDA_5_QUESTION; ?>
							<ul>
								<li class="answer"><?php echo $QANDA_5_ANSWER; ?></li>
							</ul>
						</li>
						<li class="question"><?php echo $QANDA_6_QUESTION; ?>
							<ul>
								<li class="answer"><?php echo $QANDA_6_ANSWER; ?></li>
							</ul>
						</li>
						<li class="question"><?php echo $QANDA_7_QUESTION; ?>
							<ul>
								<li class="answer"><?php echo $QANDA_7_ANSWER; ?></li>
							</ul>
						</li>
						<li class="question"><?php echo $QANDA_8_QUESTION; ?>
							<ul>
								<li class="answer"><?php echo $QANDA_8_ANSWER; ?></li>
							</ul>
						</li>
						<li class="question"><?php echo $QANDA_9_QUESTION; ?>
							<ul>
								<li class="answer"><?php echo $QANDA_9_ANSWER; ?></li>
							</ul>
						</li>
					</ol>
				</div><!-- end of .question-wrapper -->			
			
    	</div> <!-- end of .main-content -->
    </div> <!-- end of .text-wrapper -->

<?php include('templates/aside.php') ?>

</div><!-- end of .content-wrapper -->

<?php include('templates/footer.php') ?>



