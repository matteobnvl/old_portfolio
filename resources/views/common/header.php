<section id="navigation" class="navigation">
            <div class="logo">
                <a href="<?= route('Accueil')?>"><p>
                    <span class="nom">bonneval </span>
                    <span class="prenom">Mattéo</span>
                </p></a>
                <nav>
                    <ul>
                        <li>
                            <a href="<?= route('Profil')?>" class="barre-a">Mon Profil</a>
                        </li>
                        <li>
                            <a href="<?= route('Work')?>" class="barre-a">Mes Projets</a>
                        </li>
                    </ul>
                    <div class="contact-mail">
                        <a  href="mailto:matteobonneval19@gmail.com">
                            <button>Me contacter par mail</button>
                        </a>
                    </div>
                    <div class="reseaux">
                        <a href="https://www.instagram.com/matteo_bnvl/"><i style="margin-right: 10px;" class="fab fa-instagram"></i>Instagram</a>
                        <a href="https://www.linkedin.com/in/matteo-bonneval-04080022a/"><i style="margin-right: 10px;" class="fab fa-linkedin"></i>Linkedin</a>
                        <a href=""><i style="margin-right: 10px;" class="fab fa-github"></i>Github</a>
                        <a href="">Malt</a>
                    </div>
                </nav>
            </div>
            <div class="responsive-reseau">
                    <li>
                        <a href="https://www.instagram.com/matteo_bnvl/" target="_blank ">
                            <img src="public/images/icons8-instagram-48.png" class="logo-medias" title="Instagram  ">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/matteo-bonneval-04080022a/" target="_blank ">
                            <img src="public/images/icons8-linkedin.gif" class="logo-medias" title="Linkedin  ">
                        </a>
                    </li>
                    <li>
                        <a href="https://gitlab.com/matteobnvl" target="_blank ">
                            <img src="public/images/icons8-gitlab-48.png" class="logo-medias" title="GitLab">
                        </a>
                    </li>
                    
            </div>
                <button id="burger" class="burger" onclick="changeClass()">
                    <span></span>
                </button>
        </section>
        <ul id="medias" class="medias">
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
                    <img src="public/images/icons8-gitlab-48.png" class="logo-medias" title="GitLab">
                </li>
                <a class="bulle-link" href="https://gitlab.com/matteobnvl" target="_blank ">GITLAB</a>
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