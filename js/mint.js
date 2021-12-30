
var mint = document.getElementById("mint");
mint.style.cursor = "pointer";

mint.addEventListener("mouseover", function(){
    this.src="img/home/coming-soon-mint.gif";
});

mint.addEventListener("mouseleave", function(){
    this.src="img/home/boton-mint.gif";
});