<?php
include("header.php");
include("../config.php")
?>

	</section>


	

	<section class="fact-counter-wrapper sec-padding parallax-section">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 col-md-offset-3 md-text-center">
					<div class="single-fact">
						<div class="icon-box">
							<i class="fa fa-instagram"></i>
						</div>
						<?php
			             $stmt = $conn->prepare("SELECT count(*) FROM donation");
			             $stmt->execute();
			             $row = $stmt->fetch(PDO::FETCH_NUM);
			             $stmtcount = $row[0];
			            ?>
						<span ><?php echo $stmtcount ?></span>
						<p>@KopiKane</p>
					</div>
					<div class="single-fact">
						<div class="icon-box">
							<i class="fa fa-phone"></i>
						</div>
						<?php
				             $stmt = $conn->prepare("SELECT count(*) FROM volunteer");
				             $stmt->execute();
				             $row = $stmt->fetch(PDO::FETCH_NUM);
				             $stmtcount = $row[0];
				            ?>
						<span><?php echo $stmtcount ?></span>
						<p>+6212345978</p>
					</div>
					<div class="single-fact">
						<div class="icon-box">
							<i class="fa fa-envelope"></i>
						</div>
						<?php
			             $stmt = $conn->prepare("SELECT count(*) FROM causes");
			             $stmt->execute();
			             $row = $stmt->fetch(PDO::FETCH_NUM);
			             $stmtcount = $row[0];
			            ?>
						<span><?php echo $stmtcount ?></span>
						<p>Kopikane@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	
	<?php 
	include('footer.php');
	?>


	