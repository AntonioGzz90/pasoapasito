/*
  ENZO FERRARI
  */
 
  let soundTree = true;
  let Enzo = document.getElementById("Audio-Enzo");
   
  function ChangeImgOn(){
    document.querySelector(".Musi-Off").src="../../images/sinSonido.png";
  }
    
  Enzo.addEventListener('ended', ChangeImgOn);
    
  function soundEnzo(){
    if(soundTree){
      document.querySelector(".Musi-Off").src="../../images/haySonido.png";
      Enzo.src="../../sonidosCarros/Enzo.mp3";
      Enzo.volume = 0.3;
      Enzo.play();  
    }  
  }