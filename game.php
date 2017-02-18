<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>game</title>

  <style>
  .titre {
    font-family: monospace;
    font-size: 70px;
    margin-left: 150px;
    margin-right: 150px;
    text-align: center;
    color: red;
  }
  body {
    background-color: darkgreen;
  }

  .pad{
    width : 125px ;
    height: 100px ;
    display: inline-block;
    margin: auto;
    padding: 0;
    top: 0;
    left: 0;
    bottom: 20;
    font-family: monospace;
    background-color: red;
    border: 12px;
  }
  .allpad{
    width : 605px;
    height: 500px;
    text-align: center;
    margin: auto;

  }

  </style>
</head>
<body>
  <audio data-key ="82" src="asset/sounds/OOT_Notes_Ocarina_A_long.wav"></audio>
  <audio data-key ="84" src="asset/sounds/OOT_Notes_Ocarina_A_loop.wav"></audio>
  <audio data-key ="89" src="asset/sounds/OOT_Notes_Ocarina_A_med.wav"></audio>
  <audio data-key ="85" src="asset/sounds/OOT_Notes_Ocarina_A_short.wav"></audio>
  <audio data-key ="73" src="asset/sounds/OOT_Notes_Ocarina_B_long.wav"></audio>
  <audio data-key ="79" src="asset/sounds/OOT_Notes_Ocarina_B_loop.wav"></audio>
  <audio data-key ="80" src="asset/sounds/OOT_Notes_Ocarina_B_med.wav"></audio>
  <audio data-key ="70" src="asset/sounds/OOT_Notes_Ocarina_B_short.wav"></audio>
  <audio data-key ="71" src="asset/sounds/OOT_Notes_Ocarina_D_long.wav"></audio>
  <audio data-key ="72" src="asset/sounds/OOT_Notes_Ocarina_D_loop.wav"></audio>
  <audio data-key ="74" src="asset/sounds/OOT_Notes_Ocarina_D_med.wav"></audio>
  <audio data-key ="75" src="asset/sounds/OOT_Notes_Ocarina_D_short.wav"></audio>
  <audio data-key ="76" src="asset/sounds/OOT_Notes_Ocarina_D2_long.wav"></audio>
  <audio data-key ="77" src="asset/sounds/OOT_Notes_Ocarina_D2_loop.wav"></audio>
  <audio data-key ="87" src="asset/sounds/OOT_Notes_Ocarina_D2_med.wav"></audio>
  <audio data-key ="88" src="asset/sounds/OOT_Notes_Ocarina_D2_short.wav"></audio>
  <audio data-key ="67" src="asset/sounds/OOT_Notes_Ocarina_F_long.wav"></audio>
  <audio data-key ="220" src="asset/sounds/OOT_Notes_Ocarina_F_loop.wav"></audio>
  <audio data-key ="86" src="asset/sounds/OOT_Notes_Ocarina_F_med.wav"></audio>
  <div class="allbox">
  <audio data-key ="66" src="asset/sounds/OOT_Notes_Ocarina_F_short.wav"></audio>
  <audio data-key ="13" src="asset/sounds/OOT_Secret.wav"></audio>
    <h1 class="titre">-OCARINA BOX-</h1>
    <p class="titre"> WELCOME TO ZELDA MUSIC </p>
    <div class="allpad">
      <div data-key="82" class="pad">A long(R)</div>
      <div data-key="84" class="pad">A loop(T)</div>
      <div data-key="89" class="pad">A med(Y)</div>
      <div data-key="85" class="pad">A short(U)</div>
      <div data-key="73" class="pad">B long(I)</div>
      <div data-key="79" class="pad">B loop(O)</div>
      <div data-key="80" class="pad">B med(P)</div>
      <div data-key="70" class="pad">B short(F)</div>
      <div data-key="71" class="pad">D loog(G)</div>
      <div data-key="72" class="pad">D loop(H)</div>
      <div data-key="74" class="pad">D med(J)</div>
      <div data-key="75" class="pad">D short(K)</div>
      <div data-key="76" class="pad">D2 long(L)</div>
      <div data-key="77" class="pad">D2 loop(M)</div>
      <div data-key="87" class="pad">D2 med(W)</div>
      <div data-key="88" class="pad">D2 short(X)</div>
      <div data-key="67" class="pad">F long(C)</div>
      <div data-key="220" class="pad">F loop(><)</div>
      <div data-key="86" class="pad">F med(V)</div>
      <div data-key="66" class="pad">F short(B)</div>
      </div>
  </div>
  <div class="valid">
    <div data-key="13" class="pad">validation(enter)</div>
  </div>

  <script type="text/javascript">
  window.addEventListener("keydown",function(event){
    // console.log(event.keyCode)
    const audio = document.querySelector(`audio[data-key="${event.keyCode}"]`);
    if (!audio) return;
    console.log(audio)
    audio.play();
  });
  // canvas.addEventListener("keydown", handlekeydown, true);
  // function handlekeydown(e) {
  // console.log("debug");
  // console.log("keycode: "+e.keyCode);
  </script>

</body>
</html>
