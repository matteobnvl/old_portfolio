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

			<div class="school-project">
				<div  class="box-project" onclick="afficheBox('school-box1','box-arrow-1')">
					<img src="public/images/logo_rawevents.jpg" alt="">
					<div id="box-arrow-1" class="box-arrow"></div>
				</div>
				<div id="school-box1" class="box-project-details"></div>


				<div class="box-project" onclick="afficheBox('school-box2')"></div>
				<div id="scool-box2" class="box-project-details"></div>


				<div class="box-project" onclick="afficheBox('school-box3')"></div>
				<div id="school-box3" class="box-project-details"></div>


				<div class="box-project" onclick="afficheBox('school-box4')"></div>
				<div id="school-box4" class="box-project-details"></div>


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

	function afficheBox(numero,box){
		if(document.getElementById(numero).className == "box-project-details"){
			document.getElementById(numero).className = "box-project-details active-box";
			document.getElementById(box).className = "box-arrow-active";
		}else{
			document.getElementById(numero).className = "box-project-details";
			document.getElementById(box).className = "box-arrow";
		}
	}
</script>