<section class="contain-profil">
    <a href="<?= route('Work') ?>" class="barre-a retour"><i style="margin-right: 15px;" class="fas fa-arrow-left"></i>retour</a>
    <div class="box-title">
        <h2>
            <?php echo $data_projet['title']; ?> 
            <?php if($data_projet['github'] != ""): ?><a href="#" title="voir projet sur github" target="_blank "><i style="color: white;font-size:20px;" class="fa-brands fa-github"></i></a> <?php endif ?>
                <?php if($data_projet['url'] != ""): ?><a href="#" title="voir site" target="_blank "><i style="color: white;font-size:20px;" class="fas fa-link"></i></a> <?php endif ?>
        </h2>
    </div>
    <div class="contain-work">
        <p><?php echo $data_projet['description'] ?></p>
        <div class="container-langage">
            <?php 
                foreach($data_projet['langage'] as $data){
                ?>
                    <div class="box-langage">
                        <img src="public/images/<?= $data["image_langage"] ?>" alt="">
                        <p><?= $data["nom_langage"] ?></p>
                    </div>
                <?php
                }
                ?>
        </div>
        <div id="slideshow1" class="slideshow-container">
             <?php 
                foreach($data_projet['image'] as $data){
                ?>
                    <div class="mySlides fade">
						<img src="public/images/<?= $data["image"] ?>" style="width:100%">
					</div>
                <?php
                }
                ?>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
                <br>

				<div style="text-align:center">
                <?php 
                    foreach($data_projet['image'] as $key => $data){
                    ?>
                        <span class="dot" onclick="currentSlide(<?= $key ?>)"></span>
                    <?php
                    }
                    ?>
				</div>
        </div>
    </div>
</section>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>