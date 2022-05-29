<section id="navigation" class="navigation">
            <div class="logo">
                <a href="<?= route('Accueil')?>"><p>
                    <span class="nom">bonneval </span>
                    <span class="prenom">Mattéo</span>
                </p></a>
                <nav>
                    <ul>
                        <li>
                            <a href="<?= route('Profil')?>" class="a">Mon Profil</a>
                            <div class="barre-a"></div>
                        </li>
                        <li>
                            <a href="<?= route('Work')?>" class="a">Mes Projets</a>
                            <div class="barre-a"></div>
                        </li>
                        <li>
                            <a href="<?= route('Contact') ?>" class="a">Me Contacter</a>
                            <div class="barre-a-long"></div>
                        </li>
                    </ul>
                </nav>
            </div>
                <button id="burger" class="burger" onclick="changeClass()">
                    <span></span>
                </button>
        </section>
        <ul class="medias">
            <div class="bulle-slide">
                <li class="bulle">
                    <img src="public/images/icons8-instagram-48.png" class="logo-medias" title="Instagram  ">
                </li>
                <a class="bulle-link" href="https://www.instagram.com/matteo_bnvl/" target="_blank ">INSTAGRAM</a>
            </div>

            <div class="bulle-slide">
                <li class="bulle">
                    <img src="public/images/icons8-linkedin.gif" class="logo-medias" title="Linkedin  ">
                </li>
                <a class="bulle-link" href="https://www.linkedin.com/in/matteo-bonneval-04080022a/" target="_blank ">LINKEDIN</a>
            </div>

            <div class="bulle-slide">
                <li class="bulle">
                    <img src="public/images/icons8-github.svg" class="logo-medias" title="Github">
                </li>
                <a class="bulle-link" href="https://github.com/matteobnvl" target="_blank ">GITHUB</a>
            </div>
        </ul>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script type="text/javascript">
              function changeClass(){
        if (document.getElementById('burger').className == "burger"){
            document.getElementById('burger').className = "burger-click";
            document.getElementById('navigation').className = "navigation-click";
        }else{
            document.getElementById('burger').className = "burger";
            document.getElementById('navigation').className = "navigation";
        }
    }


    const medias = document.querySelectorAll('.bulle');
    window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL.staggerFrom(medias, 1, {right: -200, ease: "power2.out"}, 0.3, '-=1');

    
    

    TL.play();
})
        </script>