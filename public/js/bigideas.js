/* bigideas.js */

var bigidea1box = document.getElementById("bigidea1");

/* Onclick handler */
bigidea1box.onclick=function(){
	var bi1Element = document.getElementById("bigidea1-standards");
	console.log('bi1Element');
	bi1Element.style.display = "block";
}