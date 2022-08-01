
	

	var nq = document.getElementById('NPA');
	var nalf = document.getElementById('NPB');

	var nxa = document.getElementById('CPA');
	var nxb = document.getElementById('CPB');


	alert (nxb.getAttribute("value"));
function calcularValPubCadaLado(){

	// Calcular valores publicos
	vpa =  Math.pow(nalf,nxa)%nq;
	vpb =  Math.pow(nalf,nxb)%nq;

	var rCP = document.getElementById('A');

	rCP.setAttribute(vpa);

	var rCPB = document.getElementById('B');
	rCPB.setAttribute(vpb);


	//sementes trocadas

	ka = Math.pow(vpa,nxa)%nq;
	kb = Math.pow(vpa,nxb)%nq;




}

