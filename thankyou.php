<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thank You</title>
<link rel="shortcut icon" href="images/favicon.png"/>
<link href="style.css" rel="stylesheet" type="text/css"><!-- sliderman.js -->
<link rel="stylesheet" href="colorbox.css" />
<link rel="canonical" href="thankyou.php" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.colorbox.js"></script>
<script src="js/form.js" type="text/javascript"></script>
</head> 
<body>
<div id="head">
<div id="head-top">
<div id="logo"><a href="index.html"class="smoothScroll"><img src="images/logo.png" alt="Time Clock Free Logo" title="Time Clock Free Logo"/></a></div>
<ul class="menu">
<li><a href="features.html" >Features</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="download.html">Download</a></li>
<li><a href="pricing-plan.html" class="smoothScroll">Pricing</a></li>
<li><a href="#faq" class="smoothScroll">FAQ</a></li>
<li><a href="contact.html" class="active">Contact us</a></li>
</ul>
<ul class="right-sign">
<li id="topnav"> <a href="#" class="login signin" id="login-button">SIGN IN</a></li>
</ul>
<fieldset id="signin_menu">
<form name="loginform" id="loginform" action="#" method="post">
<p class="login-username">
<label for="user_login">Username</label><br/>
<input type="text" name="log" id="user_login" class="input" value="" size="20" /></p>
<p class="login-password">
<label for="user_pass">Password</label><br/>
<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></p>
<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label></p>
<p class="login-submit">
<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Sign In" />
<input type="hidden" name="redirect_to" value="#" /></p>
<div class="or-divider">
<hr>
<p>or login with</p>
<hr>
</div><!--or-divider-->
<a class="wpmu_dev_login-button wpmu_dev_login-facebook" href="#"><span class="fb-icon" ></span>Facebook</a>
<a class="wpmu_dev_login-button wpmu_dev_login-google" href="#" data-auth_url="#"><span class="g-icon"></span>Google</a><div class="lost-password">
<p>
<a href="/wp-login.php?action=lostpassword">Lost your password?</a> <br/>
<a href="/#signup">Create an account</a>
</p>
</div><!--lost-password-->
</form>
</fieldset>
</div><!--head top ends here-->
</div><!--head ends here-->
<div id="banner-1">
<img src="images/inner-banner.jpg" alt="employee time tracking" title="employee time tracking"/>
<ul class="move-1">
<h1>We focus on increasing your revenue</h1>
<span class="heading-move">Get ready for exponential returns from your search.</span>
</ul>
</div><!--banner ends here-->
<div class="wrapper">
<div class="content">
 <?php
 
 if (isset($_POST['submit'])) 
{     
// get posted data into local variables
$Name = Trim(stripslashes($_POST['name']));
$Phone = Trim(stripslashes($_POST['phone']));
$Email = Trim(stripslashes($_POST['email']));
$Url = Trim(stripslashes($_POST['website']));
$Message = Trim(stripslashes($_POST['comment']));

$EmailTo = "support@parktime.com";
$Subject = "**Park time Form**"; 

// prepare email body text
$Body = "";
$Body .= "Name:- ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone:- ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email:- ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Website:- ";
$Body .= $Url;
$Body .= "\n";
$Body .= "Message:- ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");
echo "<h2 class="."thanks".">Thankyou for Submission"."</h2>
<p>Your information has been sent to our sales executives and they will contact you shortly within 24 hours</p>
"; 
} 
?></div><!--contemt ends here--> 
<div class="pricing" id="pricing">
<div class="content">
<div  id="faq"></div>
 <ul class="faqs">
<h3>Frequently Asked Questions</h3>
<li><img src="images/timeclockfree.jpg" alt="Frequently Asked Questions"/><strong>Who Needs Park Time?<br/>
</strong> Park Time offers the best solutions for online workforce management software for companies or business that would like to handle their workers and volunteers. Park Time has provided employee management software to retail centers, hotels, restaurants, call centers, hospitals for medical stuff, volunteers among others.</li>
 <li><strong><img src="images/timeclockfree.jpg" alt="Frequently Asked Questions"/>Will my staff members enjoy Park Time?<br/>
 </strong>
They will definitely enjoy it. Many employees enjoy our software and they are even referring us to their managers. Your staff members will enjoy the freedom to login at any time and they can also check their schedules, see open shifts, exchange shifts and even book vacation time.</li>
<li><img src="images/timeclockfree.jpg" alt="Frequently Asked Questions"/><strong>Is there an option of Importing or Exporting data?<br/>
</strong>Yes, you can do so at any time. We give you choices on how to import or export your schedules or employee data through channels such as .csv and xls on our website. Our API gives you full time access to any data in the workforce management software.</li>
 <li><strong><img src="images/timeclockfree.jpg" alt="Frequently Asked Questions"/>Is Time Clock Free Compatible with other applications?<br/>
 </strong>
Time Clock Free can work well with other applications that you are already using for your business. There are apps that can integrate well through our API such as those from Google, Facebook, iPhone, Google Calender and many others.</li>
<li><img src="images/timeclockfree.jpg" alt="Frequently Asked Questions"/><strong>How much time do I save with Time Clock Free?<br/>
</strong>Time Clock Free, employee scheduling software online helps reduce the amount of time you spend on employee scheduling and workforce management tasks.</li>
 <li><strong><img src="images/timeclockfree.jpg" alt="Frequently Asked Questions"/>What is the Cost of getting Time Clock Free?<br/>
 </strong>The cost of Time Clock Free online employee scheduling is anything from $20 per month. It might be higher depending on the needs of your business.</li>
</ul>
<div class="button-sm"><a href="faq.html">Frequently Asked Questions</a></div>
</div><!--content-->
</div><!--price-plan-->
</div><!--wrapper ends here-->
<div id="footer">
<div class="footer-main">
<div class="f-links">
<h4>Quick Links</h4>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="privacy-policy.html">Privacy Policy</a></li>
<li><a href="about-us.html">About us</a></li>
<li><a href="how-its-work.html">How its Work</a></li>
<li><a href="partners.html">Partners</a></li>
<li><a href="contact.html">Contact Us</a></li>
<li><a href="terms-of-service.html">Terms and Conditions</a></li>
</ul>
</div>
<div class="m-links"> 
<!--<div class="social">
<ul>
 <li class="facebook"></li>
<li class="twitter"></li> 
 <li class="gplus"></li> 
<li class="linkdin"></li>
</ul>
</div>-->
<!--<a href="#"><img src="images/social-media.jpg" alt="Social" style="margin:10px 0;"></a> -->
<div class="button-1"><a href="#">Create Account</a></div>
<p>Copyright @ 2013 Park Time<br></p>
<div class="colon">Designed by <a href="http://www.seoranksmart.com/">SEO Rank Smart</a></div>
</div><!--mlinks ends here-->
</div>
</div>
<script type="text/javascript" src="js/smoothscroll.js"></script>
</body>
</html>