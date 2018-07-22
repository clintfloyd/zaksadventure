<?php include_once("variables.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Zak's Adventure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Gaegu:300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="css/css/bootstrap-reboot.min.css" />
		<link rel="stylesheet" href="css/css/bootstrap-grid.min.css" />
		<link rel="stylesheet" href="css/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/css/styles.css" />
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row topMenu">
					<div class="col-12 col-md-4">
						<img src="images/zak-updated-white.svg" class="logo" />
					</div>
					<div class="col-12 col-md-8">
						<div class="headText text-right">
							I'm currently in <?php echo $CURRENTLY_IN; ?> and it's <span><?php echo $temp_in_c; ?></span>&deg;C outside.
						</div>
					</div>
				</div>
			</div>
		</header>

		<section class="stats">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3">
						<div>
							<span><?php echo getBday(); ?></span>
							<span><?php echo yearsLabel(); ?> old</span>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div>
							<span><?php echo $WEIGHT; ?></span>
							<span>kg</span>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div>
							<span><?php echo $HEIGHT; ?></span>
							<span>cm</span>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div>
							<span><?php echo $COUNTRIES_VISITED; ?></span>
							<span>countries</span>
						</div>
					</div>
				</div>
			</div>
			<figure class="blackPolygon"></figure>
		</section>

		<section class="photoSection">
			<div class="container">
				<h1>My snappy snaps!</h1>
				<div class="row">
					<?php
					$data = $insta_photos['data'];
					foreach($data as $d){
						$image = $d->images->standard_resolution->url;
						$caption = @$d->caption->text;
					?>
						<div class="col-6 col-md-3 photoContainer" id="<?php echo $d->id; ?>">
							<div>
								<a href="javascript:;" class="openImage">
									<img src="<?php echo $image; ?>" class="img-fluids" />
									<p>
										<?php echo $caption; ?>
									</p>
								</a>
							</div>
						</div>
					<?
					}
					?>
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div>
					Copyright &copy; 2018. Zak's Adventure. <a href="javascript:;" data-toggle="modal" data-target="#PrivacyPolicy">Privacy Policy</a>
				</div>
			</div>
			<figure class="polygonFooter"></figure>
		</footer>



		<div class="myModal" role="dialog" tabindex="-1" aria-hidden="true" id="PrivacyPolicy">
			<a href="javascript:;" class="closeDialog" data-toggle="modal" data-target="#PrivacyPolicy">&times;</a>
			<div class="container">
				<h1>Privacy Policy</h1>


				<p>Effective date: July 22, 2018</p>


				<p>Zak's Adventure ("us", "we", or "our") operates the http://zaksadventure.com website (the "Service").</p>

				<p>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data. This Privacy Policy  for Zak's Adventure is powered by <a href="https://www.freeprivacypolicy.com/free-privacy-policy-generator.php">FreePrivacyPolicy.com</a>.</p>

				<p>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible from http://zaksadventure.com</p>


				<h2>Information Collection And Use</h2>

				<p>We collect several different types of information for various purposes to provide and improve our Service to you.</p>

				<h3>Types of Data Collected</h3>

				<h4>Personal Data</h4>

				<p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you ("Personal Data"). Personally identifiable information may include, but is not limited to:</p>

				<ul>
				<li>Cookies and Usage Data</li>
				</ul>

				<h4>Usage Data</h4>

				<p>We may also collect information how the Service is accessed and used ("Usage Data"). This Usage Data may include information such as your computer's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>

				<h4>Tracking & Cookies Data</h4>
				<p>We use cookies and similar tracking technologies to track the activity on our Service and hold certain information.</p>
				<p>Cookies are files with small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Tracking technologies also used are beacons, tags, and scripts to collect and track information and to improve and analyze our Service.</p>
				<p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>
				<p>Examples of Cookies we use:</p>
				<ul>
				    <li><strong>Session Cookies.</strong> We use Session Cookies to operate our Service.</li>
				    <li><strong>Preference Cookies.</strong> We use Preference Cookies to remember your preferences and various settings.</li>
				    <li><strong>Security Cookies.</strong> We use Security Cookies for security purposes.</li>
				</ul>

				<h2>Use of Data</h2>
				    
				<p>Zak's Adventure uses the collected data for various purposes:</p>    
				<ul>
				    <li>To provide and maintain the Service</li>
				    <li>To notify you about changes to our Service</li>
				    <li>To allow you to participate in interactive features of our Service when you choose to do so</li>
				    <li>To provide customer care and support</li>
				    <li>To provide analysis or valuable information so that we can improve the Service</li>
				    <li>To monitor the usage of the Service</li>
				    <li>To detect, prevent and address technical issues</li>
				</ul>

				<h2>Transfer Of Data</h2>
				<p>Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.</p>
				<p>If you are located outside United Arab Emirates and choose to provide information to us, please note that we transfer the data, including Personal Data, to United Arab Emirates and process it there.</p>
				<p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>
				<p>Zak's Adventure will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.</p>

				<h2>Disclosure Of Data</h2>

				<h3>Legal Requirements</h3>
				<p>Zak's Adventure may disclose your Personal Data in the good faith belief that such action is necessary to:</p>
				<ul>
				    <li>To comply with a legal obligation</li>
				    <li>To protect and defend the rights or property of Zak's Adventure</li>
				    <li>To prevent or investigate possible wrongdoing in connection with the Service</li>
				    <li>To protect the personal safety of users of the Service or the public</li>
				    <li>To protect against legal liability</li>
				</ul>

				<h2>Security Of Data</h2>
				<p>The security of your data is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>

				<h2>Service Providers</h2>
				<p>We may employ third party companies and individuals to facilitate our Service ("Service Providers"), to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing how our Service is used.</p>
				<p>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>

				<h3>Analytics</h3>
				<p>We may use third-party Service Providers to monitor and analyze the use of our Service.</p>    
				<ul>
				        <li>
				        <p><strong>Google Analytics</strong></p>
				        <p>Google Analytics is a web analytics service offered by Google that tracks and reports website traffic. Google uses the data collected to track and monitor the use of our Service. This data is shared with other Google services. Google may use the collected data to contextualize and personalize the ads of its own advertising network.</p>
				        <p>You can opt-out of having made your activity on the Service available to Google Analytics by installing the Google Analytics opt-out browser add-on. The add-on prevents the Google Analytics JavaScript (ga.js, analytics.js, and dc.js) from sharing information with Google Analytics about visits activity.</p>                <p>For more information on the privacy practices of Google, please visit the Google Privacy & Terms web page: <a href="https://policies.google.com/privacy?hl=en">https://policies.google.com/privacy?hl=en</a></p>
				    </li>
				                            </ul>


				<h2>Links To Other Sites</h2>
				<p>Our Service may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
				<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>


				<h2>Children's Privacy</h2>
				<p>Our Service does not address anyone under the age of 18 ("Children").</p>
				<p>We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Children has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers.</p>


				<h2>Changes To This Privacy Policy</h2>
				<p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
				<p>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the "effective date" at the top of this Privacy Policy.</p>
				<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>


				<h2>Contact Us</h2>
				<p>If you have any questions about this Privacy Policy, please contact us:</p>
				<ul>
				        <li>By email: clintfloyd@gmail.com</li>
				          
				        </ul>                                
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>