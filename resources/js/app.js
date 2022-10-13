/* js header */

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


/* js home */
/* script paralax bienvenue */
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

/*script animation bienvenue + bulle */

const allLetters = document.querySelectorAll('.contain-bienvenue span');
const ligne = document.querySelector('.ligne');

const TLLetters = gsap.timeline();

TLLetters
.from(ligne, {width: '0%', opacity: 0, duration: 0.7, ease: "power1.in"})
.from(allLetters, {opacity:0, stagger: 0.1, ease: "power2.out"})

/* script animation image computer */



const images = document.querySelectorAll(".contain-computer-image img")


let options = {
  rootMargin: "-10% 0px",
  threshold: 0.4
}

function handleIntersect(entries){

  entries.forEach(entry => {
    if(entry.isIntersecting){
      entry.target.style.opacity = 1;
      entry.target.className = "transparent scale-up-bottom";
    }
  })
}

function textIntersect(entries){

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


const box = document.querySelectorAll(".box-service")
function BoxIntersect(entries){

    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.style.opacity = 1;
            entry.target.className = "box-service tracking-in-contract-bck-bottom"
        }
    })
}
const observer_box = new IntersectionObserver(BoxIntersect, options)

box.forEach(box => {
    observer_box.observe(box)
})

const boxAttr = document.querySelectorAll(".box-attr")
function BoxAttrIntersect(entries){

    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.style.opacity = 1;
            entry.target.className = "box-attr roll-in-blurred-left"
        }
    })
}
const observer_boxAttr = new IntersectionObserver(BoxAttrIntersect, options)

boxAttr.forEach(box => {
    observer_boxAttr.observe(box)
})





const boxPrst = document.querySelectorAll(".presentation-text-right")
function textPrstIntersect(entries){

    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.style.opacity = 1;
            entry.target.className = "presentation-text-right slide-in-right";
        }
    })
}
const observer_textPrst = new IntersectionObserver(textPrstIntersect, options)

boxPrst.forEach(box => {
    observer_textPrst.observe(box)
})


/* js Detail.php */

/* script carousel */

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



/* js profil */
