<section class="accueil">

        <section id="bienvenue" class="contain-bienvenue">
            <a id="titre" href="<?=route('Secret')?>"><h1>
                <span>B</span>
                <span>I</span>
                <span>E</span>
                <span>N</span>
                <span>V</span>
                <span>E</span>
                <span>N</span>
                <span>U</span>
                <span>E</span>
            </h1></a>
            <div id="ligne" class="ligne"></div>
        
        </section>

        <div id="btn" class="scroller">
            <div class="explorer">
                <p>explorer</p>
                <img src="public/images/keyboard_arrow_down_white_24dp.svg">
            </div>
            <div class="barre">
                <span></span>
            </div>
        </div>
        
    </section>

    <section id="explorer" class="page1">
        <div class="contain-page1">
            <h2>mes services</h2>
                <div class="contain-service-left">
                    <div class="service-rond">
                        <span class="material-symbols-outlined icon">
                            computer
                        </span>
                    </div>
                    <div class="service-text">
                        <h3>Création de projet</h3>
                        <p>Site vitrine, corporate, évènementiel, application mobile.</p>
                    </div>
                </div>

                <div class="contain-service-left">
                    <div class="service-rond">
                        <span class="material-symbols-outlined icon">
                            devices
                        </span>
                    </div>
                    <div class="service-text">
                        <h3>Développements spécifiques</h3>
                        <p>Des outils adaptés à votre coeur de métier, applications & solutions personnalisées.</p>
                    </div>
                </div>
                <div class="contain-service-left">
                    <div class="service-rond">
                        <span class="material-symbols-outlined icon">
                            display_settings
                        </span>
                    </div>
                    <div class="service-text">
                        <h3>Responsive design</h3>
                        <p>Compatible tous supports, tablette & application mobile.</p>
                    </div>
                </div>         
        </div>    
    </section>

    <section class="transition">
        <h2>développement web responsive</h2>
        <p>Compatible mobile, tablettes & PC</p>
        
    </section>
    <section class="contain-computer">
        <div class="contain-computer-image">
                <img src="https://www.mathieu-crevoulin.com/img/row_1.png">
        </div>
    </section>

    <section class="page2">
        <div class="contain-page1">
            
                <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</span> Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>
            
        </div>

        
    </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script type="text/javascript">
let bienvenue = document.getElementById('titre');
let btn = document.getElementById('btn');

window.addEventListener('scroll',function(){
    let value = window.scrollY;
    bienvenue.style.marginRight = value  * 4 + 'px';
    bienvenue.style.marginTop = value  * 1.5 + 'px';
    ligne.style.marginLeft = value  * 4 + 'px';
    ligne.style.marginTop = value  * 1.5 + 'px';
    btn.style.marginTop = value * 1.5 + 'px';
})

const allLetters = document.querySelectorAll('.contain-bienvenue span');
const ligne = document.querySelector('.ligne');

const TLLetters = gsap.timeline();

TLLetters
.from(ligne, {width: '0%', opacity: 0, duration: 0.7, ease: "power1.in"})
.from(allLetters, {opacity:0, stagger: 0.1, ease: "power2.out"})



const images = document.querySelectorAll(".contain-computer-image img")
const texts = document.querySelectorAll(".contain-page1 h2")

let options = {
  // root: null,
  rootMargin: "-10% 0px",
  threshold: 0.4
}

function handleIntersect(entries){
  console.log(entries);

  entries.forEach(entry => {
    if(entry.isIntersecting){
      entry.target.style.opacity = 1;
      entry.target.className = "transparent scale-up-bottom";
    }
  })
}

function textIntersect(entries){
    console.log(entries);

    entries.forEach(entry =>{
        if(entry.isIntersecting){
            entry.target.style.opacity = 1;
            entry.target.className = "tracking-in-contract-bck-bottom"
        }
    })
}

const observer = new IntersectionObserver(handleIntersect, options)
const observer2 = new IntersectionObserver(textIntersect,options)

images.forEach(image => {
  observer.observe(image)
})

texts.forEach(text =>{
    observer2.observe(text)
})


</script>