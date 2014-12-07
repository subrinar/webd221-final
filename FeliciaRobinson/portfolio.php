<?php 
$page_title = "Portfolio"; // must be before header.php
include "inc/header.php"; 
?>


<!--  start PORTFOLIO-HERO section  -->
			
		<section class="port-hero clearfix">			
			 <div class="text-center">
              <h1>Our <span class="orange">Works</span></h1>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio 
nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
       </div>
		</section>	
			
		<!--  end PORTFOLIO HERO section  -->
		
		
		<!--  start OUR PORTFOLIO section  -->		
			
		<section id="portfolio-main" class="uibrush clearfix">
			<div class="wrapper">
				<article class="portfolio-details"> 
					<h1><span class="underline">Our Portfolio</span></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
				</article>  
			</div>
		</section>
				<!-- END OUR PORTFOLIO MAIN SECTION -->
				
          
          
		<!--  start MYWORKS  section  -->
					
		<section id="myworks" class="recent-projects clearfix">
			<div class="wrapper">
					<ul class="myworks clearfix"> 
							<li data-filter="*" class="btn-active"><a href="">All</a></li>
							<li data-filter=".html" class=""><a href="">HTML</a></li>
							<li data-filter=".jquery" class=""><a href="">Jquery</a></li>
							<li data-filter=".uidesign" class=""><a href="">UI Design</a></li>
							<li data-filter=".wordpress" class=""><a href="">Wordpress</a></li>
					</ul>
			
					
				<div class="port"> 
					<ul id="isotope" class="portfolio isotope">						
						<li class="work-port item html">	
							<img src="images/pic9-250x167.jpg" alt="" title="">
							<div class="mask"> 
								<div class="mask-content">
									<div class="mask-wrapper">
										<a href="#" class="info ajax_load"><i class="fa fa-link fa-border"></i></a>									
                    <h4 class="upper">Extreme Freestyle</h4>
									</div>
								</div>							
							</div>
						</li>	
						
						
						<li class="work-port item jquery">
							<img src="images/pic10-250x167.jpg" alt="" title="">
							<div class="mask"> 
								<div class="mask-content">
									<div class="mask-wrapper">
										<a href="#" class="info ajax_load"><i class="fa fa-link fa-border"></i></a>									
                    <h4 class="upper">JQuery Code</h4>
									</div>
								</div>							
							</div>
						</li>
						
						<li class="work-port item uidesign">
							<img src="images/pic8-250x167.jpg" alt="" title="">
							<div class="mask"> 
								<div class="mask-content">
									<div class="mask-wrapper">
										<a href="#" class="info ajax_load"><i class="fa fa-link fa-border"></i></a>									
                    <h4 class="upper">Logo Design</h4>
									</div>
								</div>							
							</div>
						</li>
						
						<li class="work-port item wordpress">
							<img src="images/pic5-250x167.jpg" alt="" title="">
							<div class="mask"> 
								<div class="mask-content">
									<div class="mask-wrapper ">
										<a href="#" class="info ajax_load"><i class="fa fa-link fa-border"></i></a>									
                    <h4 class="upper">Template Design</h4>
									</div>
								</div>							
							</div>
						</li>
						
						<li class="work-port item wordpress">	
							<img src="images/pic9-250x167.jpg" alt="" title="">
							<div class="mask"> 
								<div class="mask-content">
									<div class="mask-wrapper ">
										<a href="#" class="info ajax_load"><i class="fa fa-link fa-border"></i></a>									
                    <h4 class="upper">Project Tom Jones</h4>
									</div>
								</div>							
							</div>
						</li>						
						<li class="work-port item jquery">
							<img src="images/pic10-250x167.jpg" alt="" title="">
							<div class="mask"> 
								<div class="mask-content">
									<div class="mask-wrapper ">
										<a href="#" class="info ajax_load"><i class="fa fa-link fa-border"></i></a>									
                    <h4 class="upper">Project 1</h4>
									</div>
								</div>							
							</div>
						</li>
						
						<li class="work-port item html">
							<img src="images/pic8-250x167.jpg" alt="" title="">
							<div class="mask"> 
								<div class="mask-content">
									<div class="mask-wrapper ">
										<a href="#" class="info ajax_load"><i class="fa fa-link fa-border"></i></a>									
                    <h4 class="upper">Project 3</h4>
									</div>
								</div>							
							</div>
						</li>
						
						<li class="work-port item uidesign">
							<img src="images/pic5-250x167.jpg" alt="" title="">
							<div class="mask"> 
								<div class="mask-content">
									<div class="mask-wrapper ">
										<a href="#" class="info ajax_load"><i class="fa fa-link fa-border"></i></a>									
                    <h4 class="upper">UI Design</h4>
									</div>
								</div>							
							</div>
						</li>
						
						<li class="work-port item wordpress">	
							<img src="images/pic9-250x167.jpg" alt="" title="">
							<div class="mask"> 
								<div class="mask-content">
									<div class="mask-wrapper ">
										<a href="#" class="info ajax_load"><i class="fa fa-link fa-border"></i></a>									
                    <h4 class="upper">WordPress</h4>
									</div>
								</div>							
							</div>
						</li>	
						
					</ul>
				</div>	
			</div> <!--  /wrapper  -->
		</section>
		<!--  end recent projects section  -->









<?php include "inc/footer.php"; ?>	