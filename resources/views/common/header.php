<section id="navigation" class="navigation">
            <div class="logo">
                <a href="<?= route('Accueil')?>"><p>
                    <span class="nom">bonneval </span>
                    <span class="prenom">Mattéo</span>
                </p></a>
                <nav>
                    <ul>
                        <li>
                            <a class="barre-a <?php if($pages =='Home'):?>a-active<?php endif ?>" href="<?= route('Accueil') ?>">Accueil</a>
                        </li>
                        <li>
                            <a href="<?= route('Profil')?>" class="barre-a <?php if($pages =='MonProfil'):?>a-active<?php endif ?>">Mon Profil</a>
                        </li>
                        <li>
                            <a href="<?= route('Work')?>" class="barre-a <?php if($pages =='Work'):?>a-active<?php endif ?>">Mes Projets</a>
                        </li>
                    </ul>
                    <div class="contact-mail">
                        <a  href="mailto:matteobonneval19@gmail.com">
                            <button>Me contacter par mail</button>
                        </a>
                    </div>
                    <div class="reseaux">
                        <div><a href="https://www.instagram.com/matteo_bnvl/"><i style="margin-right: 10px;" class="fab fa-instagram"></i>Instagram</a></div>
                        <div><a href="https://www.linkedin.com/in/matteo-bonneval-04080022a/"><i style="margin-right: 10px;" class="fab fa-linkedin"></i>Linkedin</a></div>
                        <div><a href=""><i style="margin-right: 10px;" class="fab fa-github"></i>Github</a></div>
                        <div><a href="">Malt</a></div>
                    </div>
                </nav>
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
                    <img src="public/images/icons8-github.svg" class="logo-medias" title="GitLab">
                </li>
                <a class="bulle-link" href="https://github.com/matteobnvl" target="_blank ">GITHUB</a>
            </div>
        </ul>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
