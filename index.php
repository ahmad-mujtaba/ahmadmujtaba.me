<?php

	include('inc/includes.php');	
	
	
?>
<!DOCTYPE html>
    <html lang='en'>
        <head>
            <title>Mujtaba Ahmad | Software Engineer II</title>
            
            <meta charset='utf-8'>
            <meta http-equiv='x-ua-compatible' content='ie=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
			<link rel='shortcut icon' href='<?php echo SITE_ROOT; ?>/favicon.ico<?php echo $staticAssetsVersion; ?>' type='image/x-icon' />
            
            <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:300,400,400i,700,700i' rel='stylesheet'> 
            <link href='<?php echo SITE_ROOT; ?>/css/styles.css<?php echo $staticAssetsVersion; ?>' rel='stylesheet' />
			<link rel='stylesheet' href='//cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css'>
        </head>
        <body class="<?php echo isset($_GET["print"])  ? "print" : ""; ?>">
            <main id='wrapper'>
                <header>
                    <div class='header-wrapper'>
						<h1 id='header-logo'>Mujtaba Ahmad</h1> 
						<h2>Software Engineer II</h2>
                    </div>
                    <div class='contact-info'>
						<h3 id='header-email'><i class='mdi mdi-map-marker'></i> Pune</h3>
                        <h3 id='header-email'><i class='mdi mdi-email-outline'></i> <a href='mailto:mujtaba.ahmad91@gmail.com'> mujtaba.ahmad91@gmail.com</a></h3>
                        <h3 id='header-phone'><i class='mdi mdi-phone'></i> <a href='tel:+919766666845'>+91 97666 66845</a></h3>
						<h3 id='header-github'><i class='mdi mdi-github-circle'></i> <a href='https://github.com/ahmad-mujtaba/' target='_blank'>ahmad-mujtaba</a></h3>
						<h3 id='header-link'><i class='mdi mdi-earth'></i> <a href='https://www.ahmadmujtaba.me'>www.ahmadmujtaba.me</a></h3>
                    </div>
                </header>
				
				<article>
					<h2><i class='mdi mdi-briefcase'></i> Profile Summary</h2>

					<ul>
						<li><strong><?php echo yearsSince("15 June 2015");?></strong> of experience as a software engineer developing high impact applications</li>
						<li>Skilled in <strong>MEAN/MERN</strong>, <strong>Java</strong>, and <strong>LAMP</strong> based technology stacks</li>
						<li>Good experience working with both frontend and backend technologies</li>
						<li>Proficient in building secure web-based client-server solutions</li>
						<li>Involved in SDLC and familiar with working in an <strong>Agile</strong> environment</li>
						<li>Involved in <strong>database designing</strong> with table normalization and optimization</li>
						<li>Familiar with modern Test Automation and CI/CD methodologies</li>
					</ul>
				</article>
                
                <article>
                    <div class='left'>
                        <h2><i class='mdi mdi-school'></i> Education</h2>
						
						<h3>
							<strong>B.E.</strong> in Computer Engineering <small>(First Class)</small> <span class='year floatright'>2011&mdash;2015</span> 
							<br/>
							<small>from <strong>K K Wagh Institute of Engineering Education &amp; Research, Nashik</strong> &mdash; Savitribai Phule Pune University</small>
						</h3>
                    </div>
                    <div class='skills'>
                        <h2><i class='mdi mdi-code-tags'></i> Skillset</h2>
			    
			
						<div class="p">
							<h3 class='skill-title no-margin'>Primary skills &mdash;</h3> 
							JavaScript and frontend JavaScript frameworks (Angular, React TypeScript, jQuery), NodeJS, ES6, Java/JEE, HTML5, CSS3, SASS, PWA, Hybrid mobile application development, Web application development
						</div>						
			
		    			<div class="p">
		    				<h3 class='skill-title'>Secondary skills &mdash;</h3> 
							Grunt/Gulp, Bootstrap, Python, php, Spring MVC, WordPress, Ionic, Liferay, Phonegap/Cordova, MySql, Mongo DB
						</div>
                        <!--<table id='skills'>
							<?php echo $skillsHtml; ?>                            
                        </table> -->
                    </div>
                    
                    
					<h2><i class='mdi mdi-account-star'></i> Employment &amp; project history</h2>
                    <div class='experience'>
                        <h3>
							<strong>Software Engineer II</strong> <span class='year floatright'>since April 2018</span>
							<br>Knorex Pvt Limited (Utility Services Team)
						</h3>

						<ol>
							
							<li>
								
								<div class="p">
									<strong>Domain</strong> &mdash; Programmatic Advertising Solutions <br>
									<strong>Work</strong> &mdash; 

									<ul class="less-margin-top">
										<li>Developed both the frontend and the backend for a custom quotation generation system from scratch. Integrated the product with company wide SSO, 3rd Party CRM and Document Signing provider</li>
										<li>Part of the Brand Display team responsible for the in house creative generation system.</li>
										<li>Also responsible for the building the next generation of the creative testing application used by QA</li>
										<li>Maintained and developed enhancements to the company websites</li>
										<li>Wrote web crawlers in python for fetching dynamic content to customer's creatives</li>
									</ul>

									
									<strong>Responsibilities</strong> &mdash; <br>
									<ul class="less-margin-top">
										<li>Effort estimation for new tasks</li>
										<li>Developing new features and enhancement of existing features as per business requirements</li>
										<li>Converting visual designs into front-end code</li>
										<li>Involved in designing database schema for new features as and when required</li>
										<li>Peer reviewing code to meet quality checks</li>
										<li>Refactoring old code to be more performant, secure, and maintainable</li>										
										<li>Involved in Code Review, Unit testing, Debugging and Integration Testing of the application</li>
									</ul>	
									
									
									<strong>Technologies used</strong> &mdash; <br/>
									<ul class="less-margin-top">
										<li><strong>Backend</strong> &mdash; Node JS, Mongo DB, php</li>
										<li><strong>Frontend</strong> &mdash; Angular, React, jQuery, Angular Material framework</li>
										<li><strong>Integrations</strong> &mdash; OAuth based single sign-on, Jenkins</li>

									</ul>

								</div>
						
							</li>

						</ol>

                        <h3>
							<strong>Senior Software Engineer</strong> <span class='year floatright'>2015 - 2018</span>
							<br>Persistent Systems Limited
						</h3>
						
						<ol>
							
							<li>
								<h4>Liferay based web portal

									<span class='year floatright'>Sep 2016 - Apr 2018</span>
								</h4>
								<div class="p">
									<strong>Client</strong> &mdash; Mount Sinai (New York)<br>
									<strong>Domain</strong> &mdash; Healthcare <br>
									<strong>Description</strong> &mdash; A Liferay based web portal application for internal employees and partners of Mount Sinai that
									serves as a gateway to various in-house as well as 3rd party healthcare applications.<br>

									
									<!--
									<strong>Responsibilities</strong> &mdash; <br>
									<ul class="less-margin-top">
										<li>Effort estimation for new tasks</li>
										<li>Developing new features for the portal and enhancement of existing features as per business requirements</li>
										<li>Converting visual designs into front-end code</li>
										<li>Involved in designing database schema for new features as and when required</li>
										<li>Peer reviewing code to meet quality checks</li>
										<li>Refactoring old code to be more performant, secure, and maintainable</li>										
										<li>Involved in Code Review, Unit testing, Debugging and Integration Testing of the application</li>
									</ul>	
								-->
									
									
									<strong>Technologies used</strong> &mdash; <br/>
									<ul class="less-margin-top">
										<li><strong>Backend</strong> &mdash; Java, Liferay, Liferay Service Builder, Spring MVC, iText5, Oracle database</li>
										<li><strong>Frontend</strong> &mdash; HTML5, CSS3, Bootstrap, Javascript, jQuery, AngularJS  </li>
										<li><strong>Integrations</strong> &mdash; Salesforce, Box.com, Okta </li>

									</ul>

								</div>
						
							</li>

							<li>
								<h4>Industry leading online community SaaS product

									<span class='year floatright'>Sep 2015 - Aug 2016</span>
								</h4>
								<div class="p">
									<strong>Client</strong> &mdash; Lithium Technologies (San Francisco)<br>
									<strong>Domain</strong> &mdash; Social Media <br>
									<strong>Description</strong> &mdash; 
									An online community platform that helps businesses engage and interact with their customers <br>
									
									<strong>Responsibilities</strong> &mdash; <br>
									<ul class="less-margin-top">
										<li>Development of new features and enhancement of existing features per business requirements</li>
										<li>Involved in designing database schema for new features as and when required</li>
										<li>Peer reviewing code to meet quality checks</li>
										<li>Fixing critical bugs in the code</li>										
										<li>Writing and maintaining unit test cases for the codebase</li>
									</ul>			
									
									<strong>Modules worked on</strong> &mdash; Value Analytics, Tribal Knowledge Base, Accepted Solutions, Forum <br>
									<strong>Technologies used</strong> &mdash; <br>
									<ul class="less-margin-top">
										<li><strong>Backend</strong> &mdash; Java, Apache Tapestry, Lucene, MySql</li>
										<li><strong>Frontend</strong> &mdash; HTML5, CSS3, Javascript, jQuery</li>										
									</ul>
									
								</div>
						
							</li>
							
						</ol>
						
                    </div>
                    <div class='experience'>                        
                        <h3>
							<strong>Freelance and other work</strong> <span class='year floatright'>2009&mdash;2015</span>
						</h3>
                        <div class="p">
							<strong>Billed projects</strong> &mdash; 
							<ol>
								<li>Regional matrimonial website with user registration, mobile verification via OTP, photo uploads and 
									interest system
								</li>
								<li>Real estate portal with user registration and real estate submission system</li>
								<li>News portal for regional agency</li>								
								<li>Numerous WordPress themes and integrations</li>
								<li>Numerous small scale webdesign projects</li>
							</ol>

							<strong>...and several hobby projects</strong> 
							<!-- <ol>
								
								<li>Timetable &mdash; Hybrid Android application and accompanying web-based backend for teaching faculties</li>								
								<li>Analytics &mdash; A website traffic visualization tool</li>
								<li>GPS and Maps application for Nokia devices</li>
								<li>Apartment electricity uptime tracker</li>
								<li>Visual dashboard for ISP's monthly FUP limit</li>
								<li>Several utility android apps (for personal use)</li>
							</ol> -->
                        </div>
                    </div>
                    
					<div style='clear:both;'></div>
					
                    <div class='one-half left'>
                        <h2><i class='mdi mdi-trophy'></i> Achievements</h2>
                        <div class="p">
							<ol>
								<li><strong>1st</strong> prize in IBM's <strong>The Great Mind Challenge</strong> 2013</li>
								<li><strong>1st</strong> prize in Web design competition at <strong>PICT, Pune</strong> in 2014</li>
								<li><strong>2nd</strong> prize in Web design competition at <strong>PICT, Pune</strong> in 2013</li>
								<li><strong>3rd</strong> prize in Web design competition at <strong>PICT, Pune</strong> in 2012</li>
								<li><strong>1st</strong> prize in Web design competition at <strong>PICT, Pune</strong> in 2011</li>
								<li><strong>1st</strong> prize in .NET Project Competition in KKWIEER in 2013</li>
								<li><strong>1st</strong> prize in college level web design competition at KKWIEER, Nashik in 2013</li>								
							</ol>
						</div>
                    </div>
                    <div class='one-half right'>
                        <h2><i class='mdi mdi-creation'></i> Strengths</h2>
                        <div class="p">
							<ul>
								<li>Fast and motivated learner and can pickup new tech stack easily</li>								
								<li>Able to work effectively in a team as well as in an individual capacity</li>
								<li>Excellent oral and written communication skills</li>
								<li>Obsession with perfection and details</li>								
								<li>Knowledge of web services and microservice architecture</li>
							</ul>
                        </div>
                    </div>
                </article>
                
                <footer>
                    <div class='one-half'>
                        <h3><!-- <i class='mdi mdi-copyright'></i> <?php echo date('Y'); ?> --></h3>
                    </div>
                    <div class='one-half text-right'>
                        <h3>
							<a href='https://github.com/ahmad-mujtaba/ahmadmujtaba.me' target='_blank'><i class='mdi mdi-code-tags'></i> source</a>
						</h3>
                    </div>
                </footer>
            </main>
			<a class='print'><i class='mdi mdi-printer'></i></a>
			
			<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
			<script src='<?php echo SITE_ROOT;?>/js/app.js<?php echo $staticAssetsVersion; ?>'></script>
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
				
				ga('create', 'UA-97025416-1', 'auto');
				ga('send', 'pageview');		
			</script>
        </body>
    </html>
