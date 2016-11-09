<?php

$add_header="From:info@tldvision.com\r\n";
$add_header	.= "Reply-to: info@tldvision.com\r\n";
$add_header	.= "X-Mailer: PHP/". phpversion();
$opt = '-f'.'sayaka.nishitani@gmail.com'; 

$message =<<<HTML
This is an automatically generated email from TLD Vision. Thank you for your application.

-----

1) Jiméno:

{$_POST['name']}

2) Email:

{$_POST['email']}

3) Telefon:

{$_POST['tel']}

4) Dotaz:

{$_POST['dotaz']}

-----

We will contact you to the provided email address. If you have mistakes in the form or do not receive an email from us within 7 days, please contact us to: info@tldvision.com 


Best regards,

TLD Vision s.r.o.
tldvision.com


HTML;


  
// カレントの言語を日本語に設定する
// mb_language("ja");
// 内部文字エンコードを設定する　このエンコード指定は大昔の携帯だとShift-jisにしないとだめだったとか。
// 今はUTF-8にしておけばだいたいOKだから、楽な時代になったもんだよ。
mb_internal_encoding("UTF-8");
mb_send_mail($_POST['email'],"Auto-reply from TLD Vision: Thank you for your interest in TLD Vision.",$message,$add_header,$opt);
//mb_send_mail($_POST['e_mail'],"TLD Demo request",$message,$add_header,$opt);
//mb_send_mailは5つの設定項目がある
//mb_send_mail(送信先メールアドレス,"メールのタイトル","メール本文","メールのヘッダーFromとかリプライとか","送信エラーを送るメールアドレス");
//5番目の情報は第5引数と呼ばれるものでして、これがないと迷惑メール扱いになることも。



//マスター管理者にも同じメールを送りつける！！
mb_send_mail('sayaka.nishitani@gmail.com',"TLD Career Application",$message,$add_header,$opt);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Autoškola Trešl</title>
	<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
	<style>

	/* Style for our header texts
	* --------------------------------------- */
	h1{
		font-size: 5em;
		margin:0;
		padding:0;
	}
	h2{
		font-size:2em;
	}
	h3{
		font-size:1.5em;
	}
	body{
	font-family: arial,helvetica;
	color: rgba(0,0,0,1);
}

	#section0 h1, h2, h3{
		color:#fff;
	}
	#section1 h1{
		font-size:4em;

	}

	/* Centered texts in each section
	* --------------------------------------- */
	.section{
		text-align:center;
		overflow: hidden;
	}

	#myVideo{
		position: absolute;
		right: 0;
		bottom: 0;
		top:0;
		right:0;
		width: 100%;
		height: 100%;
		background-size: 100% 100%;
 		background-color: black; /* in case the video doesn't fit the whole page*/
  		background-image: /* our video */;
  		background-position: center center;
  		background-size: contain;
   		object-fit: cover; /*cover video background */
   		z-index:3;
	}



	/* Layer with position absolute in order to have it over the video
	* --------------------------------------- */
	#section0 .layer{
		position: absolute;
		z-index: 4;
		width: 100%;
		left: 0;
		top: 43%;
	}

	/*solves problem with overflowing video in Mac with Chrome */
	#section0{
		overflow: hidden;
	}

	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="vendors/scrolloverflow.js"></script>

	<script type="text/javascript" src="jquery.fullPage.js"></script>
	<script type="text/javascript" src="examples.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: true,
				sectionsColor: ['#1bbc9b', '#ffffff'],
				afterRender: function(){


					//playing the video
					$('video').get(0).play();
				}
			});
		});
	</script>

</head>
<body>

<div id="fullpage">
	<div class="section" id="section0">
		<video autoplay loop muted id="myVideo">
			<source src="video.mp4" type="video/mp4">
		</video>
		<div class="layer">
			<h1>Autoškola Trešl</h1>
			<h2>Skupiny: AM, A1, A2, A, B</h2>
			<h3 style="padding-top:20px;">Výuka: Sezimovo Ústí<br>Zkoušky: Soběslav</h3>
		</div>
	</div>
	
	<div class="section" id="section1">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.1012603393497!2d14.699980439469465!3d49.38479340752345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470cbd15a0942d5d%3A0x2e038264f59e0943!2zS2UgSHbEm3pkw6FybsSbIDEwNTksIDM5MSAwMiBTZXppbW92byDDmnN0w60!5e0!3m2!1sen!2scz!4v1478513109683" width="100%" height="35%" frameborder="0" style="border:0"  allowfullscreen></iframe>
		
		<div>
			<div style="width:50%;height:65vh;float:left; display:table;">

				<div style="width:100%;height:100%; display:table-cell;vertical-align: middle">
					
					<p style="font-size:3em;"><b>TEL: 123 456 789</b></p>
					
					<p>
					<span style="font-size:2.5em;"><b>Autoškola Trešl</b></span><br><br>
					<span style="font-size:2em;">Ke Hvězdárně 1059<br>39102 Sezimovo Ústí <br>IČO: 721848261</span>
					</p>
			
				</div>
			</div>

			<div style="width:50%;height:65vh;float:left; display: table;">
				<div style="width:100%;height:100%; display:table-cell;vertical-align: middle">
				<form action="form.php" method="post" autocomplete="on">
				<input type="hidden" name="sub_actions" value="confirm">
				<!-- name -->
                  <label style="font-size:1.2em;" for="name"></label>
                  <input style="width:70%;padding:5px 5px; font-size:1.2em;" id="name" name="name" type="text" value="" placeholder="Jiméno" required/><br><br>
				<!-- email -->
                  <label style="font-size:1.2em;" for="email"></label>
                  <input style="width:70%;padding:5px 5px; font-size:1.2em;" id="email" name="email" type="text" value="" placeholder="Email" required/><br><br>
                  				<!-- telefon -->
                  <label style="font-size:1.2em;" for="tel"></label>
                  <input style="width:70%;padding:5px 5px; font-size:1.2em;" id="tel" name="tel" type="text" value="" placeholder="Telefon" required/><br><br>
                  <!-- dotaz -->
                  <label style="font-size:1.2em;" for="dotaz"></label>
                  <textarea style="width:72.5%; height:80px; box-sizing: border-box; resize:none; font-size:1.5em;padding:5px 5px;" placeholder="Dotaz"></textarea><br><br>
                  <input style="width:72.5%; background-color: grey; font-size:1.2em;border:none; color:white; padding:16px 32px; text-decoration: none; margin:4px 2px; cursor: pointer;" type="button" value="Poslat">

</form>
</div>
			</div>

		</div>
		
	</div>	
</div>

</body>
</html>