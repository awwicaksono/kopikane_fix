
	
	<section class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Cafe Reference</h2>
					<ul class="breadcumb">
						<li><a href="index.html">KopiKane</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Recommendation</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>


	<section class="event-feature sec-padding pb_60" data-bg-color="#fafafa">
		<div class="container">
			<div class="row">
				<?php 

			
				
				foreach($tbl_cafe as $cafe) { ?>

				<div class="col-sm-6 col-md-4">
	              	<div class="event border-1px mb_30">
	                	<div class="row">
	                  		<div class="col-sm-12">
	                    		<div class="event-thumb">
	                      			<div class="thumb">
	                       				 <img width="100" src="<?php echo $cafe->gambar_cafe; ?>" alt="fotoCafe">
	                      			</div>
	                   
	                    		</div>
	                  		</div>
									<div class="col-sm-12">
										<div class="event-content p_20">
										<h4 class="event-title"><a href="#"><?php echo $cafe->nama_cafe; ?></a></h4>
										<ul class="event-held list-inline">
											<li data-text-color="#555"> <i class="fa fa-map-marker"></i> <?php echo $cafe->alamat_cafe; ?></li>
										</ul>
										<p class="mb-0"><?php echo $cafe->deskripsi_cafe; ?></p>
										<!--  <a class="text-thm" href="#"> Read More </a> -->
										</div>
									</div>
	                	</div>
					</div>
	            </div>
				
				<?php } ?>
			
				
				
				
	        </div>
			
		</div>
	</section>


	<!-- <section class="overlay-white sec-padding parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 promote-project text-center">
					<h3>Save Children From Hunger</h3>
					<div class="sec-title colored text-center">
						<span class="decor">
							<span class="inner"></span>
						</span>
					</div>
					<h2>Became a part of the world lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore. Amido ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore.Lorem ipsum dolor sit amet, consectetur.</p>
					<a href="#" class="thm-btn">Donate Now</a>
                    <a href="#" class="thm-btn inverse">Read More</a>
				</div>
			</div>
		</div>
	</section>
 -->

	
	
