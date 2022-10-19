/*
  LAMBORGHINI
  */
 
  let soundFour = true;
  let Lamborghini = document.getElementById("Audio-Lamborghini");
    
  function ChangeImgOn(){
    document.querySelector(".Musi-Off").src="../../images/sinSonido.png";
  }
     
  Lamborghini.addEventListener('ended', ChangeImgOn);
     
  function soundLamborghini(){
    if(soundFour){
      document.querySelector(".Musi-Off").src="../../images/haySonido.png";
      Lamborghini.src="../../sonidosCarros/LAMBORGHINI AVENTADOR.mp3";
      Lamborghini.volume = 0.3;
      Lamborghini.play();  
    }  
  }