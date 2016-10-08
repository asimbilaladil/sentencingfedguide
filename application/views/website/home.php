<div class="responsive-header">
	<div class="topbar">
		<div class="container">
			<!-- Top Social -->
			<div class="pull-right">
				<ul class="contact-information">
					<li><i class="fa fa-phone"></i>Tel: 0056 764 234 5621</li>			
					<li><i class="fa fa-envelope-o"></i>Mail: office@eclipse.com</li>
				</ul><!-- Contact Information -->
				<form>
					<input type="text" placeholder="search" />
					<button><i class="fa fa-search"></i></button>
				</form><!-- Search Form -->
			</div>
		</div>
	</div><!-- Top Bar -->	

	<div class="responsive-logo">
		<a href="#" title=""><img src="<?php echo base_url("assets/images/logo.jpg") ?>" alt="Logo" /></a>
	</div><!-- Responsive Logo -->	
	<span><i class="fa fa-align-justify"></i></span>
	<ul>
		<li><a href="#" title=""><i class="fa fa-home"></i>Home</a>

	</ul>
</div><!--Responsive header-->

<section>
	<div class="block gray extra-gap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="resume">
						<div class="row">
							<div class="col-md-9 column">
								<h5 style="font-weight: bold; font-size: -webkit-xxx-large;"><?php echo $user_profile['name']; ?></h5>
								<h4>Title</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euistincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniamnostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>

							</div>
							<div class="col-md-3 column">
								<div class="resume-img">
									<img src="<?php echo 'https://graph.facebook.com/'. $user_profile['id'] .'/picture?type=large' ?>" alt="">
								</div>
							</div>
						</div>
					</div><!-- RESUME -->
				</div>
			</div>
		</div>
	</div>
</section>

<section class="inner-page">

            <section>
                <div class="block white">
                    <div class="container">
                        <div class="row">
                            <div class="heading">
                                <h2><i>Run</i> A Report</h2>
                            </div>

                       		<div class="col-md-6 column">
								<div class="col-md-3">
								</div>
									<button  style="background-color: #ff7c00" type="button" class="col-md-6 btn btn-success">Quick Run Report</button>


							</div>
                       		<div class="col-md-6 column">
								<div class="col-md-3">
								</div>
									<button style="background-color: #ff7c00" type="button" class="col-md-6 btn btn-success">Full Formal Report</button>


							</div>						

                        </div>
                    </div>
                </div>
            </section>


        </section>