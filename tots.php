<!--doctype--><html><head> 
	<meta charset=utf-8>
	<title>Acudits aleatoris</title>
	<script src=acudits.js>/*array Acudits*/</script>
	<style>
		*{margin:0}
		div{
			border-bottom:1px solid #415680;
			padding:0.3em;
		}
	</style>
</head>

<script>
	Acudits=Acudits.reverse();
  Acudits.forEach((a,i)=>{document.write(`<div><b>${i+1}</b>: ${a}</div>`);});
</script>
