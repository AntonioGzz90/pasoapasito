/*
 CORVETTE
 */

 let soundTwo = true;
 let Corvette = document.getElementById("Audio-Corvette");
  
 function ChangeImgOn(){
   document.querySelector(".Musi-Off").src="../../images/sinSonido.png";
 }
   
 Corvette.addEventListener('ended', ChangeImgOn);
   
 function soundCorvette(){
   if(soundTwo){
     document.querySelector(".Musi-Off").src="../../images/haySonido.png";
     Corvette.src="../../sonidosCarros/Corvette Stingray.mp3";
     Corvette.volume = 0.3;
     Corvette.play();  
   }  
 }