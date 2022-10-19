/*
 CHEVELLE
 */

 let soundOne = true;
 let Chevelle = document.getElementById("Audio-Chevelle");
 
 function ChangeImgOn(){
   document.querySelector(".Musi-Off").src="../../images/sinSonido.png";
 }
 
 Chevelle.addEventListener('ended', ChangeImgOn);
 
 function soundChevelle(){
   if(soundOne){
     document.querySelector(".Musi-Off").src="../../images/haySonido.png";
     Chevelle.src="../../sonidosCarros/ChevelleSS502.mp3";
     Chevelle.volume = 0.3;
     Chevelle.play();
   }
   
 }