<!--doctype--><html><head> 
  <meta charset=utf-8>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <link rel=stylesheet href=css.css>
  <title>Acudits aleatoris</title>
  <script src=acudits.js></script>
  <script>
    let mostrats=0; //acudits mostrats
    function acudit() {
      let n=Math.floor(Math.random()*Acudits.length);
      let xist=Acudits.splice(n,1);
      mostrats++;
      document.getElementById('mostrats').innerHTML=mostrats;
      let text = "<b>Acudit "+n+":</b><div>"+xist+"</div>";
      document.querySelector('#acudit').innerHTML=text;
    }
  </script>
</head><body onload=acudit()><center>
<!--titol--><div id=header><h2>Acudits Aleatoris</h2></div>

<!--contingut-->
<div style="padding:0.1em">
  <!--acudit--><div id=acudit></div>
  <!--un altre-->
  <button onclick=acudit() style="outline:none;padding:1em;font-size:18px;margin-top:0.2em;background:#344055;color:#e6ebfb">
    Un altre!
  </button>
  <!--llegits-->
  <div style=margin:0.7em>
    Acudits llegits: <span style=font-size:30 id=mostrats>0</span> de 
    <span style=font-size:30><script>document.write(Acudits.length)</script></span>
  </div>
  <div> <a href=tots.php style=color:#344055>Veure'ls tots</a> </div>

  <!--formulari-->
  <div style=margin:0.5em>  
    <form action=enviaAcudit.php method=post>
      <textarea name=acudit style="width:70%;height:58px" placeholder="Envia'ns un acudit, comentari o suggeriment"></textarea><!--
      --><button style="height:58px;vertical-align:top;margin-left:-1px">Envia</button>
    </form> 
  </div>
</div>

<!--footer-->
<div id=footer> Acudits aleatoris 2013-2019 — Creat per <a href="https://github.com/holalluis">Lluís Mª Bosch</a></div>
