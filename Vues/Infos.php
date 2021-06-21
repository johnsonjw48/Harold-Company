

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

      <div>
        
          <p>Publié le:</p> 
       
          <p>10 Mai 2021</p>
      </div>

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
</div>




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