
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

                <?php foreach($louer as $loue) : ?>
                    <article style="background-image: url(Public/images/<?= $loue->getImage() ?>);
    background-position-y: -150px; margin-left: 150px; margin-bottom: 40px; ">
                    <div class="overlay">
                        <h4><?php echo $loue->getAnnonce();  ?></h4>
                        <p><small><?php echo $loue->getDescription() ;  ?></small></p>
                        <a href="" class="button-2">Plus d'info</a>
                    </div>
                </article>
                
                <?php endforeach; ?>

                
               
                <div class="clear"></div>
            </div>
        </section>
	

