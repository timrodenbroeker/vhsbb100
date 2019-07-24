<a href="#story">
	<section class="intro sectionFg" id="intro">
		<div class="container">
			<div class="row flex-center-vert">
				<div class="col-sm-5">
					<video src="<?php echo($template_intro_videorsc); ?>" autoplay loop></video>
				</div>
				<div class="col-sm-5">
					<?php echo($template_intro_text); ?>
					<!-- <a href="#kurse" class="intro-kurs">aa</a>
					<a href="#kurse" class="intro-kurs">aaa</a> -->
				</div>
			</div>
		</div>
	</section>
</a>

<div class="spacer" id="story"></div>

<section class="story">
	<div class="container">
		
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<p class="lead">
					<?php echo($template_story_text); ?>
				</p>
			</div>
		</div>
	</div>	
</section>

<div class="spacer"></div>
<hr>
<div class="spacer"></div>

<section class="kurse" id="kurse">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-1">			
				<div class="kurs">
					<div class="kurs-head">
						<h3 style="color: <?php echo($template_kurs1_hcolor); ?>;" class="lead"><?php echo($template_kurs1_headline); ?></h3>
						<h4><?php echo($template_kurs1_subheadline); ?></h4>
					</div>

					<p class="kurs-desc">
						<?php echo($template_kurs1_beschreibungstext); ?>
					</p>
					<div class="kurs-meta">
						<div class="row">
							<div class="col-sm-12">
								<p>	<?php echo($template_kurs1_info1); ?></p>	
							</div>
							<div class="col-sm-12">
								<p><?php echo($template_kurs1_info2); ?></p>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="kurs">
					<div class="kurs-head">
						<h3 style="color: <?php echo($template_kurs2_hcolor); ?>;" class="lead"><?php echo($template_kurs2_headline); ?></h3>
						<h4><?php echo($template_kurs2_subheadline); ?></h4>
					</div>

					<p class="kurs-desc">
						<?php echo($template_kurs2_beschreibungstext); ?>
					</p>
					<div class="kurs-meta">
						<div class="row">
							<div class="col-sm-12">
								<p>	<?php echo($template_kurs2_info1); ?></p>	
							</div>
							<div class="col-sm-12">
								<p><?php echo($template_kurs2_info2); ?></p>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="spacer"></div>
<hr>
<div class="spacer"></div>

<div class="container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<h3 class="claim"><?php echo($template_abspann_claim); ?></h3>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<p class="lead"><?php echo($template_abspann_text); ?></p>
		</div>
	</div>
</div>

<div class="spacer"></div>

<footer>
	<div id="logo">
		<img src="../media/logo.svg">
	</div>
</footer>