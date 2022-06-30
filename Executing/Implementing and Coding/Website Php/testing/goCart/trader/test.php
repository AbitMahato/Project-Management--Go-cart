<?php  include 'connection.php';
                        $to_email = "bibek8872@gmail.com";
            $subject = "Welcome to goCart!";
            $headers = "From: goCart  <gocartuk@gmail.com>";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $message = '
            
            
            <html> <!-- #A3D0F8 -->
	<body style="color: #000; font-size: 16px; text-decoration: none; font-family:  Helvetica, Arial, sans-serif; background-color: #efefef;">
		
		<div id="wrapper" style="max-width: 600px; margin: auto auto; padding: 20px;">
			
			<div id="logo" style="">
				<center><h1 style="margin: 0px;"><a href="{SITE_ADDR}" target="_blank"><img style="max-height: 75px;" src="https://user-images.githubusercontent.com/51358696/124447031-b79da580-dda0-11eb-8f13-b9751e8fa7d1.png"></a></h1></center>
			</div>
				
			<div id="content" style="font-size: 16px; padding: 25px; background-color: #fff;
				moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; -khtml-border-radius: 10px;
				border-color: #A3D0F8; border-width: 4px 1px; border-style: solid;">

				<h1 style="font-size: 22px;"><center>Dear :Bibek , Your Account has been Dis Approved !</center></h1>
				
				<p>Hi,</p>

				<p>We understand that you would like to join our goCart Seller Community</p>

				<p>But! We reviewed your account and the information you provided, and we decided that you may no longer sell on goCart</p>

				<p>You can learn more about our terms and condition for Seller account here (https://goCart.com/terms-and-condition-seller) </p>

				<p>We may not reply to futher emails about this issue.</p>

			
				
			</div>

			<div id="footer" style="margin-bottom: 20px; padding: 0px 8px; text-align: center;">
				<a href="http://localhost/testing/goCart/index.php" target="_blank" style="text-decoration: none; color: #238CEA;">@goCart</a> 
			</div>
		</div>
	</body>
</html>';


            

            if (mail($to_email, $subject, $message, $headers)) {
                echo "<div class='col-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 d-flex align-items-center justify-content-center'>Email successfully sent to $to_email...</div>";
            } else {
                echo "Email sending failed...";
            }

            ?>