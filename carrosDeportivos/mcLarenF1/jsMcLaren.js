/*
  MCLAREN
  */
 
  let soundFive = true;
  let MCLaren = document.getElementById("Audio-MCLaren");
     
  function ChangeImgOn(){
    document.querySelector(".Musi-Off").src="../../images/sinSonido.png";
  }
      
  MCLaren.addEventListener('ended', ChangeImgOn);
      
  function soundMCLaren(){
    if(soundFive){
      document.querySelector(".Musi-Off").src="../../images/haySonido.png";
      MCLaren.src="../../sonidosCarros/McLarenF1.mp3";
      MCLaren.volume = 0.3;
      MCLaren.play();  
    }  
  }