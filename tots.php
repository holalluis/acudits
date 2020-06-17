<!--doctype html--><html><head> 
	<meta charset=utf8>
	<title>Acudits aleatoris</title>
	<script src="acudits.js">/*array Acudits*/</script>
	<style>
		div{
			border-bottom:1px solid #415680;
			padding:0.3em;
		}
	</style>
</head>

<script>
	Acudits=Acudits.reverse();
  let i=1;
  Acudits.forEach(txt=>{
    document.write(`<div><b>${i}</b>: ${txt}</div>`);
    i++;
  });
</script>
