<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="utf-8">
  <title>Επαφή</title>
  <link rel="stylesheet" href="styles.css">
  <style>
	tr{
		border:0px;
	}
	table{
		width:40%;
		height:400px;
		margin:auto;
	}
	#reservation{
		margin-top:30px;
		height:600px;
	}
	#reservation p{
		text-align:center;
		font-size:28px;
	}
	td a{
	 text-decoration:none
	}
	td a:link{
		color:black;
	}
	td a:visited {
		color: black;
		}
	.time p{
		border:2px solid black;
		width:6%;
		float:left;
		margin:5px;
		background-color:#E4E4E4;
		border-radius: 25px;
		box-shadow: 5px 5px #888888;
		
	}
	.time{
		text-align:center;
		padding-left:30px;
		margin-top:30px;
		width:100%;
	}
  </style>
</head>
<body>
	<header>
		<div class="header-container">
			<nav>
				<ul>
					
					<li><a href="menu.html"><img src="images/menu.png" alt="about" height="90"></a></li>
					<li><a href="contact.php"><img src="images/about.png" alt="menu" height="90"></a></li>
					<li><a href="gallery.html"><img src="images/gallery.png" alt="menu" height="90"></a></li>
				</ul>
				
			</nav>
			<div class="title">
				<h1>OASI'S ASIAN BISTRO</h1>
				<div>
				  <a href="tel:00306981321348" target="_blank"><img style="width:30px; position:relative;  top:7px;" src="images/thl.png" alt="tel"><span>  +30 6981321348</span></a>
				</div>
				<h3>*Κάνουμε και Ντελίβερι</h3>
			</div>
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="logo-oasi" height="150"></a>
			</div>
			
		</div>	
	</header>
	
	<main>
		<?php
			function error($field){
				if(isset($_POST[$field])){
					if (strlen($_POST[$field]) == 0){
						echo "Το πεδίο `". $field . "` είναι απαραίτητο<br><br>";
					}
					else{
						echo $_POST[$field]."<br><br>";
					}
				} 
			}
		?>
		<div class="contact-container">
			<div class="div1">	
				<h1>Επικοικωνήστε μαζί μας</h1>
			</div>
			<p>Συμπληρώστε την φόρμα και θα επικοινωνήσουμε σύντομα μαζί σας</p>
			<div class="div2">
				<form action="" method="POST">
					      <label for="name">Όνομα:</label><br>
						  <input type="text" id="name" name="name" placeholder="Το όνομά σας" ><br><br>
						  <?php error('name') ?>
						  <label for="email">Email:</label><br>
						  <input type="email" id="email" name="email" placeholder="Το email σας" ><br><br>
						  <?php error('email') ?>
						  <label for="phone">Τηλέφωνο:</label><br>
						  <input type="tel" id="phone" name="phone" placeholder="Το τηλέφωνό σας" ><br><br>
						  <?php error('phone') ?>
						  <label for="subject">Θέμα:</label><br>
						  <input type="text" id="subject" name="subject" ><br><br>
						  <label for="message">Μήνυμα:</label><br>
						  <textarea id="message" name="message" cols="20" rows="5"></textarea><br><br>
						  <input type="submit" value="Submit">
				</form>
			</div>
			<p style="font-size:18px;">Για να δείτε το μενού μας πατήστε <a href="menu.html"><b>εδώ</b></a></p>
			<div class="div3">
				<h1>Λίγα λόγια για εμάς</h1>
				<p>
					Το εστιατόριο μας άνοιξε τον Σεπτέμβριο του 2022 και λειτουργεί καθημερινά στην περιοχή της Θεσσαλονίκης
					με την ίδια όρεξη και ζήλο για να προσφέρει στους πελάτες του μία μοναδική εμπειρία ποιότητας και γεύσης.
					Δίνοντας βάση από την πρώτη μέρα στην άριστη ποιότητα της πρώτης ύλης και την συνεργασία με εξειδικευμένο
					και καταξιωμένο στο είδος  του προσωπικό, έχουμε καταφέρει να κερδίσουμε την εμπιστοσύνη των πελατών μας.
					Θα συνεχίσουμε να ανταποδίδουμε την εμπιστοσύμη σας ανανεώνοντας τακτικά το Μενού μας, το οποίο ειναι βασισμένο στην 
					ασιάτικη κουλτούρα.
				</p>
			</div>
		</div>
		<div id="reservation">
			<p>Κάντε κράτηση για την καλύτερη εξυπηρέτησή σας</p>
			<table border="5" cellspacing="0" cellpadding="4" style="text-align:center; ">
				<tr>
					<td colspan="7" style="color:white; font-size:28px;">Μάϊος</td>
				</tr>
				<tr style="background-color:#D5D5D5">
					<td>ΔΕ</td>
					<td>ΤΡ</td>
					<td>ΤΕ</td>
					<td>ΠΕ</td>
					<td>ΠΑ</td>
					<td>ΣΑ</td>
					<td>ΚΥ</td>
				</tr>
				<tr style="border:0px; background-color:#E4E4E4">
					<td><a href="#">1</a></td>
					<td><a href="#">2</a></td>
					<td><a href="#">3</a></td>
					<td><a href="#">4</a></td>
					<td><a href="#">5</a></td>
					<td><a href="#">6</a></td>
					<td><a href="#">7</a></td>
				</tr>
				<tr style="background-color:#E4E4E4">
					<td><a href="#">8</a></td>
					<td><a href="#">9</a></td>
					<td><a href="#">10</a></td>
					<td><a href="#">11</a></td>
					<td><a href="#">12</a></td>
					<td><a href="#">13</a></td>
					<td><a href="#">14</a></td>
				</tr>
				<tr style="background-color:#E4E4E4">
					<td><a href="#">15</a></td>
					<td><a href="#">16</a></td>
					<td><a href="#">17</a></td>
					<td><a href="#">18</a></td>
					<td><a href="#">19</a></td>
					<td><a href="#">20</a></td>
					<td><a href="#">21</a></td>
				</tr>
				<tr style="background-color:#E4E4E4">
					<td><a href="#">22</a></td>
					<td><a href="#">23</a></td>
					<td><a href="#">24</a></td>
					<td><a href="#">25</a></td>
					<td><a href="#">26</a></td>
					<td><a href="#">27</a></td>
					<td><a href="#">28</a></td>
				</tr>
				<tr style="background-color:#E4E4E4">
					<td><a href="#">29</a></td>
					<td><a href="#">30</a></td>
					<td><a href="#">31</a></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			<div class="time">
				<p>11:00</p>
				<p>12:00</p>
				<p>13:00</p>
				<p>14:00</p>
				<p>15:00</p>
				<p>16:00</p>
				<p>17:00</p>
				<p>18:00</p>
				<p>19:00</p>
				<p>20:00</p>
				<p>21:00</p>
				<p>22:00</p>
				<p>23:00</p>
			</div>
			<br><br><br><br>
			<div  style="text-align:center;">
				<button style=" border-radius: 25px; box-shadow: 5px 5px #888888; font-size:20px;">Υποβολή</button>
			</div>
		</div>
	</main>
	
	<footer>
		<div class="footer-container">
			
			<div class="feedback">
				<h2>Σχόλια πελατών:</h2>
				<p>
					"Το καλύτερο κινέζικο εστιατόριο <br>που έχω πάει! Και αυτό λέει <br>πολλά, αφού έχω πάει σε πολλά!"</p>
				<p>"Καταπληκτικό φαγητό! Εξαιρετική <br>εξυπηρέτηση! Δεν θα μπορούσα να <br>ζητήσω περισσότερα! Θα έρχομαι συνέχεια!"</p>
			</div>
		
				
			
			<div class="address">
				<h2>Διεύθυνση:</h2>
				<p>Θεσσαλονίκη</p>
				<p>Καλαμαριά, 54646</p>
				<p style="font-size:15px;">*Κάνουμε ντελίβερι εώς 9-10 χιλιόμετρα <br> με ελάχιστη χρέωση παραγγελίας 7&euro;</p>
				
			</div>
			<div class="hours">
				<h2>Ώρες:</h2>
				<p>Δευτέρα - Παρασκευή: 11:00 - 23:00</p>
				<p>Σάββατο - Κυριακή: 11:00 - 02:00</p>
				
			</div>
		</div>
		
	</footer>
	<div class="social-media"><a href="https://instagram.com/stefkaramixos?igshid=YmMyMTA2M2Y=" target="_blank"><img src="images/insta.png" alt="insta" height="35"></a><a href="https://www.facebook.com/stefanos.karamixos" target="_blank"><img src="images/fb.png" alt="fb" height="35"></a></div>
	<div class="copyright">&copy; Copyright OASI's China Bistro 2023</div>
</body>
</html>