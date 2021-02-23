<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="author" content="VPG">
    <meta name="description" content="Spécialiste de la vente privée sur internet en ✈️ vacances haut de gamme et en séjour de luxe, profitez de réductions exclusives jusqu'à -70 % en tant que membre." />
    <meta name="keywords" content="html-meta-keywords" />
    <meta name="google" content="notranslate" />
    <meta name="google-signin-client_id" content="697905141874-6hf23abgstu9hjmgovktroitohqomtvt.apps.googleusercontent.com">

    <meta property="og:image" content="/s/images/social.jpg" />
    <meta property="og:title" content="Voyage Privé ? Je recommande !" />
    <meta property="og:description" content="Des offres jusqu&#39;à -70%, le luxe et les attentions en plus !" />
    <meta property="fb:pages" content="141189982571145" />
    <meta name="application-name" content="Voyage Privé" />
    <meta name="p:domain_verify" content="1ab0bf7929fe4791cc42b9e09136e0f6"/>
    <meta name="msapplication-TileColor" content="#1d1d1d">
    <meta name="msapplication-config" content="/s/statics/icons/browserconfig.xml">
    <meta name="theme-color" content="#1d1d1d">


    <title>Expedays : comming soon</title>

    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
</head>
<body id="page">
    <div class="container">
                <ul class="cb-slideshow">
                    <li>
                        <span>Image 01</span>
                    </li>
                    <li>
                        <span>Image 02</span>
                    </li>
                    <li>
                        <span>Image 03</span>
                    </li>
                    <li>
                        <span>Image 04</span>
                    </li>
                    <li>
                        <span>Image 05</span>
                    </li>
                </ul>
        </div>


        <?php 
        // Import PHPMailer classes into the global namespace
        // These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        // Load Composer's autoloader
        require 'vendor/autoload.php';

        // Instantiation and passing `true` enables exceptions

		if(isset($_POST)&&!empty($_POST)){

			$name =  (string)htmlspecialchars($_POST["full_name"]) ;
			$email =  (string)htmlspecialchars($_POST["email"]);
			$accepted =  (boolean)htmlspecialchars($_POST["join"]);

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "expedays";

			try {
			  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			  // set the PDO error mode to exception
			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			  $sql = 'INSERT INTO users (name, email, accepted)VALUES ("'.$name.'", "'.$email.'", "'.$accepted.'")';
			  // use exec() because no results are returned
			  $conn->exec($sql);
			  echo "<p class='thank-you'>Thank you ".$name." for your subscription!</p>";
			} catch(PDOException $e) {

    		echo '<pre />';
			  echo $sql . "<br>" . $e->getMessage();
			}

			$conn = null;
            
            //------------------------------------------------------------------------------------------------

			// create a new object
			$mail = new PHPMailer();
			// configure an SMTP
			$mail->isSMTP();
			$mail->Host = 'smtp.mailtrap.io';
			$mail->SMTPAuth = true;
			$mail->Username = '5e596736ac1489';
			$mail->Password = '86c5a79b0c7f59';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 2525;

			$mail->setFrom('solovastrulivia@yahoo.com', 'Expedays');
			$mail->addAddress($email, $name);
			$mail->Subject = 'Thank you for subscription';
			// Set HTML 
			$mail->isHTML(TRUE);
			$mail->Body = '<p class="thank-you">Thank you '.$name.' for your subscription!</p>';
			// add attachment
			// $mail->addAttachment('//confirmations/yourbooking.pdf', 'yourbooking.pdf');
			// send the message
			if(!$mail->send()){
			    echo '<p class="thank-you">Message could not be sent.</p>';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo '<p class="thank-you">Message has been emailed.</p>';
			}



		// --------------------------------------------------------------------------------------------------

		}
		else // $_POST is empty.
		{
		    echo "<p>Perform code for page without POST data.</p> ";
		}




	?>

    </div>
    <div class="container-fluid formSignUp">
        <header id="header" class="signup" style="position: absolute; top: 0px; left: 0px; right: 0px;">
            <div class="page-center">
                <a class="logo" href="/">
                    <figure class="logo-figure"><img src="images/Expedays-logo.png" alt="expedays" width="468px" /></figure>
                </a>              
            </div> 
        </header>
    </div>
</body>


            <script type="text/javascript">


//----------------timer----------------//


// Set the date we're counting down to
var countDownDate = new Date("Dec 25, 2020 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("timer").innerHTML = days + "days : " + hours + "h : "
  + minutes + "m : " + seconds + "s";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
}
}, 1000);



</script>
</html>

