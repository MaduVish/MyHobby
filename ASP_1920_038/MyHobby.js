
var img1=0
function setNewImage()
{
    document.getElementById("img1").src="ha.jpg";
}

function setOldImage()
{
    document.getElementById("img1").src="harrypotter.jpg";
}
var hp = 0;
function lumos_fn() {
  if (hp == 0) {
    document.getElementById("wand").src="wand.jpg";

    document.getElementById("lumos").value = "NOX";
    hp = 1;
  } else if (hp == 1) {
    document.getElementById("wand").src ="magi.jpg";

    document.getElementById("lumos").value = "LUMOS";
    hp = 0;
  }
}
var i = Math.floor(Math.random() * 5);
var pecto = [
    "lum.jpg",
    "m.jpg"
];
function pat() {
    document.getElementById("wand").src = pecto[i];
  }
  
  function obli() {
    document.getElementById("s1").style.display = "none";
  }
  