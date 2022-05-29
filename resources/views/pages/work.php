<section class="contain-work">


	<div class="contain-block">
		<div class="block">
			<img  src="public\images\code_bg2.jpg">
			<div onclick="ClassSchool()" class="titre-block">
				<h1>à l'école</h1>
				<button>VOIR PLUS</button>
			</div>
		</div>
		<div class="block">
			<img style="width:200%;" src="public\images\code_bg1.jpg">
			<div onclick="ClassPerso()" class="titre-block">
				<h1>personnel</h1>
				<button >VOIR PLUS</button>
			</div>
		</div>
		<article id="school" class="contain-school">
			<div class="entete">
				<div class="close">
					<img onclick="ClassSchool()" src="public/images/close.svg">
				</div>
			</div>
			<div class="carousel-wrapper">
			    <span id="item-1"></span>
			    <span id="item-2"></span>
			    <span id="item-3"></span>
			    <div class="carousel-item item-1">
			      <div class="contain-carousel">
			        <h2>RawEvents</h2>
			        <div class="text">
			            <p>texte</p>
			            <div class="image"><img src="public/images/logo_rawevents.jpg" alt="logo RawEvents"></div>
			        </div>
			        <button onclick="ActiveClass()"> voir plus</button>
			        <div id="active" class="contain-core">
			            <button onclick="ActiveClass()">fermer</button>
			        </div>
			      </div>
			      <a class="arrow arrow-prev" href="#item-3"></a>
			      <a class="arrow arrow-next" href="#item-2"></a>
			    </div>
			    
			    <div class="carousel-item item-2">
			        <div class="contain-carousel" >
			        	<h2>Titre</h2>  
			            <div class="text">
			            	<p>texte</p>
			            	<div class="image">
			            		<img src="" alt="logo RawEvents">
			            	</div>
			        	</div>
			            <button onclick="ActiveClass2()">Voir plus</button>
			        </div>
			        <div id="active2" class="contain-core">
			            <button onclick="ActiveClass2()">fermer</button>
			        </div>
			      <a class="arrow arrow-prev" href="#item-1"></a>
			      <a class="arrow arrow-next" href="#item-3"></a>
			    </div>
			    
			    <div class="carousel-item item-3">
			        <div class="contain-carousel">  
			            <h2>Titre</h2>
			            <div class="text">
			            	<p>texte</p>
			            	<div class="image">
			            		<img src="" alt="logo RawEvents">
			            	</div>
			        	</div>
			            <button onclick="ActiveClass3()">Voir Plus</button>
			        </div>

			        <div id="active3" class="contain-core">
			            <button onclick="ActiveClass3()">fermer</button>
			        </div>
			        
			        <a class="arrow arrow-prev" href="#item-2"></a>
			      <a class="arrow arrow-next" href="#item-1"></a>
			    </div>
			  </div>
		</article>

		<article id="perso" class="contain-perso">
			<div class="entete">
				<div class="close">
					<img onclick="ClassPerso()" src="public/images/close.svg">
				</div>
	

			</div>
		</article>
	</div>

	
	
</section>
<script type="text/javascript">
	function ClassSchool(){
	if (document.getElementById('school').className == "contain-school"){
            document.getElementById('school').className = "contain-school activate";
        }else{
            document.getElementById('school').className = "contain-school";
        }
    }

    function ClassPerso(){
	if (document.getElementById('perso').className == "contain-perso"){
            document.getElementById('perso').className = "contain-perso activate";
        }else{
            document.getElementById('perso').className = "contain-perso";
        }
    }
    function ActiveClass(){
        if(document.getElementById('active').className == "contain-core"){
            document.getElementById('active').className = "contain-core contain-active";
        }else{
            document.getElementById('active').className = "contain-core";
        }
    }

    function ActiveClass2(){
        if(document.getElementById('active2').className == "contain-core"){
            document.getElementById('active2').className = "contain-core contain-active";
        }else{
            document.getElementById('active2').className = "contain-core";
        }
    }

    function ActiveClass3(){
        if(document.getElementById('active3').className == "contain-core"){
            document.getElementById('active3').className = "contain-core contain-active";
        }else{
            document.getElementById('active3').className = "contain-core";
        }
    }
</script>