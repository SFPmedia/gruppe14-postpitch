<!doctype html>
<html lang="da">
<head>
<!-- Google analytics -->


<!-- *** Metatags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Metatags END -->

    <title>Gastronomisk innovation</title>

<!-- *** Stylesheets -->
	<link href="stylesheets/css.css" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="script.js"></script>
<!-- Stylesheets END -->
</head>
	<body>

<div class="wrapper">

	<!-- *** Left side -->
	<div class="infobox">
		<div class="logo"><img src="billeder/logohvid.png" alt=""/></div>
		<div class="infocontent"></div>
	</div>


	<div class="rightwrapper">
		<!-- *** Navigation -->
		<div class="navigationwrapper">
			<div id="cssmenu">
				<ul>
					<li><a href="index.html">Forside</a></li>
					<li><a href="events.html">Events</a></li>
					<li><a href="team.html">Team</a></li>
					<li><a class="active" href="kontakt.php">Kontakt</a></li>
				</ul>
			</div>
		</div>
<!-- Navigation END -->

		<div class="contactwrapper">

			<div class="contactleft">
						<form method="post" action="sender.php">

<fieldset>

<p><label for="t1">Navn:</label><br>
<input id="t1" type="text" name="name"></p>

<p><label for="t2">Email:</label><br>
<input id="t2" type="email" name="email"></p>

<p><label for="t3">Telefon:</label><br>
<input id="t3" type="number" name="phone"></p>

<p><label for="t4">CVR-nr:</label><br>
<input id="t4" type="number" name="cvrnr"></p>

<p><label for="t5">Adresse:</label><br>
<input id="t5" type="text" name="address"></p>

<!-- næste input skjules med css for almindelige brugere, kun spambotter ser (og udfylder sandsynligvis) feltet -->

<p><span class="ikkese"><label for="t7">Subject:</label>
<input id="t7" type="text" name="subject"></span></p>

<textarea id="t8" name="besked" rows="10" cols="49"></textarea>

<p><label for="t9">Ønskes kopi?</label>
<input type="checkbox" id="t9" name="customer_copy" checked="checked"></p>

<label for="t10">&nbsp;</label><input id="t10" type="submit" name="submit" value="Send">
&nbsp; &nbsp; <input type="reset" value=" Slet alt ">
</fieldset>
</form></div>


		<div class="contactright">
					<iframe id="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2249.35922522143!2d12.571005316060553!3d55.682742104860566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652531ab10b0f63%3A0x7f8f1410ba6a0fac!2sGastronomisk+Innovation+P%2FS!5e0!3m2!1sda!2sdk!4v1513700174667" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		</div>


		</div>
	</div>


<footer>
	<div class="footerleft">
		<br><br>
<h3>Frederiksborggade 1B, 4th<br>
			1360 København K</h3>

		<p><a href="mailto:info@gastronomiskinnovation.dk">info@gastronomiskinnovation.dk</a><br>
			+45 3110 6953</p></div>

	<div class="footermiddle">
	<br><br>
	<img src="billeder/if_facebook_2308066.png" style="height: 50px" alt="Facebook"/>
    <img src="billeder/if_instagram_2308118.png" style="height: 50px" alt="Instagram"/></div>

	<div class="footerright">
	<h2>Tilmeld dig vores nyhedsmail</h2>
<p><input type="text" name="name" value="Navn"></p>
<p><input type="email" name="email" value="Email"></p>
  </div>
</footer>

	</body>
</html>
