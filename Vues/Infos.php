

<div id="inf">
    

  <h1><?php print_r(  $infos['Annonce2'])?></h1>



  <div class="carousel">
    <button class="carousel__button previous" id="previous"><</button>
    <div class="carousel__images">
      <img class="active" src="Public/images/details/300x300/1.jpg" alt="">
      <img src="Public/images/details/300x300/2.jpeg" alt="">
      <img src="Public/images/details/300x300/3.jpg" alt="">

    </div>
    <button class="carousel__button next" id="next">></button>
  </div>


  <center>

    <div id="aperçu">
      <h4>Aperçu</h4>

      <section>
         <h6>Publié le:</h6> 
         <p>10 Mai 2021</p>
      </section>


      <section>
        <h6>Ville:</h6> 
        <p>Cotonou</p>
      </section>


      <section>
        <h6>Quartier:</h6> 
        <p>Ste Rita</p>
      </section>


      <section>
        <h6>Disponibilité:</h6> 
        <p>Immédiate</p>
      </section>


    </div>
    
  </center>


  <center>
    <div id="desc">
  
      <h4>Description</h4>

          <p>
        Découvrez en avant-première une nouvelle adresse confidentielle au cœur du 12ème arrondissement, à quelques pas de la place Félix Eboué.</p>

          <p>
        Nichée dans un quartier paisible et commerçant à l'esprit village, cette résidence contemporaine et raffinée dévoile une collection de 26 appartements aux prestations haut de gamme et espaces extérieurs, pour une qualité de vie privilégiée au coeur de Paris. 
        Inscrivez-vous pour en savoir plus.
          </p>

    </div>
  </center>



  <center>
    <div id="details">
      
      <h4>Détails</h4>

      <section>
        <h6>Prix:</h6>
        <p>700.000 FCFA /Mois</p>
      </section>

      <section>
        <h6>Nb pièce:</h6>
        <p>5</p>
      </section>

      <section>
        <h6>Nb chambres:</h6>
        <p>3</p>
      </section>

      <section>
        <h6>Nb douches:</h6>
        <p>5</p>
      </section>





    </div>
  </center>


  <center>
    
    <div id="interesse">

      <h4>Etes vous intéressé? Si oui c'est par ici!</h4>


      <div id="rappel">
        <h4>On vous appelle</h4>
        <form>
         <input type="text" name="nom" placeholder="Votre nom">
         <input type="text" name="prenom" placeholder="Votre Prenom">
         <input type="text" name="email" placeholder="Votre email">
         <input type="tel" name="telephone" placeholder="Votre telephone">
         <input type="submit" name="rappel" value="Rappel immediat">
        </form>
        
      </div>


      <div id="visit">
       <h4>Venez visiter !</h4>
        <form>
         <input type="text" name="nom" placeholder="Votre nom">
         <input type="date" name="jour" placeholder="Jour de visite">
         <input type="time" name="heure" placeholder="Heure de visite">
         <input type="tel" name="telephone" placeholder="Votre telephone">
         <input type="submit" name="rappel" value="Soumettre">
        </form>
      </div>
      
    </div>

  </center>


</div>


       <center>
            <h3 style="font-family: Arial;">Vous pourriez apprécier aussi</h3>
        </center>

        <section id="possibilities">
            <div class="wrapper">
                <article id="possibility-1">
                    <div class="overlay">
                        <h4>A louer a Cotonou</h4>
                        <p><small>Offrez le meilleur à ceux que vous aimez et partagez des moments fabuleux !</small></p>
                        <a href="" class="button-2">Plus d'info</a>
                    </div>
                </article>
                <article id="possibility-2">
                    <div class="overlay">
                        <h4>A louer a Calavi</h4>
                        <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</small></p>
                        <a href="" class="button-2">Plus d'info</a>
                    </div>
                </article>
                <div class="clear"></div>
            </div>
        </section>




<script type="text/javascript">
  

const carouselImages = document.querySelector('.carousel__images');
const images = document.querySelectorAll('.carousel__images img');
const carouselButtons = document.querySelectorAll('.carousel__button');
const numberOfImages = document.querySelectorAll('.carousel__images img').length;
let imageIndex = 1;
let translateX = 0;

carouselButtons.forEach(button => {
  button.addEventListener('click', (event) => {
    if (event.target.id === 'previous') {
      if (imageIndex !== 1) {
        imageIndex--;
        translateX += 250;
      }
    } else {
      if (imageIndex !== numberOfImages) {
        imageIndex++;
        translateX -= 250;
      }
    }

    carouselImages.style.transform = `translateX(${translateX}px)`;
    images.forEach((image, index) => {
      if (index === imageIndex - 1) {
        image.classList.add('active');
      } else {
        image.classList.remove('active');
      }
    });
  });
});


</script>