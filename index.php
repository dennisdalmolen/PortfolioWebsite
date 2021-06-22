<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio van Dennis Dalmolen</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
	
	    <style>
            <?php
                    $connection = mysqli_connect("localhost","root","","portfoliosql");
					$select = "SELECT * from vaardigheden";
					$result = mysqli_query($connection,$select);
					while ($row = mysqli_fetch_array($result)){

                        $vaardigheid_naam     = $row['vaardigheid_naam'];
                        $vaardigheid_waarde   = $row['vaardigheid_waarde'];

            ?>

                    .skills-content .right .<?php echo $vaardigheid_naam?>::before{
                    width: <?php echo $vaardigheid_waarde?>;
                    }
                    <?php
                    }
                    ?>

    </style>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">Over mij</a></li>
                <li><a href="#services" class="menu-btn">Projecten</a></li>
                <li><a href="#skills" class="menu-btn">Vaardigheden</a></li>
                <li><a href="#teams" class="menu-btn">Opleidingen en Werkervaring</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Home -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hallo, mijn naam is</div>
                <div class="text-2">Dennis Dalmolen</div>
                <div class="text-3">En ik ben een <span class="typing"></span></div>
                <a href="#contact">Huur mij</a>
            </div>
        </div>
    </section>

    <!-- Over Mij -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Over Mij</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/ik.png" alt="">
                </div>
				<?php	
					$connection = mysqli_connect("localhost","root","","portfoliosql");
					$select = "SELECT * from overmij";
					$result = mysqli_query($connection,$select);
					while ($row = mysqli_fetch_array($result)){
							
						$naam 			= $row['naam'];	
						$beschrijving 	= $row['beschrijving'];
            ?>		
					<div class="column right">
                    <div class="text"><?php echo $naam;?><span class="typing-2"></span></div>
                    <p><?php echo $beschrijving;?><br>
                    <a href="/bestanden/cv.docx" download>Download CV</a>
					</div>
			<?php
			}
			?>
            </div>
        </div>
    </section>

    <!-- Mijn Projecten -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Projecten</h2>
            <div class="serv-content">
			
			<?php	
					$connection = mysqli_connect("localhost","root","","portfoliosql");
					$select = "SELECT * from projecten";
					$result = mysqli_query($connection,$select);
					while ($row = mysqli_fetch_array($result)){
							
						$project_naam 			= $row['project_naam'];	
						$project_omschrijving 	= $row['project_omschrijving'];
            ?>		
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text"><?php echo $project_naam;?></div>
                        <p><?php echo $project_omschrijving;?></p>
                    </div>
                </div>
			<?php
			}
			?>
            </div>
        </div>
    </section>

    <!-- Vaardigheden -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Vaardigheden</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Wat beheers ik?</div>
                    <p>Ik heb hiernaast een overzicht met welke vaardigheden en hoe goed ik die vaardigheden beheers. Voor dat ik begonnen was met de opleiding Software Developer heb ik op de Havo informatica gehad. Hier hebben wij ons heel veel gericht op HTML en CSS, daarom heb ik hier meer ervaring mee dan met C#, PHP en MySQL.</p>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Lees meer</a>
                </div>
                <div class="column right">
				
				<?php
                    $connection = mysqli_connect("localhost","root","","portfoliosql");
					$select = "SELECT * from vaardigheden ORDER BY vaardigheid_waarde DESC";
					$result = mysqli_query($connection,$select);
					while ($row = mysqli_fetch_array($result)){

                        $vaardigheid_naam     = $row['vaardigheid_naam'];
                        $vaardigheid_waarde   = $row['vaardigheid_waarde'];

				?>
                    <div class="bars">
                        <div class="info">
                            <span><?php echo strtoupper($vaardigheid_naam)?></span>
                            <span><?php echo $vaardigheid_waarde?></span>
                        </div>
                        <div class="line <?php echo $vaardigheid_naam ?>"></div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Opleidingen en werkervaring. -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Opleidingen en werkervaring.</h2>
            <div class="carousel owl-carousel">
			
			<?php	
					$connection = mysqli_connect("localhost","root","","portfoliosql");
					$select = "SELECT * from opleidingenwerkervaring";
					$result = mysqli_query($connection,$select);
					while ($row = mysqli_fetch_array($result)){
							
						$ow_img 			= $row['ow_img'];	
						$ow_naam 			= $row['ow_naam'];
                        $ow_wat 			= $row['ow_wat'];
                        $ow_datum 			= $row['ow_datum'];
                        $ow_beschrijving 	= $row['ow_beschrijving'];
						$ow_locatie 		= $row['ow_locatie'];
                    
            ?>			
                <div class="card">
                    <div class="box">
                        <!-- <//?php echo $ow_img;?> -->
						<img src="images/vomar.jpg" alt="">
                        <div class="text"><?php echo $ow_naam;?></div>
                        <p><?php echo $ow_wat;?><br><?php echo $ow_datum;?><br><?php echo $ow_beschrijving;?><br><?php echo $ow_locatie;?></p>
						<img src="images/nova.jpeg" alt="">
                    </div>
                </div>
			<?php
			}
			?>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Neem contact op</div>
                    <p>Heb je eventuele vragen of wil je contact opzoeken? Verstuur een bericht hiernaast.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Naam</div>
                                <div class="sub-title">Dennis Dalmolen</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adres</div>
                                <div class="sub-title">Castricum, Nederland</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">dennisssdalmolennn@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Verstuur een bericht</div>
                    <form action="#" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="naam" placeholder="Naam" required>
                            </div>
                            <div class="field datum">
                                <input type="text" name="datum"  placeholder="Datum D-M-Y" required>
                            </div>
						</div>
						<div class="fields">
							<div class="field telefoonnummer">
                                <input type="digits" name="telefoonnummer" placeholder="Telefoonnummer" required>
                            </div>
							<div class="field bedrijfsnaam">
                                <input type="text" name="bedrijfsnaam" placeholder="Bedrijfsnaam">
                            </div>
						</div>
						<div class="fields">
							<div class="field postcode">
                                <input type="text" name="postcode" placeholder="Postcode" required>
                            </div>
							<div class="field plaats">
                                <input type="text" name="plaats" placeholder="Plaats" required>
                            </div>
						</div>
							<div class="field email">
                            <input type="email" name="email" placeholder="Email" required>
							</div>
                        <div class="field">
                            <input type="text" name="onderwerp" placeholder="Onderwerp" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="bericht" placeholder="Bericht.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="verstuur">Verstuur Bericht</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	
	<?php

	$naam = "";
	$datum = date("d-m-Y");
    $telefoonnummer = "";
    $bedrijfsnaam = "";
    $postcode = "";
	$plaats = "";
	$email = "";
	$onderwerp = "";
	$bericht = "";
    $masker = "/^([0-9]{4}[ ]+[A-Z]{2})$/";

	$invoerfouten = array();

 	if (isset($_POST['verstuur']))
	{
		$naam		        = $_POST['naam'];
		$datum 			    = $_POST['datum'];
        $telefoonnummer     = $_POST['telefoonnummer'];
        $bedrijfsnaam       = $_POST['bedrijfsnaam'];
        $postcode  			= $_POST['postcode'];
		$plaats	   			= $_POST['plaats'];
		$email 	  		    = $_POST['email']; 
		$onderwerp 		    = $_POST['onderwerp'];
		$bericht 	        = $_POST['bericht']; 
        
	    if (empty($naam))
        {
		    array_push($invoerfouten,"Een naam is verplicht");
	    }
        if (empty($email))
        {
		    array_push($invoerfouten,"Een email adres is verplicht");
	    }
        if (empty($onderwerp))
        {
		    array_push($invoerfouten,"Een onderwerp is verplicht");
	    }
        if (empty($bericht))
        {
		    array_push($invoerfouten,"Een bericht is verplicht");
	    }
        
	    if (!ctype_alpha($naam))
        {
		    array_push($invoerfouten,"Een voor en achternaam kunnen geen cijfers bevatten.");
	    }       
        if (!ctype_alpha($plaats))
        {
		    array_push($invoerfouten,"Een plaats mag geen cijfers bevatten.");
	    }                   
	    if (!is_numeric($telefoonnummer))
        {
            array_push($invoerfouten, "Telefoonnummer is niet nummeriek.");
        }

        if (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            array_push($invoerfouten, "Email is niet geldig.");
        }

		if (count($invoerfouten) == 0) 
		{
            $conn = new mysqli("localhost", "root", "", "portfoliosql");
            if ($conn->connect_error) 
			{
            die("Connection failed: " . $conn->connect_error);
			}

            $sql = "insert into contact (naam, datum, telefoonnummer, bedrijfsnaam, postcode, plaats, email, onderwerp, bericht)
            values('$naam', '$datum', '$telefoonnummer','$bedrijfsnaam', '$postcode', '$plaats', '$email', '$onderwerp', '$bericht')";

            mysqli_query($conn, $sql);

            var_dump ($sql);

        } else
		{
            foreach ($invoerfouten as $invoerfout)
			{
                echo "<div style=color:red>" . $invoerfout . "</div>";
            }
        } 
     }
	?>

    <!-- Footer -->
    <footer>
        <span>Gemaakt door <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Dennis Dalmolen</a> | <span class="far fa-copyright"></span> 2020 Alle rechten voorbehouden.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>
