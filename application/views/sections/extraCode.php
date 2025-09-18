//// here secure terminal login common ui
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Secure Terminal</title>
<style>
  html, body {
    margin:0; padding:0;
    height:100%; width:100%;
    background:black;
    font-family:'Courier New', monospace;
    overflow:hidden;
    display:flex; justify-content:center; align-items:center;
  }
  #radarCanvas, #networkCanvas {
    position:fixed; top:0; left:0;
    width:100%; height:100%;
    z-index:0;
  }
  .terminal-wrapper {
    position:relative;
    z-index:2;
    width:90%;
    max-width:600px;
    display:flex; flex-direction:column;
  }
  #commandInput {
    display:none;
    background:transparent;
    border:none;
    color:#00ff91;
    font-size:16px;
    outline:none;
    width:100%;
  }
</style>
</head>
<body>
<canvas id="radarCanvas"></canvas>
<canvas id="networkCanvas"></canvas>
<div class="terminal-wrapper">
  <input id="commandInput" type="text" autocomplete="off"/>
</div>

<script>
/* ===== Radar Background ===== */
const radarCanvas=document.getElementById('radarCanvas');
const rCtx=radarCanvas.getContext('2d');
radarCanvas.width=window.innerWidth;
radarCanvas.height=window.innerHeight;
let radarAngle=0;
function drawRadar(){
  rCtx.clearRect(0,0,radarCanvas.width,radarCanvas.height);
  const cx=radarCanvas.width/2, cy=radarCanvas.height/2;
  rCtx.beginPath();
  rCtx.arc(cx, cy, 200,0,2*Math.PI);
  rCtx.strokeStyle='rgba(0,255,145,0.1)'; rCtx.stroke();
  rCtx.beginPath();
  rCtx.moveTo(cx,cy);
  rCtx.lineTo(cx+200*Math.cos(radarAngle), cy+200*Math.sin(radarAngle));
  rCtx.strokeStyle='rgba(0,255,145,0.6)'; rCtx.stroke();
  radarAngle+=0.02;
}
setInterval(drawRadar,40);

/* ===== Network + Red Dots ===== */
const netCanvas=document.getElementById('networkCanvas');
const nCtx=netCanvas.getContext('2d');
netCanvas.width=window.innerWidth;
netCanvas.height=window.innerHeight;
let dots=[];
for(let i=0;i<100;i++){
  dots.push({x:Math.random()*netCanvas.width, y:Math.random()*netCanvas.height, dx:(Math.random()-0.5)*0.4, dy:(Math.random()-0.5)*0.4, color:Math.random()<0.8?'#00ff91':'#ff0000'});
}
function drawDots(){
  nCtx.clearRect(0,0,netCanvas.width,netCanvas.height);
  for(let d of dots){
    nCtx.beginPath(); nCtx.arc(d.x,d.y,2,0,Math.PI*2);
    nCtx.fillStyle=d.color; nCtx.fill();
    d.x+=d.dx; d.y+=d.dy;
    if(d.x<0||d.x>netCanvas.width)d.dx*=-1;
    if(d.y<0||d.y>netCanvas.height)d.dy*=-1;
  }
  for(let i=0;i<dots.length;i++){
    for(let j=i+1;j<dots.length;j++){
      let dx=dots[i].x-dots[j].x;
      let dy=dots[i].y-dots[j].y;
      let dist=Math.sqrt(dx*dx+dy*dy);
      if(dist<120){
        nCtx.beginPath();
        nCtx.moveTo(dots[i].x,dots[i].y);
        nCtx.lineTo(dots[j].x,dots[j].y);
        nCtx.strokeStyle='rgba(0,255,145,'+(1-dist/120)+')';
        nCtx.stroke();
      }
    }
  }
}
setInterval(drawDots,40);

/* ===== Terminal Logic ===== */
const input=document.getElementById('commandInput');
let currentForm=''; let step=''; let formData={}; let inputActive=false;

function isValidEmail(email){
  return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
}

function showPopup(message, success=true){
  input.style.display='none';
  const popup=document.createElement('div');
  popup.style.position='fixed';
  popup.style.top='50%';
  popup.style.left='50%';
  popup.style.transform='translate(-50%,-50%)';
  popup.style.background='rgba(0,0,0,0.85)';
  popup.style.color='#00ff91';
  popup.style.padding='40px';
  popup.style.fontSize='48px';
  popup.style.fontWeight='bold';
  popup.style.border='3px solid #00ff91';
  popup.style.textAlign='center';
  popup.style.zIndex='10';
  popup.textContent=message.toUpperCase();
  document.body.appendChild(popup);
  const audio=new Audio(success?'https://actions.google.com/sounds/v1/cartoon/clang_and_wobble.ogg':'https://actions.google.com/sounds/v1/cartoon/wood_plank_flicks.ogg');
  audio.play();
  setTimeout(()=>{
    document.body.removeChild(popup);
    input.style.display='block'; input.value=''; input.placeholder=''; input.focus();
  },2000);
}

/* ===== Activate input on first keypress ===== */
document.addEventListener('keydown',function(e){
  if(!inputActive){ input.style.display='block'; input.focus(); inputActive=true; }
});

input.addEventListener('keydown',function(e){
  if(e.key==='Enter'){
    const cmd=input.value.trim(); input.value='';

    if(currentForm){
      /* BACK COMMAND */
      if(cmd.toLowerCase()==='back'){ currentForm=''; step=''; formData={}; input.type='text'; input.placeholder=''; return; }

      /* LOGIN FORM */
      if(currentForm==='login'){
        if(!formData.email){
          if(!isValidEmail(cmd)){ showPopup("Invalid Email", false); return; }
          formData.email=cmd; step='password'; input.type='password'; input.placeholder='Enter password'; return;
        }
        if(!formData.password){
          formData.password=cmd; step='uniqueid'; input.type='text'; input.placeholder='Enter Unique ID'; return;
        }
        if(!formData.uniqueid){
          formData.uniqueid=cmd; step='submit'; input.type='text'; input.placeholder='Type SUBMIT'; return;
        }
        if(step==='submit'){
          if(cmd.toLowerCase()!=='submit'){ showPopup("Type SUBMIT", false); return; }
          showPopup("Login Success", true);
          currentForm=''; step=''; formData={}; input.type='text'; input.placeholder='';
          return;
        }
      }
    } else {
      if(cmd.toLowerCase()==='chandanjaiswallove'){
        currentForm='login'; formData={}; step=''; input.type='text'; input.placeholder='Enter email';
      }
      else if(cmd.toLowerCase()==='help'){
        showPopup("Commands: chandanjaiswallove, BACK, HOME");
      }
      else if(cmd.toLowerCase()==='home'){
        currentForm=''; step=''; formData={}; input.value=''; input.placeholder=''; input.type='text';
      }
      else{
        showPopup("Unknown Command", false);
      }
    }
  }
});
</script>
</body>
</html>

//// here secure terminal login common ui

