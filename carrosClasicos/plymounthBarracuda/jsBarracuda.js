/*
  MCLAREN
  */
 
  let soundFive = true;
  let Barracuda = document.getElementById("Audio-Barracuda");
     
  function ChangeImgOn(){
    document.querySelector(".Musi-Off").src="../../images/sinSonido.png";
  }
      
  Barracuda.addEventListener('ended', ChangeImgOn);
      
  function soundBarracuda(){
    if(soundFive){
      document.querySelector(".Musi-Off").src="../../images/haySonido.png";
      Barracuda.src="../../sonidosCarros/Barracuda.mp3";
      Barracuda.volume = 0.3;
      Barracuda.play();  
    }  
  }