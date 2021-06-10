<!-- Connexion à la database -->
   
   <?php 

    
  
  $servername = 'localhost';
  $ussername  = 'root';
  $password   = 'root';


  
        $conn= new PDO ("mysql:host=$servername; dbname=hc", $ussername, $password);


  
        
  $sql= "SELECT * FROM `bien`";


  $stmt = $conn->query($sql);

       
        
       //  echo "<pre>";
       // print_r($louer);
       // echo "</pre>";


?>


    <center>
	<h4 style="margin-top: 50px">Trouvez votre location grâce à Harold Company</h4>
	<br>
	<br>
	<p style="font-size: 20px; line-height: 40px; margin-left: 200px; margin-right: 200px">
		Appartement, maison, seul ou en famille, pour quelques jours ou pour plusieurs années :
        trouvez le logement qui vous ressemble parmi des centaines d'annonces immobiliéres.
	</p>
	</center>

	<section id="possibilities">
            <div class="Alouer">

                <?php while($louer = $stmt->fetch()) : ?>
                    <article style="background-image: url(Public/images/<?= $louer['Image'] ?>);
    background-position-y: -150px; margin-left: 150px; margin-bottom: 40px; ">
                    <div class="overlay">
                        <h4><?php echo $louer['Annonce'];  ?></h4>
                        <p><small><?php echo $louer['Description'] ;  ?></small></p>
                        <a href="" class="button-2">Plus d'info</a>
                    </div>
                </article>
                <?php endwhile; ?>

                
               
                <div class="clear"></div>
            </div>
        </section>
	

